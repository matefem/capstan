<header data-component="HeaderComponent">

	<?php

	    $locations = get_nav_menu_locations();

	    if(!empty($locations['header_id']))
	    	$identite = wp_get_nav_menu_items($locations['header_id']);

	    if(!empty($locations['header_acc']))
	    	$accompagner = wp_get_nav_menu_items($locations['header_acc']);

	    if(!empty($locations['header_fr']))
	    	$france = wp_get_nav_menu_items($locations['header_fr']);

	    if(!empty($locations['header_others']))
	    	$others = wp_get_nav_menu_items($locations['header_others']);

	    if(!empty($locations['join_us']))
	    	$joinus = wp_get_nav_menu_items($locations['join_us']);

	?>
	<div class="overlay"></div>
	<div class="layer"></div>

	<div class="logo">

		<a href="<?php echo get_site_url(); echo get_locale() == 'en_US' ? '/en' : '';?>">
			<svg viewBox="0 0 1869 289" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			    <g id="Logo" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			        <g id="LOGO" transform="translate(-81.000000, -214.000000)" fill-rule="nonzero">
			            <g id="Group" transform="translate(81.000000, 214.000000)">
			                <path d="M480.68,60 L480.68,4.16 L475.16,4.16 L475.16,60 L480.68,60 Z M507,60.96 C515.48,60.96 518.52,56.4 520.2,52.72 L520.36,52.72 L520.36,60 L525.24,60 C524.955556,57.0844444 524.923951,54.2320988 524.920439,51.442963 L524.92,19.2 L519.88,19.2 L519.88,41.76 C519.88,48.56 517,56.64 507.8,56.64 C500.84,56.64 498.12,51.68 498.12,44 L498.12,19.2 L493.08,19.2 L493.08,45.28 C493.08,54.24 496.92,60.96 507,60.96 Z M545.4,60.96 C551.56,60.96 559.64,58 559.64,49.36 C559.64,36 539.56,36.96 539.56,29.36 C539.56,24.16 543.16,22.56 548.36,22.56 C551.16,22.56 554.76,23.28 557.4,24.48 L557.88,20.08 C554.28,18.72 549.96,18.24 547.8,18.24 C541.08,18.24 534.52,21.28 534.52,29.36 C534.52,41.2 554.12,39.68 554.12,49.36 C554.12,54 549.88,56.64 545.08,56.64 C541.16,56.64 537.48,55.6 534.44,54.08 L533.96,59.04 C537.56,60.48 541.48,60.96 545.4,60.96 Z M618.92,60 L618.92,55.2 L596.52,55.2 L596.52,4.16 L591,4.16 L591,60 L618.92,60 Z M636.76,60.96 C641.8,60.96 647.48,58.32 649.72,53.44 L649.88,53.44 L649.88,60 L654.84,60 C654.493333,57.5733333 654.447111,55.3870222 654.440948,52.7119881 L654.44,33.44 C654.44,22.8 650.2,18.24 640.12,18.24 C636.52,18.24 631.24,19.52 628.12,21.04 L628.12,25.92 C631.88,23.52 635.88,22.56 640.12,22.56 C646.92,22.56 649.4,26.08 649.4,33.04 L649.4,35.12 L647.801748,35.1208672 C646.516239,35.1245344 645.178476,35.1409888 643.820529,35.1916576 L643.140022,35.2199424 C633.593536,35.658624 623.32,37.9488 623.32,49.44 C623.32,53.12 625.16,60.96 636.76,60.96 Z M637.32,56.64 C632.68,56.64 628.84,54.64 628.84,49.28 C628.84,41.1164444 637.473284,39.6602864 645.603329,39.465916 L646.197179,39.4538667 C646.394742,39.4505481 646.591872,39.4479012 646.788438,39.4458469 L647.37631,39.4413827 L647.37631,39.4413827 L647.96,39.44 L647.96,39.44 L649.4,39.44 L649.4,41.92 C649.4,46.32 649.16,56.64 637.32,56.64 Z M683.88,60.96 C695.08,60.96 700.68,51.68 700.68,39.6 C700.68,27.2 695.88,18.24 683.88,18.24 C675.88,18.24 671.88,24.08 671.16,26.08 L671,26.08 L671,0 L665.96,0 L665.96,60 L671,60 L671,53.52 L671.16,53.52 C673.88,58.72 678.04,60.96 683.88,60.96 Z M683.08,56.64 C674.12,56.64 671,47.04 671,39.6 C671,32.16 673.88,22.56 683.08,22.56 C692.68,22.56 695.16,31.68 695.16,39.6 C695.16,47.52 692.68,56.64 683.08,56.64 Z M726.84,60.96 C740.04,60.96 745.88,50.72 745.88,39.6 C745.88,28.48 740.04,18.24 726.84,18.24 C713.64,18.24 707.8,28.48 707.8,39.6 C707.8,50.72 713.64,60.96 726.84,60.96 Z M726.84,56.64 C718.04,56.64 713.32,49.04 713.32,39.6 C713.32,30.16 718.04,22.56 726.84,22.56 C735.64,22.56 740.36,30.16 740.36,39.6 C740.36,49.04 735.64,56.64 726.84,56.64 Z M760.44,60 L760.44,39.84 C760.44,32.48 762.6,23.52 770.6,23.52 C771.88,23.52 773.24,23.68 774.28,24 L774.28,18.72 C773.4,18.48 771.96,18.24 770.76,18.24 C765.56,18.24 762.12,22.48 760.28,27.04 L760.12,27.04 L760.12,19.2 L755.08,19.2 C755.355862,21.7517241 755.393912,23.3521998 755.39916,26.6153102 L755.399987,27.8663725 C755.4,28.0143639 755.4,28.1655172 755.4,28.32 L755.4,60 L760.44,60 Z M787.08,8.32 L787.08,1.6 L782.04,1.6 L782.04,8.32 L787.08,8.32 Z M787.08,60 L787.08,19.2 L782.04,19.2 L782.04,60 L787.08,60 Z M807.64,60.96 C813.8,60.96 821.88,58 821.88,49.36 C821.88,36 801.8,36.96 801.8,29.36 C801.8,24.16 805.4,22.56 810.6,22.56 C813.4,22.56 817,23.28 819.64,24.48 L820.12,20.08 C816.52,18.72 812.2,18.24 810.04,18.24 C803.32,18.24 796.76,21.28 796.76,29.36 C796.76,41.2 816.36,39.68 816.36,49.36 C816.36,54 812.12,56.64 807.32,56.64 C803.4,56.64 799.72,55.6 796.68,54.08 L796.2,59.04 C799.8,60.48 803.72,60.96 807.64,60.96 Z M858.52,60 L858.52,33.68 L878.6,33.68 L878.6,28.88 L858.52,28.88 L858.52,8.96 L879.56,8.96 L879.56,4.16 L853,4.16 L853,60 L858.52,60 Z M893.72,60 L893.72,39.84 C893.72,32.48 895.88,23.52 903.88,23.52 C905.16,23.52 906.52,23.68 907.56,24 L907.56,18.72 C906.68,18.48 905.24,18.24 904.04,18.24 C898.84,18.24 895.4,22.48 893.56,27.04 L893.4,27.04 L893.4,19.2 L888.36,19.2 C888.635862,21.7517241 888.673912,23.3521998 888.67916,26.6153102 L888.679987,27.8663725 C888.68,28.0143639 888.68,28.1655172 888.68,28.32 L888.68,60 L893.72,60 Z M925.64,60.96 C930.68,60.96 936.36,58.32 938.6,53.44 L938.76,53.44 L938.76,60 L943.72,60 C943.373333,57.5733333 943.327111,55.3870222 943.320948,52.7119881 L943.32,33.44 C943.32,22.8 939.08,18.24 929,18.24 C925.4,18.24 920.12,19.52 917,21.04 L917,25.92 C920.76,23.52 924.76,22.56 929,22.56 C935.8,22.56 938.28,26.08 938.28,33.04 L938.28,35.12 L936.681748,35.1208672 C935.396239,35.1245344 934.058476,35.1409888 932.700529,35.1916576 L932.020022,35.2199424 C922.473536,35.658624 912.2,37.9488 912.2,49.44 C912.2,53.12 914.04,60.96 925.64,60.96 Z M926.2,56.64 C921.56,56.64 917.72,54.64 917.72,49.28 C917.72,41.1164444 926.353284,39.6602864 934.483329,39.465916 L935.077179,39.4538667 C935.274742,39.4505481 935.471872,39.4479012 935.668438,39.4458469 L936.25631,39.4413827 L936.25631,39.4413827 L936.84,39.44 L936.84,39.44 L938.28,39.44 L938.28,41.92 C938.28,46.32 938.04,56.64 926.2,56.64 Z M960.36,60 L960.36,37.44 C960.36,30.64 963.24,22.56 972.44,22.56 C979.4,22.56 982.12,27.52 982.12,35.2 L982.12,60 L987.16,60 L987.16,33.92 C987.16,24.96 983.32,18.24 973.24,18.24 C964.76,18.24 961.72,22.8 960.04,26.48 L959.88,26.48 L959.88,19.2 L955,19.2 C955.32,22.48 955.32,25.68 955.32,28.8 L955.32,60 L960.36,60 Z M1016.28,60.96 C1020.12,60.96 1023.32,60.72 1026.76,59.52 L1026.28,54.8 C1023.24,55.92 1020.28,56.64 1017.08,56.64 C1007.88,56.64 1002.28,48.88 1002.28,39.6 C1002.28,29.68 1007.8,22.56 1017.64,22.56 C1020.36,22.56 1023.64,23.44 1026.36,24.64 L1026.76,19.84 C1025.32,19.36 1021.8,18.24 1016.92,18.24 C1004.84,18.24 996.76,27.04 996.76,39.6 C996.76,50.96 1003.16,60.96 1016.28,60.96 Z M1050.84,60.96 C1054.6,60.96 1059.16,60.16 1062.68,58.72 L1062.68,53.6 C1060.28,55.12 1054.92,56.64 1051.24,56.64 C1042.44,56.64 1037.8,49.68 1037.8,41.04 L1065.72,41.04 L1065.72,38.48 C1065.72,27.52 1061,18.24 1049.48,18.24 C1039.16,18.24 1032.28,27.12 1032.28,39.6 C1032.28,51.84 1037.32,60.96 1050.84,60.96 Z M1060.2,36.72 L1037.8,36.72 C1037.8,30 1042.36,22.56 1049.8,22.56 C1057.32,22.56 1060.2,29.6 1060.2,36.72 Z M1124.52,60.96 C1130.68,60.96 1136.2,60 1141.88,57.52 L1141.88,29.76 L1123.4,29.76 L1123.4,34.56 L1136.36,34.56 L1136.36,54.16 C1133.72,55.76 1127.96,56.16 1124.52,56.16 C1109.8,56.16 1101.88,46.16 1101.88,32.08 C1101.88,18.24 1110.04,8 1124.52,8 C1129.4,8 1134.52,8.56 1138.84,10.96 L1139.48,5.84 C1135.72,3.92 1128.76,3.2 1124.52,3.2 C1107.24,3.2 1096.36,15.12 1096.36,32.08 C1096.36,49.36 1106.92,60.96 1124.52,60.96 Z M1160.36,60 L1160.36,0 L1155.32,0 L1155.32,60 L1160.36,60 Z M1189,60.96 C1202.2,60.96 1208.04,50.72 1208.04,39.6 C1208.04,28.48 1202.2,18.24 1189,18.24 C1175.8,18.24 1169.96,28.48 1169.96,39.6 C1169.96,50.72 1175.8,60.96 1189,60.96 Z M1189,56.64 C1180.2,56.64 1175.48,49.04 1175.48,39.6 C1175.48,30.16 1180.2,22.56 1189,22.56 C1197.8,22.56 1202.52,30.16 1202.52,39.6 C1202.52,49.04 1197.8,56.64 1189,56.64 Z M1235,60.96 C1246.2,60.96 1251.8,51.68 1251.8,39.6 C1251.8,27.2 1247,18.24 1235,18.24 C1227,18.24 1223,24.08 1222.28,26.08 L1222.12,26.08 L1222.12,0 L1217.08,0 L1217.08,60 L1222.12,60 L1222.12,53.52 L1222.28,53.52 C1225,58.72 1229.16,60.96 1235,60.96 Z M1234.2,56.64 C1225.24,56.64 1222.12,47.04 1222.12,39.6 C1222.12,32.16 1225,22.56 1234.2,22.56 C1243.8,22.56 1246.28,31.68 1246.28,39.6 C1246.28,47.52 1243.8,56.64 1234.2,56.64 Z M1272.36,60.96 C1277.4,60.96 1283.08,58.32 1285.32,53.44 L1285.48,53.44 L1285.48,60 L1290.44,60 C1290.09333,57.5733333 1290.04711,55.3870222 1290.04095,52.7119881 L1290.04,33.44 C1290.04,22.8 1285.8,18.24 1275.72,18.24 C1272.12,18.24 1266.84,19.52 1263.72,21.04 L1263.72,25.92 C1267.48,23.52 1271.48,22.56 1275.72,22.56 C1282.52,22.56 1285,26.08 1285,33.04 L1285,35.12 L1283.40175,35.1208672 C1282.11624,35.1245344 1280.77848,35.1409888 1279.42053,35.1916576 L1278.74002,35.2199424 C1269.19354,35.658624 1258.92,37.9488 1258.92,49.44 C1258.92,53.12 1260.76,60.96 1272.36,60.96 Z M1272.92,56.64 C1268.28,56.64 1264.44,54.64 1264.44,49.28 C1264.44,41.1164444 1273.07328,39.6602864 1281.20333,39.465916 L1281.79718,39.4538667 C1281.99474,39.4505481 1282.19187,39.4479012 1282.38844,39.4458469 L1282.97631,39.4413827 L1282.97631,39.4413827 L1283.56,39.44 L1283.56,39.44 L1285,39.44 L1285,41.92 C1285,46.32 1284.76,56.64 1272.92,56.64 Z M1307.08,60 L1307.08,0 L1302.04,0 L1302.04,60 L1307.08,60 Z M1348.28,60 L1348.28,33.68 L1376.52,33.68 L1376.52,60 L1382.04,60 L1382.04,4.16 L1376.52,4.16 L1376.52,28.88 L1348.28,28.88 L1348.28,4.16 L1342.76,4.16 L1342.76,60 L1348.28,60 Z M1401.64,60 L1401.64,33.68 L1406.2,33.68 C1411.48,33.68 1413.88,33.92 1417.08,41.12 L1425.16,60 L1431.24,60 L1421.72,38.4 C1419.96,34.64 1419,32.24 1414.52,31.68 L1414.52,31.52 C1421.4,30.64 1426.92,25.84 1426.92,18.64 C1426.92,8.4 1420.44,4.16 1410.52,4.16 L1396.12,4.16 L1396.12,60 L1401.64,60 Z M1407.48,28.88 L1401.64,28.88 L1401.64,8.96 L1407.32,8.96 C1414.92,8.96 1421.4,9.52 1421.4,18.64 C1421.4,26.4 1413.96,28.88 1407.48,28.88 Z M1490.12,60 L1490.12,55.2 L1467.72,55.2 L1467.72,4.16 L1462.2,4.16 L1462.2,60 L1490.12,60 Z M1507.96,60.96 C1513,60.96 1518.68,58.32 1520.92,53.44 L1521.08,53.44 L1521.08,60 L1526.04,60 C1525.69333,57.5733333 1525.64711,55.3870222 1525.64095,52.7119881 L1525.64,33.44 C1525.64,22.8 1521.4,18.24 1511.32,18.24 C1507.72,18.24 1502.44,19.52 1499.32,21.04 L1499.32,25.92 C1503.08,23.52 1507.08,22.56 1511.32,22.56 C1518.12,22.56 1520.6,26.08 1520.6,33.04 L1520.6,35.12 L1519.00175,35.1208672 C1517.71624,35.1245344 1516.37848,35.1409888 1515.02053,35.1916576 L1514.34002,35.2199424 C1504.79354,35.658624 1494.52,37.9488 1494.52,49.44 C1494.52,53.12 1496.36,60.96 1507.96,60.96 Z M1508.52,56.64 C1503.88,56.64 1500.04,54.64 1500.04,49.28 C1500.04,41.1164444 1508.67328,39.6602864 1516.80333,39.465916 L1517.39718,39.4538667 C1517.59474,39.4505481 1517.79187,39.4479012 1517.98844,39.4458469 L1518.57631,39.4413827 L1518.57631,39.4413827 L1519.16,39.44 L1519.16,39.44 L1520.6,39.44 L1520.6,41.92 C1520.6,46.32 1520.36,56.64 1508.52,56.64 Z M1551.08,60 L1562.2,24.72 L1562.36,24.72 L1573.48,60 L1579.56,60 L1593,19.2 L1587.96,19.2 L1576.68,54.48 L1576.52,54.48 L1565.72,19.2 L1559.64,19.2 L1548.28,54.48 L1548.12,54.48 L1537.4,19.2 L1531.88,19.2 L1545,60 L1551.08,60 Z M1601.56,77.28 C1607.24,77.28 1610.12,71.68 1612.04,66.08 L1628.36,19.2 L1623.08,19.2 L1611.32,53.2 L1611.24,53.2 L1599.8,19.2 L1594.28,19.2 L1608.76,60.48 L1607.72,64.08 C1606.12,69.36 1604.68,72.96 1600.36,72.96 C1598.52,72.96 1597.56,72.64 1596.6,72.32 L1596.12,76.64 C1597.8,77.04 1599.72,77.28 1601.56,77.28 Z M1650.92,60.96 C1654.68,60.96 1659.24,60.16 1662.76,58.72 L1662.76,53.6 C1660.36,55.12 1655,56.64 1651.32,56.64 C1642.52,56.64 1637.88,49.68 1637.88,41.04 L1665.8,41.04 L1665.8,38.48 C1665.8,27.52 1661.08,18.24 1649.56,18.24 C1639.24,18.24 1632.36,27.12 1632.36,39.6 C1632.36,51.84 1637.4,60.96 1650.92,60.96 Z M1660.28,36.72 L1637.88,36.72 C1637.88,30 1642.44,22.56 1649.88,22.56 C1657.4,22.56 1660.28,29.6 1660.28,36.72 Z M1680.44,60 L1680.44,39.84 C1680.44,32.48 1682.6,23.52 1690.6,23.52 C1691.88,23.52 1693.24,23.68 1694.28,24 L1694.28,18.72 C1693.4,18.48 1691.96,18.24 1690.76,18.24 C1685.56,18.24 1682.12,22.48 1680.28,27.04 L1680.12,27.04 L1680.12,19.2 L1675.08,19.2 C1675.35586,21.7517241 1675.39391,23.3521998 1675.39916,26.6153102 L1675.39999,27.8663725 C1675.4,28.0143639 1675.4,28.1655172 1675.4,28.32 L1675.4,60 L1680.44,60 Z M1709.88,60.96 C1716.04,60.96 1724.12,58 1724.12,49.36 C1724.12,36 1704.04,36.96 1704.04,29.36 C1704.04,24.16 1707.64,22.56 1712.84,22.56 C1715.64,22.56 1719.24,23.28 1721.88,24.48 L1722.36,20.08 C1718.76,18.72 1714.44,18.24 1712.28,18.24 C1705.56,18.24 1699,21.28 1699,29.36 C1699,41.2 1718.6,39.68 1718.6,49.36 C1718.6,54 1714.36,56.64 1709.56,56.64 C1705.64,56.64 1701.96,55.6 1698.92,54.08 L1698.44,59.04 C1702.04,60.48 1705.96,60.96 1709.88,60.96 Z" class="text" fill="#FFFFFF"></path>
			                <path d="M548.254,247.472 C557.318,247.472 573.386,246.03 581.214,241.292 L580.39,228.932 C572.15,233.876 557.73,235.112 548.254,235.112 C510.35,235.112 489.956,209.362 489.956,173.106 C489.956,137.468 510.968,111.1 548.254,111.1 C558.348,111.1 571.326,112.542 580.39,117.28 L581.214,104.096 C573.798,100.182 556.7,98.74 548.254,98.74 C503.758,98.74 475.742,129.434 475.742,173.106 C475.742,217.602 502.934,247.472 548.254,247.472 Z M633.25,247.472 C646.228,247.472 660.854,240.674 666.622,228.108 L667.034,228.108 L667.034,245 L679.806,245 C678.852296,238.324074 678.781652,232.354595 678.776419,224.802152 L678.776,176.608 C678.776,149.21 667.858,137.468 641.902,137.468 C632.632,137.468 619.036,140.764 611.002,144.678 L611.002,157.244 C620.684,151.064 630.984,148.592 641.902,148.592 C659.412,148.592 665.798,157.656 665.798,175.578 L665.798,180.934 L663.326,180.934 C636.134,180.934 598.642,182.582 598.642,217.808 C598.642,227.284 603.38,247.472 633.25,247.472 Z M634.692,236.348 C622.744,236.348 612.856,231.198 612.856,217.396 C612.856,194.324 639.636,192.058 662.09,192.058 L665.798,192.058 L665.798,198.444 C665.798,209.774 665.18,236.348 634.692,236.348 Z M718.418,288.26 L718.418,227.078 L718.83,227.078 C725.216,240.674 735.104,247.472 751.584,247.472 C780.424,247.472 794.844,223.576 794.844,192.47 C794.844,160.54 782.484,137.468 751.584,137.468 C729.336,137.468 721.302,153.33 718.006,159.098 L717.594,159.098 L718.418,139.94 L705.44,139.94 L705.44,288.26 L718.418,288.26 Z M749.524,236.348 C726.452,236.348 718.418,211.628 718.418,192.47 C718.418,173.312 726.452,148.592 749.524,148.592 C774.244,148.592 780.63,172.076 780.63,192.47 C780.63,212.864 774.244,236.348 749.524,236.348 Z M838.4,247.472 C854.262,247.472 875.068,239.85 875.068,217.602 C875.068,183.2 823.362,185.672 823.362,166.102 C823.362,152.712 832.632,148.592 846.022,148.592 C853.232,148.592 862.502,150.446 869.3,153.536 L870.536,142.206 C861.266,138.704 850.142,137.468 844.58,137.468 C827.276,137.468 810.384,145.296 810.384,166.102 C810.384,196.59 860.854,192.676 860.854,217.602 C860.854,229.55 849.936,236.348 837.576,236.348 C827.482,236.348 818.006,233.67 810.178,229.756 L808.942,242.528 C818.212,246.236 828.306,247.472 838.4,247.472 Z M927.688,247.472 C934.074,247.472 940.46,245.824 943.55,244.588 L942.726,233.876 C939.018,235.318 935.722,236.348 930.778,236.348 C920.272,236.348 916.77,228.52 916.77,219.044 L916.77,151.064 L940.666,151.064 L940.666,139.94 L916.77,139.94 L916.77,110.07 L903.792,114.602 L903.792,139.94 L883.192,139.94 L883.192,151.064 L903.792,151.064 L903.792,212.452 C903.792,231.61 904.616,247.472 927.688,247.472 Z M987.518,247.472 C1000.496,247.472 1015.122,240.674 1020.89,228.108 L1021.302,228.108 L1021.302,245 L1034.074,245 C1033.1203,238.324074 1033.04965,232.354595 1033.04442,224.802152 L1033.044,176.608 C1033.044,149.21 1022.126,137.468 996.17,137.468 C986.9,137.468 973.304,140.764 965.27,144.678 L965.27,157.244 C974.952,151.064 985.252,148.592 996.17,148.592 C1013.68,148.592 1020.066,157.656 1020.066,175.578 L1020.066,180.934 L1017.594,180.934 C990.402,180.934 952.91,182.582 952.91,217.808 C952.91,227.284 957.648,247.472 987.518,247.472 Z M988.96,236.348 C977.012,236.348 967.124,231.198 967.124,217.396 C967.124,194.324 993.904,192.058 1016.358,192.058 L1020.066,192.058 L1020.066,198.444 C1020.066,209.774 1019.448,236.348 988.96,236.348 Z M1073.922,245 L1073.922,186.908 C1073.922,169.398 1081.338,148.592 1105.028,148.592 C1122.95,148.592 1129.954,161.364 1129.954,181.14 L1129.954,245 L1142.932,245 L1142.932,177.844 C1142.932,154.772 1133.044,137.468 1107.088,137.468 C1085.252,137.468 1077.424,149.21 1073.098,158.686 L1072.686,158.686 L1072.686,139.94 L1060.12,139.94 C1060.944,148.386 1060.944,156.626 1060.944,164.66 L1060.944,245 L1073.922,245 Z M1226.954,245 L1242.404,206.478 L1314.916,206.478 L1330.366,245 L1345.198,245 L1288.136,101.212 L1272.068,101.212 L1213.152,245 L1226.954,245 Z M1310.178,194.118 L1247.76,194.118 L1279.072,114.808 L1310.178,194.118 Z M1393.904,245 L1430.778,139.94 L1417.182,139.94 L1386.694,230.786 L1386.282,230.786 L1357.236,139.94 L1343.022,139.94 L1378.66,245 L1393.904,245 Z M1486.9,247.472 C1520.89,247.472 1535.928,221.104 1535.928,192.47 C1535.928,163.836 1520.89,137.468 1486.9,137.468 C1452.91,137.468 1437.872,163.836 1437.872,192.47 C1437.872,221.104 1452.91,247.472 1486.9,247.472 Z M1486.9,236.348 C1464.24,236.348 1452.086,216.778 1452.086,192.47 C1452.086,168.162 1464.24,148.592 1486.9,148.592 C1509.56,148.592 1521.714,168.162 1521.714,192.47 C1521.714,216.778 1509.56,236.348 1486.9,236.348 Z M1599.878,247.472 C1609.766,247.472 1618.006,246.854 1626.864,243.764 L1625.628,231.61 C1617.8,234.494 1610.178,236.348 1601.938,236.348 C1578.248,236.348 1563.828,216.366 1563.828,192.47 C1563.828,166.926 1578.042,148.592 1603.38,148.592 C1610.384,148.592 1618.83,150.858 1625.834,153.948 L1626.864,141.588 C1623.156,140.352 1614.092,137.468 1601.526,137.468 C1570.42,137.468 1549.614,160.128 1549.614,192.47 C1549.614,221.722 1566.094,247.472 1599.878,247.472 Z M1672.48,247.472 C1685.458,247.472 1700.084,240.674 1705.852,228.108 L1706.264,228.108 L1706.264,245 L1719.036,245 C1718.0823,238.324074 1718.01165,232.354595 1718.00642,224.802152 L1718.006,176.608 C1718.006,149.21 1707.088,137.468 1681.132,137.468 C1671.862,137.468 1658.266,140.764 1650.232,144.678 L1650.232,157.244 C1659.914,151.064 1670.214,148.592 1681.132,148.592 C1698.642,148.592 1705.028,157.656 1705.028,175.578 L1705.028,180.934 L1702.556,180.934 C1675.364,180.934 1637.872,182.582 1637.872,217.808 C1637.872,227.284 1642.61,247.472 1672.48,247.472 Z M1673.922,236.348 C1661.974,236.348 1652.086,231.198 1652.086,217.396 C1652.086,194.324 1678.866,192.058 1701.32,192.058 L1705.028,192.058 L1705.028,198.444 C1705.028,209.774 1704.41,236.348 1673.922,236.348 Z M1778.248,247.472 C1784.634,247.472 1791.02,245.824 1794.11,244.588 L1793.286,233.876 C1789.578,235.318 1786.282,236.348 1781.338,236.348 C1770.832,236.348 1767.33,228.52 1767.33,219.044 L1767.33,151.064 L1791.226,151.064 L1791.226,139.94 L1767.33,139.94 L1767.33,110.07 L1754.352,114.602 L1754.352,139.94 L1733.752,139.94 L1733.752,151.064 L1754.352,151.064 L1754.352,212.452 C1754.352,231.61 1755.176,247.472 1778.248,247.472 Z M1831.692,247.472 C1847.554,247.472 1868.36,239.85 1868.36,217.602 C1868.36,183.2 1816.654,185.672 1816.654,166.102 C1816.654,152.712 1825.924,148.592 1839.314,148.592 C1846.524,148.592 1855.794,150.446 1862.592,153.536 L1863.828,142.206 C1854.558,138.704 1843.434,137.468 1837.872,137.468 C1820.568,137.468 1803.676,145.296 1803.676,166.102 C1803.676,196.59 1854.146,192.676 1854.146,217.602 C1854.146,229.55 1843.228,236.348 1830.868,236.348 C1820.774,236.348 1811.298,233.67 1803.47,229.756 L1802.234,242.528 C1811.504,246.236 1821.598,247.472 1831.692,247.472 Z" class="text" fill="#FFFFFF"></path>
			                <path d="M0,150 C13.1021062,196.505495 50.0989011,233.032967 97,246 L97,246 L0,246 Z M159,150 C172.102106,196.505495 209.054487,233.032967 256,246 L256,246 L159,246 Z M416,150 L416,246 L318,246 C365.43379,233.038902 402.754338,196.440275 416,150 L416,150 Z M97,5 L97,101 C83.8978938,54.5384615 46.9455128,18.010989 0,5 L0,5 L97,5 Z M256,5 L256,101 C242.897894,54.5384615 205.945513,18.010989 159,5 L159,5 L256,5 Z" id="Combined-Shape" fill="#FF0000"></path>
			            </g>
			        </g>
			    </g>
			</svg>
		</a>
	</div>

	<div class="burger">
		<u></u>
		<u></u>
	</div>

	<div class="nav">
		<ul>
			<?php
			if(!empty($identite)) { ?>
			<li class="has-sub">
				<span class="title"><?php echo wp_get_nav_menu_object($locations['header_id'])->name; ?></span>
				<i class="icon-arrow-right"></i>
				<ul>
					<?php
					foreach($identite as $i => $item) { ?>
						<li><span><?php echo (($i+1)<10?'0':'').($i+1) ?></span><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a></li>
					<?php } ?>
				</ul>
			</li>
			<?php }

			if(!empty($accompagner)) { ?>
			<li class="has-sub">
				<span class="title"><?php echo wp_get_nav_menu_object($locations['header_acc'])->name; ?></span>
				<i class="icon-arrow-right"></i>
				<ul>
					<?php
					foreach($accompagner as $i => $item) { ?>
						<li><span><?php echo (($i+1)<10?'0':'').($i+1) ?></span><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a></li>
					<?php } ?>
				</ul>
			</li>
			<?php }

			if(!empty($france)) { ?>
			<li class="has-sub">
				<span class="title"><?php echo wp_get_nav_menu_object($locations['header_fr'])->name; ?></span>
				<i class="icon-arrow-right"></i>
				<ul>
					<?php
					foreach($france as $i => $item) { ?>
						<li><span><?php echo (($i+1)<10?'0':'').($i+1) ?></span><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a></li>
					<?php } ?>
				</ul>
			</li>
			<?php }

			if(!empty($others)) {
				foreach($others as $i => $item) { ?>
					<li><a href="<?php echo $item->url ?>"><?php echo $item->title ?></a></li>
				<?php }
			} ?>
		</ul>

		<div class="langs">
			<div class="lang <?php echo get_locale() == 'fr_FR' ? 'active' : ''; ?>"><a data-method="noajax" href="/">Fr</a></div>
			<div class="lang <?php echo get_locale() == 'en_US' ? 'active' : ''; ?>"><a data-method="noajax" href="/en">En</a></div>
		</div>

		<?php
		if(!empty($joinus) && count($joinus) > 0) { ?>
		<a class="link-arrow-top join-us" href="<?php echo $joinus[0]->url; ?>"><?php echo $joinus[0]->title; ?><i class="icon-arrow-top"></i></a>
		<?php } ?>

		<div class="line"></div>
	</div>

	<div class="account-wrapper badge-connexion">
		<?php
			$user = Account::getUser();
			if (isset($user) && !empty($user)) {?>
				<a href="<?php echo get_permalink(getPageByFilename("account.php")); ?>" class="connected"><span><?php echo substr($user["first_name"], 0, 1) . substr($user["last_name"], 0, 1); ?></span></a>
			<?php }
			else { ?>
				<a href="<?php echo get_permalink(getPageByFilename("profile.php")); ?>" class="not-connected"><svg width="19" height="19" xmlns="http://www.w3.org/2000/svg"><path d="M17.941 19v-2.118a4.235 4.235 0 0 0-4.235-4.235h-8.47A4.235 4.235 0 0 0 1 16.882V19m8.47-9.53a4.235 4.235 0 1 0 0-8.47 4.235 4.235 0 0 0 0 8.47Z" stroke="#000" stroke-width=".8" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"/></svg></a>
			<?php }
		?>
	</div>


</header>