<?php

if (! function_exists('balconi_setup')) {
	function balconi_setup () {
		// Добавим возможность загрузки логотипа, через настройки сайта
		add_theme_support( 'custom-logo', [
			'height'		=> 70,
			'width'			=> 190,
			'flex-width'	=> true,
			'flex-height'	=> false,
			'header-text'	=> 'БАЛКОНЫ СТОЛИЦЫ',
			'unlink-homepage-logo' => false,
		] );
		// Добавим динамический Тайтл
		add_theme_support('title-tag');
	}
	add_action('after_setup_theme','balconi_setup');
}

/*
 * This is the child theme for Understrap theme.
 */
add_action( 'wp_enqueue_scripts', 'ustrb5_enqueue_styles' );
function ustrb5_enqueue_styles() {
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style('fancybox','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), wp_get_theme()->get('Version'));
	//wp_enqueue_style('bootstrap-theme', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css');
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', get_stylesheet_directory_uri() . '/assets/js/jquery-3.7.1.min.js');
	wp_enqueue_script( 'jquery' );
	
	// подключим библиотеку для карусели бутстрап
	wp_register_script( 'bbundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script('bbundle');
	
	// подключаем свои скрипты
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js');
	
	wp_enqueue_script( 'jquery-countdown', get_stylesheet_directory_uri() . '/assets/js/jquery.countdown.js');
	
	// скрипт для отправки форм в телегу
	wp_register_script( 'axios', 'https://cdn.jsdelivr.net/npm/axios@1.6.7/dist/axios.min.js');
	wp_enqueue_script('axios');
	
	// Скрипты валидации телефона
	wp_register_script( 'validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js');
	wp_enqueue_script('validate');
	wp_register_script( 'inputmask', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js');
	wp_enqueue_script('inputmask');
}

//add_action( 'wp_footer', 'ustrb5_styles_footer' );

// Add Fancybox in footer
function add_fancybox (){
	if (is_singular()) {
		echo "<script src=\"https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js\"></script>";

		/*echo '<script type="text/javascript">
				 $(document).ready(function(){
					 $(".wp-block-image").find("a:has(img)").addClass(\'fancyboxImg\');
					 $("a.fancyboxImg").fancybox({\'transitionIn\':\'elastic\',\'transitionOut\':\'elastic\',openEffect:\'elastic\',\'speedIn\':600,\'speedOut\':200,\'overlayShow\':false});
				 });
			 </script>';*/
	}
}
add_action('wp_footer', 'add_fancybox');

/* Инициация класса отправки писем и SMTP 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

add_action('phpmailer_init', 'wpse_phpmailer_init');
function wpse_phpmailer_init(PHPMailer $phpmailer) {
$phpmailer->isSMTP();
$phpmailer->Host = 'smtp.spaceweb.ru';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 465;
$phpmailer->SMTPSecure = 'ssl';
$phpmailer->Username = 'admin@balconi-stolicy.ru';
$phpmailer->Password = 'Dolgopodbirat12';

#$phpmailer->setFrom('admin@balconi-stolicy.ru', 'Балконы Столицы');
$phpmailer->From = 'admin@balconi-stolicy.ru';
$phpmailer->FromName = 'Балконы Столицы';

$phpmailer->Sender = 'admin@balconi-stolicy.ru';
}
*/


/* Ваш дополнительный код */

add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );
function my_action_callback() {
	echo ('Обработка формы');
	// выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
	wp_die();
}


/* Функция инициализации */

add_action('init', 'my_custom_init');
function my_custom_init(){
	
	/* Новый тип записи НОВОСТИ */
	register_post_type('news', array(
		'labels'					=> array(
			'name'					=> 'Новости', // Основное название типа записи
			'singular_name'			=> 'Новость', // отдельное название записи этого типа
			'name_admin_bar'		=> 'Новостя',
			'menu_name'				=> 'Новости',
			'add_new'				=> 'Добавить новую',
			'add_new_item'			=> 'Добавить новую Новость',
			'edit_item'				=> 'Редактировать Новость',
			'new_item'				=> 'Новая Новость',
			'view_item'				=> 'Посмотреть Новость',
			'search_items'			=> 'Найти Новость',
			'not_found'				=> 'Новостей не найдено',
			'not_found_in_trash'	=> 'В корзине Новостей не найдено',
			'parent_item_colon'		=> '',
			'featured_image'		=> 'Фото События',
			'set_featured_image'	=> 'Установите Фотографию события'
		),
		'public'				=> true,
		'rewrite'				=> [ 'slug' => 'news' ],
		'capability_type'		=> 'post',
		'has_archive'			=> 'news-arch',
		'rewrite'				=> true,
		'publicly_queryable'	=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post',
		'hierarchical'			=> false,
		'menu_position'			=> 5,
		'supports'				=> array('title','editor','thumbnail','excerpt','custom-fields','page-attributes','post-formats'), // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'menu_icon'				=> 'dashicons-admin-site-alt',
		'template_item'			=> 'single-news.php',
		'posts_per_page'		=> 12,
		'show_in_rest'			=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true
	) );

	
	
	/* Новый тип записи КОММЕНТАРИИ */
	register_post_type('reviews', array(
		'labels'					=> array(
			'name'					=> 'Отзывы',
			'singular_name'			=> 'Отзыв',
			'name_admin_bar'		=> 'Отзывы',
			'menu_name'				=> 'Отзывы',
			'add_new'				=> 'Добавить новый',
			'add_new_item'			=> 'Добавить новый Отзыв',
			'edit_item'				=> 'Редактировать Отзыв',
			'new_item'				=> 'Новый Отзыв',
			'view_item'				=> 'Посмотреть Отзыв',
			'search_items'			=> 'Найти Отзыв',
			'not_found'				=> 'Отзывов не найдено',
			'not_found_in_trash'	=> 'В корзине Отзывов не найдено',
			'parent_item_colon'		=> '',
			'featured_image'		=> 'Фото Отзыва',
			'set_featured_image'	=> 'Установите Фотографию Отзыва'
		),
		'public'				=> true,
		'rewrite'				=> [ 'slug' => 'reviews' ],
		'capability_type'		=> 'post',
		'has_archive'			=> 'reviews-arch',
		'rewrite'				=> true,
		'publicly_queryable'	=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post',
		'hierarchical'			=> false,
		'menu_position'			=> 6,
		'supports'				=> array('title','editor','thumbnail','excerpt','custom-fields','page-attributes','post-formats'),
		'menu_icon'				=> 'dashicons-megaphone',
		'template_item'			=> 'single-reviews.php',
		'posts_per_page'		=> 6,
		'show_in_rest'			=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true
	) );
	
}

// функция вывода короккого содержимого
function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}


function my_multi_carousel_script() {
	if ( !is_page_template( 'page-completed.php' ) )
	return;
	wp_enqueue_script( 'multi_сarousel', get_stylesheet_directory_uri() . '/assets/js/mult.js', array ('jquery'), '1.0', true);
}
add_action( 'template_redirect', 'my_multi_carousel_script' );

/*
if (is_page('completed')){
wp_enqueue_script( 'multi_сarousel', get_stylesheet_directory_uri() . '/assets/js/multi_сarousel.js');
}
*/





