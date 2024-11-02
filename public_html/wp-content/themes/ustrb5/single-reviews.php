<?php
/*
Template Name: Страница отдельного Коммента
Template Post Type: reviews
*/
?>
<?php get_header(); ?>
<main>
<?php get_sidebar('popup');?>
	<div class="container">
		<h2><?php the_title(); ?></h2>
			<span style="float:right;max-width:350px;">
				<?php echo get_the_post_thumbnail(); ?>
			</span>
		<?php the_content(); ?>
	</div>

	<section class="strelka"><a name="catalog"></a>
		<div class="container">
			<div class="chevron"></div>
			<div class="chevron"></div>
			<div class="chevron"></div>
		</div>
	</section>
	
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed');?>
	<?php get_sidebar('videos');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>
