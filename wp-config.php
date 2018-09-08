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
// ** Localhost DB_NAME: prostositevnualandingsite ** //
// ** Website DB_NAME: prostosait ** //
define('DB_NAME', 'prostosite');

/** Имя пользователя MySQL */
// ** Localhost DB_USER: root ** //
// ** Website DB_USER: prostosait ** //
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
// ** Localhost DB_PASSWORD:  ** //
// ** Website DB_PASSWORD: qJot1Nex5 ** //
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');
define( 'WP_AUTO_UPDATE_CORE', false );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|NN)8DawkE8r!*[3j/01g<@ZzTq6N]CnPmxOd`$/9{%qgw/7fpMqaQ N()~>d5*F');
define('SECURE_AUTH_KEY',  'kT5ETl*nV#2K84~,lH&aCfMm@vV?E2m6`0Q-]&hV}LEZJN^,>LN}C|L]+Rul#oA$');
define('LOGGED_IN_KEY',    'Ns55,g&KsElUKcOUw8]]_N0?7sybX$LzQ8+7y-t)=R`m!X|RYw16ay(d1qlY$a4%');
define('NONCE_KEY',        'O8LxQ4&M3|~`X_=rpH~ o{|pHVC^EP^qdUQilc+/WVhQUAZauEWV^KN;vT{aW=ZD');
define('AUTH_SALT',        'AgIcB4SQMHwN#z@`Do;|q#yZ07P5,Y~^;7P ~G0v%5wbUsW{g%21j!#@z<AqO#6+');
define('SECURE_AUTH_SALT', '{owA)skJuQ,s~1+x[<T[+r:FbMm5,yecj2!$ERPfVwitQ>kM[}q&i7IeQgjeHO-O');
define('LOGGED_IN_SALT',   '-%*7Dg!3It!M_mGx*Li11]-65TH`Ii&iTv2RH3{Si6Yf{~z%mZTdHxt];M1Zud4W');
define('NONCE_SALT',       '!{@yuI2>a[,6I<fw)eJmO+5;*O*wqw*OSr}H8D0#XsmH]d@|.-_H~~|UK*!(Q1?s');

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
