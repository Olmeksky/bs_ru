<?php
/*
Template Name: Отзывы

*/
?>
<?php get_header(); ?>

<main>
<?php get_sidebar('popup');?>
<section class="reviews">
	<div class="container">
		<h2 class="reviews__title section__title">Отзывы о компании</h2>
		
		<div class="reviews-slider">
		<?php
			global $post;
			$query = new WP_Query( [
				'posts_per_page'	=> 15,
				'post_type'			=> 'reviews',
			] );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<!-- Вывод Новостей, функции цикла: the_title() и т.д. -->
					<div class="reviews-slider__items mx-1">
						<div class="reviews-slider__text"><?php the_content(); ?></div>
						<img class="reviews-slider__image" src="<?php echo get_the_post_thumbnail_url();?>" />
						<span class="reviews-slider__name"><?php the_title(); ?></span>
					</div>
					<?php
				}
			} else {
				?>
					<p>Новостей не найдено</p>
				<?php
			}
			wp_reset_postdata(); // Сбрасываем $post
		?>
		
		</div>
		
		
		
		<!--
		<div class="reviews-slider">
			<div class="reviews-slider__items mx-1">
				<div class="reviews-slider__text">Это очень хорошая компания! Очень приемлемые цены. Я заказывал остекление балкона и установку окон. Помощь менеджера Александра была неоценима, он смог грамотно проконсультировать и произвести расчеты. Было установлено все в срок, без каких-либо нареканий. Благодарен за качественно выполненную работу! У меня есть желание рекомендовать эту компанию всем своим знакомым.</div>
				<img class="reviews-slider__image" src="/wp-content/themes/ustrb5/assets/img/reviews/vvv.jpg" alt="">
				<span class="reviews-slider__name">Сергей<br />Москва</span>
			</div>
			<div class="reviews-slider__items mx-1">
				<div class="reviews-slider__text">В компанию обратился для того, чтобы установить новые окна и балкон, а также произвести утепление балкона и обновить его внешний вид. Вызвал менеджера, который приехал быстро и четко ответил на все вопросы. Уже через три дня после начала работ все было готово. Свое дело монтажник выполнил качественно, при этом он не только быстро и красиво завершил работу, но и убрал за собой мусор. В подарок мне подарили две сетки антикошки и сушилку для белья.</div>
				<img class="reviews-slider__image" src="/wp-content/themes/ustrb5/assets/img/reviews/sss.jpg" alt="">
				<span class="reviews-slider__name">Игорь<br />Москва</span>
			</div>
			<div class="reviews-slider__items mx-1">
				<div class="reviews-slider__text">Всем советую эту компанию. Оперативно все решили с моими окнами. Очень рада что теперь меня радуют не старые деревянные, а новые белоснежные пластиковые окна.</div>
				<img class="reviews-slider__image" src="/wp-content/themes/ustrb5/assets/img/reviews/aaa.jpg" alt="">
				<span class="reviews-slider__name">Александра<br />Москва</span>
			</div>
			<div class="reviews-slider__items mx-1">
				<div class="reviews-slider__text">Очень долго выбирала где приобрести окна и выбор пал на эту компанию. Очень понравилось общение с замерщиком - редко увидишь такой подход к работе. Качество окон очень даже приятно удивило, всем рекомендую!</div>
				<img class="reviews-slider__image" src="/wp-content/themes/ustrb5/assets/img/reviews/vvv.jpg" alt="">
				<span class="reviews-slider__name">Евгения<br />Москва</span>
			</div>
			<div class="reviews-slider__items mx-1">
				<div class="reviews-slider__text">Это очень хорошая компания! Очень приемлемые цены. Я заказывал остекление балкона и установку окон. Помощь менеджера Александра была неоценима, он смог грамотно проконсультировать и произвести расчеты. Было установлено все в срок, без каких-либо нареканий. Благодарен за качественно выполненную работу! У меня есть желание рекомендовать эту компанию всем своим знакомым.</div>
				<img class="reviews-slider__image" src="/wp-content/themes/ustrb5/assets/img/reviews/sss.jpg" alt="">
				<span class="reviews-slider__name">Владимир<br />Москва</span>
			</div>
			<div class="reviews-slider__items mx-1">
				<div class="reviews-slider__text">В компанию обратился для того, чтобы установить новые окна и балкон, а также произвести утепление балкона и обновить его внешний вид. Вызвал менеджера, который приехал быстро и четко ответил на все вопросы. Уже через три дня после начала работ все было готово. Свое дело монтажник выполнил качественно, при этом он не только быстро и красиво завершил работу, но и убрал за собой мусор. В подарок мне подарили две сетки антикошки и сушилку для белья.</div>
				<img class="reviews-slider__image" src="/wp-content/themes/ustrb5/assets/img/reviews/aaa.jpg" alt="">
				<span class="reviews-slider__name">Василиса<br />Москва</span>
			</div>
		</div>-->
		
		
	</div>
</section>
	<section class="strelka"><a name="catalog"></a>
		<div class="container">
			<div class="chevron"></div>
			<div class="chevron"></div>
			<div class="chevron"></div>
		</div>
	</section>
	<?php get_sidebar('completed_f1');?>
	<?php get_sidebar('videos');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('questions'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('zamer'); ?>

</main>



<?php get_footer(); ?>