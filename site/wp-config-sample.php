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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'database_name_here');

/** Имя пользователя MySQL */
define('DB_USER', 'username_here');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'password_here');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')#-6v|npRY3B/&+M+OA-T|ha)(b7d9;5$9q#+!hQe6hl0(xlvr$+o2 7p+48-n{A');
define('SECURE_AUTH_KEY',  '>#^o-m(FFa._:`A9<17iH:)-gc-V.*7O|djvJl2$d,x`%%=+r[vK|]G2A0W!T)[<');
define('LOGGED_IN_KEY',    'n&%D`4+TmR{Fb K$K#;: +c1}k^`3U-Hnc.3d4V +tfycEM|1X<[W+KHd;u9Qqlr');
define('NONCE_KEY',        '7NUk|Drg9-QTeMI7apv&@beHjzNC|%:f4l3FEhuMS/m>WSO&*r+6T[4pN-|.EIcC');
define('AUTH_SALT',        'ysk</h8||~.G3]OC-Dn_H;C:7^%HGIPR[~DwBk;WbxEOiqI7kq3]-?j-9Q*G|1Eo');
define('SECURE_AUTH_SALT', 'iHU`%@H4^@T}Pnz1`he)JSAj]mgu9Wv@$-F5Dn&3,?$d1=/>/GCUj!sZQ_uPZn)d');
define('LOGGED_IN_SALT',   'z^NY05{g|.fK|5)u._ytEcmSA|IpmbJX!aD?KHCWh`;Qdo_x.o> 1HDw. !RgFMs');
define('NONCE_SALT',       '@1iLZn8ZB)FV##geFL^ar_+#Y&W@O]_+($(l>,-%Z)=AH.lnh)7eKieyF9P+EXna');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 * 
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
