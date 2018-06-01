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
define('DB_NAME', 'chingiz');

/** Имя пользователя MySQL */
define('DB_USER', 'username');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ugRna1An');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '_9@HX)p9_LC,KK+u,`v=RyY6FJ<E-vnoa76iFzv{0XPZSQm3d%x>n^,b>>(!RTKR');
define('SECURE_AUTH_KEY',  '  i0rVCK2` T,bnz~:v!rP?$0[9s*|[zVk!Idq;qw<P=vW$->~fRL%~i{QzEKnxf');
define('LOGGED_IN_KEY',    '>E+iA8T(i5^l$ufC3REgA-!J]a0~#T,o~hzs%Nvf=`<g(W1fh{gz0@g/80%(,oEz');
define('NONCE_KEY',        '@898$~h}Ijt-;jN}}POC4`QP?JZ4A!8LcY%7;$|P#hOIY!v/X|@)L1.>JlatL:M^');
define('AUTH_SALT',        'U*gt9Z&sh[]hH,!-IW2o7THfWk(p{83jrOxbM^#eK9rzh6{|.f)em+W}k(?R7qDr');
define('SECURE_AUTH_SALT', ']YYq*zR9`^8XbDtmBU.32edEdTW{O`;Ef=5@JAZOzngqR{=K[WfHh8+EY`|$%hR1');
define('LOGGED_IN_SALT',   'i[;G.R0UWYndI-zmBM;lPsI*)L~V~LCd%F`f3|@1^rN_G8[du(h`#G(h`0^^($<K');
define('NONCE_SALT',       'Bjvv-{4Ogc3KIl<.H3my_z!QkUX6S[;6fQ[FwGU1HCa?oO=R=ez}`c;GGI?X0O*j');

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
