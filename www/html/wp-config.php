<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/www/aviet.ugatu.su/www/html/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'aviet');

/** Имя пользователя MySQL */
define('DB_USER', 'aviet');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'LcPyEDBsBc3bbzXs');

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
define('AUTH_KEY',         'd+n4EAn;qMPF7E^`-{lPVqC.(i7Eu]5|;7eLRN}f!mx1-^,1%w9.A}x.?t|B$aTb');
define('SECURE_AUTH_KEY',  'fomB!_f*tM}cB}EvVmfePo`N7i9)|><0U}pU[r`fX2XYyZyA Lzwtqu-?WC sPnF');
define('LOGGED_IN_KEY',    'w|,k* -cXJp1-:+4S(0)U->H^~Rl@k]Qj9yVu&(o6HQOe~dwyNm!~5gy!v^9fDHJ');
define('NONCE_KEY',        'zvyCQ-Cwv-sZrKUqZ%x-X9KOR|8-+CM?DfrbQ@OUd=<7jHtX{-|$ !_8b*]j9sNV');
define('AUTH_SALT',        'h-r pK4lYQ=~MDAEw}rq[sp|d-AAdjg}|WhLAi/Bi;)&@i8k~u}A0dn.{Aj3EBMs');
define('SECURE_AUTH_SALT', '50P@z%AkS(A9)vmK(F$3&<[,U&^(_HPJ;kx}g7rTl0=a-z>FulfkE-Qu]X+]8M[f');
define('LOGGED_IN_SALT',   'D)d`1i}l[jR+J,]f-qu8se;`o#Clq(7vMx-{=#:Jt]Ca/~z07Du0u+q^&gyi*VCf');
define('NONCE_SALT',       'bEb/C99:p-?,:b=C)(I;&E.i9;v+R_#@*$5}])0AV}e;6m+k%AOX8{_;U~~;HiDc');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'av45785Qiet';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
