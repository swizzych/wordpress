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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '567567' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'Wd@@C9W8do0m1=, e#1s)$C6U34uEd)>]8MUTb#9)5]47g`#QNiT`ycaW5Q+)g~~' );
define( 'SECURE_AUTH_KEY',  ',:WekQSR5}Hv~}5n=6hIMK,yw>BUX#:u|V7:@-06J=2EWi@9lc8T(=5K;Cs767yi' );
define( 'LOGGED_IN_KEY',    'fjWWyv~;/_e}5<!?Ij:|)$+vWn;]1=-.E`W4.}z}@V-$MV1$o$f^qFQG!M.:c<_+' );
define( 'NONCE_KEY',        'Io&$$KK>zA0YA~#QHBWqkX+ZWXD/r6rM1ayAV(L`mFu}g?]VfUabvJl2sIv~o?AT' );
define( 'AUTH_SALT',        'OfcqpMDH@ZEg(8H`wLC/%S~J=>w(WT::yI#6bD?/mg#c~IW~us1nlyN/lLQcu3t)' );
define( 'SECURE_AUTH_SALT', 'Y85miRg>rI5WM0R}%#kX_rbYmLpd>MuAy8.$..3m~D=ptO+7:pgWRqR+b,_0ZB)e' );
define( 'LOGGED_IN_SALT',   'mlD&4kryWrkSE,N^@IozKPEI4?|?%zL0gU)>k;=tw``4>U9*WkTk`tZ?yNSid}nv' );
define( 'NONCE_SALT',       '^SyWb0kk_[R|u]s9qYG$nba~{8>Q$HZpzs*={7@~rOa%i~UO/jG/gw-/0MDI$EHj' );

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
