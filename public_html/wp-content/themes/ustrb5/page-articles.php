<?php
/*
Template Name: Статьи
*/
?>
<?php get_header(); ?>
<main>
<?php get_sidebar('popup');?>
<section class="news">
	<div class="container">
		<h2 class="news__title section__title">Статьи Балконы столицы</h2>
		<div class="row">
		<?php
			global $post;
			$query = new WP_Query( [
				'posts_per_page'	=> 16,
				'post_type'			=> 'post',
			] );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<!-- Вывод Статей, функции цикла: the_title() и т.д. -->
					<div class="col-lg-4 col-sm-6 col-12">
						<h2 class="news_title"><a class="news_link" href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
						<a class="news_link" href="<?php the_permalink();?>"><img class="news_img" src="<?php echo get_the_post_thumbnail_url();?>" /></a>
						
						<p><?php the_truncated_post(500); ?></p>
						<a  href="<?php the_permalink();?>">Читать полностью</a>

					</div>
					<?php
				}
			} else {
				?>
					<p>Статей не найдено</p>
				<?php
			}
			wp_reset_postdata(); // Сбрасываем $post
		?>
		
		</div>
	</div>
</section>
	<section class="strelka"><a name="catalog"></a>
		<div class="container">
			<div class="chevron"></div>
			<div class="chevron"></div>
			<div class="chevron"></div>
		</div>
	</section>
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('questions'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed_f1');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('zamer'); ?>

</main>


<?php get_footer(); ?>