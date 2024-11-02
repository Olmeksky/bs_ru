<?php
/*
Template Name: Об агентстве
*/
?>
<?php get_header(); ?>

<main>
<?php get_sidebar('popup');?>
	<div class="container">
		<section class="about">
			<div class="row">
				<div class="col-md-12">
					<div class="content">
						<h1 class="section__title"><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</section>
	</div> <!-- Container -->
<?php get_sidebar('partners'); ?>
<?php get_sidebar('zamer'); ?>

</main>


<?php get_footer(); ?>