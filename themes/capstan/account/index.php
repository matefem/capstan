<?php
    require_once(__DIR__.'/../../../../vendor/autoload.php');


    class Account {

        public static function getUser() {
            if (isset($_SESSION["capstan-account"])) {return $_SESSION["capstan-account"];}
            return null;
        }

        public static function setUser($datas) {
            $_SESSION["capstan-account"] = $datas;
        }

        public static function connect($email, $password) {
            $res = self::call("auth/api-token", array("email" => $email, "password" => $password), "POST");

            if ($res["code"] == 200) {
                $_SESSION["capstan-account"] = $res["body"]["data"];
            }

            return $res;
        }

        public static function update($params) {
            if (!self::getUser()) {return;}

            $p = array_merge(array("email" => "", "first_name" => "", "last_name" => ""), $params);
            $res = self::call("auth", $p, "PUT");

            if ($res["code"] == 200) {
                $_SESSION["capstan-account"] = $res["body"]["data"];
            }

            return $res;
        }

        public static function create($params) {
            $p = array_merge(array("email" => "", "first_name" => "", "last_name" => "", "password" => ""), $params);
            $res = self::call("auth", $p, "POST");

            if ($res["code"] == 200) {
                $_SESSION["capstan-account"] = $res["body"]["data"];
            }

            return $res;
        }

        public static function toggleFavorite($id) {
            if (!self::getUser()) {return;}

            $res = self::call("favorites/toggle", array("article_id" => $id), "POST");

            if ($res["code"] == 200) {
                $_SESSION["capstan-account"]["favorites"] = $res["body"]["data"]["favorites"];
            }

            return $res;
        }

        private static function call($url, $params = array(), $type = "GET") {

            $_baseUrl = "https://news.capstan.fr/api-capstan/";
            $_token = "TWPTWMiaudRpGBonlfQrsG78UUdi2nBK8MLHIPQmSL7aNbAs3s0wo1SrTVjD";
            $client = new GuzzleHttp\Client(['base_uri' => $_baseUrl]);

            $headers = [
                'Capstan-Authorization' => $_token,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json'
            ];

            if (self::getUser()) {
                $headers['Authorization'] = 'Bearer ' . $_SESSION["capstan-account"]["api_token"];
            }

            try {
                $res = $client->request($type, $_baseUrl . $url, ['headers' => $headers, "body" => json_encode($params)]);
            }
            catch (GuzzleHttp\Exception\ClientException $e) {$res = $e->getResponse();}

            return ["code" => $res->getStatusCode(), "body" => json_decode($res->getBody()->getContents(), true)];
        }
    }

    // print_r(Account::create(array("email" => 'maxime@60fps.fr', "first_name" => 'Maxime', "last_name" => 'MANGIN', "password" => 'test'))); die();
    // print_r(Account::connect('maxime@60fps.fr', "test")); die();
    // print_r(Account::toggleFavorite(16308)); die();
    // print_r(Account::update(array("email" => 'maxime@60fps.fr', "first_name" => 'Maxime', "last_name" => 'MANGIN'))); die();
?>