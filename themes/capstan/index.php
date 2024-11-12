<?php get_header(); ?>

<section class="page white">
	<div class="breadcrumb fixed white" data-component="BreadcrumbComponent">
		<a href="<?php echo get_site_url(); ?>">Accueil</a> <i class="icon-arrow2"></i> <a href="<?php echo get_permalink(); ?>"><?php the_title() ?></a>
	</div>

	<?php getTemplate('partials/contact'); ?>

    <?php the_content(); ?>

</section>


<?php get_footer(); ?>