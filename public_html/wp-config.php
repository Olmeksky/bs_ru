<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'olmekskygm_balco' );
/** Имя пользователя базы данных */
define( 'DB_USER', 'olmekskygm_balco' );
/** Пароль к базе данных */
define( 'DB_PASSWORD', 'R8cWSHMNUFT&SFBY' );
/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost:/var/run/mysql8-container/mysqld.sock' );
/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );
/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );
/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'BcOH{.OxIBsB-#.,mJK&T(tPU=j8!IrgMGIJA8jg1`N(;1YDpUf 5)M=i?4& :E&' );
define( 'SECURE_AUTH_KEY',  'ln9 sSN++W##B_qQy{~jA<b+|Y P7{3b8F>U+$x.D<^v]MHA>Rp c,:j%_9fJO`%' );
define( 'LOGGED_IN_KEY',    'E&QfDu[Xe^OldCD1j`i?>K{o-0:8BVRG,|4gy-=a<]@*E[b$YD}_G7FQ-S5uEku{' );
define( 'NONCE_KEY',        ' 9FD</)`Cnz-4EXk!&o@Sl$@({~UTq$KB1uBY5t;c!m^l#DmU[`f~WLeG.2jvv!o' );
define( 'AUTH_SALT',        '24GPd(.p(.;1r!Bfi2a:]Red9*;qIuan$2D,#Agrb3v04DU;l7G& xUIaZG@,*Mo' );
define( 'SECURE_AUTH_SALT', '2#VO_m}fTc2dMPMU7i4}Uh41qg-Z(Ef4z[R$G|Ob.ooi>>|6wr3=2$o=GOwUbYgM' );
define( 'LOGGED_IN_SALT',   'iK,c*d/7N0Hm9)QX}aMz6ykIg*NpL:}Ay3L+30~T(U6IvzwfwAN^`(pCGUGT~K+6' );
define( 'NONCE_SALT',       ',=Fozs[28ky9x22!h0s,%mf m4G])zCTe^Vm@6Xv& <(]zciJ4M_=)XPD+Jmvyo*' );
/**#@-*/
/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';
/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */
/* Это всё, дальше не редактируем. Успехов! */
/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}
/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
