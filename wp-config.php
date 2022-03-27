<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mySocial' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '*q?fa:Bcqm?IX/].@?1(+i%jd_zR{qi`WOkDPEGt-j[cOJ~D$yO/!EB`~JP$A-]2' );
define( 'SECURE_AUTH_KEY',  'xtSHb:a^n((Il-E<X8-E&(65xe-R;9g[Q&m.y1eOun[B1Sb>%!U>3wf$$-$Us>N.' );
define( 'LOGGED_IN_KEY',    'L1.7.jLT_no-Hoon8g*HC2kf]VQ/vLhdYN%xpQuORkJnp82`Y)24t/+IdBhT`RnM' );
define( 'NONCE_KEY',        '1mOf1VGl6m:8`bX)gXKo?A}7.?[|xd7BYJg=g,n=I&Kkua|>Gdpv=_%,]PlzTSXe' );
define( 'AUTH_SALT',        '@+d|wdqw/YQ6[:4bRY>H)%33t14W2GW8KWH;~}>5wd?QqJF^cQPk{XG%81h&_3AI' );
define( 'SECURE_AUTH_SALT', '~*47|^q1k_DE7,75:&S1m](SB8WZ(VUnBb#8XcKKy06dP%br$Rvkr/}[#rXlo?@)' );
define( 'LOGGED_IN_SALT',   '1c)kq/8v*^~Y?Mh&-F7ApJWDR}3CWleCu)2Ho450Qec9g$<kK,gym_b8styDftc$' );
define( 'NONCE_SALT',       'C6@_2fgg)rV?)`?BAuspU|`{&UE~b-nR*)|Y$k@P]27D8`}KlDyK&Qri8HvL~_O4' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
