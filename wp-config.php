<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'krascity_kras');

/** Имя пользователя MySQL */
define('DB_USER', 'krascity_kras');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'x*wA!#|lD{N*');

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
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!hV]kJ+Yso| |i-r[OArFamMT]<y1&{a|CAO;7r3||D@+Fx!&iqfVoe-JdgY#]Ho');
define('SECURE_AUTH_KEY',  'G~{G+1% pgV+-nT/=adcJ|~so,gnpVb|(bVrT)SoN6?H53BTP]U@o1/fdGhQV55`');
define('LOGGED_IN_KEY',    '1MKz[ [Q0<^UMAI>;WO)uZZJ=;jrJ%7<;$76~&mU%;}}C(k?@$#+9a8PI*n:duDW');
define('NONCE_KEY',        '(H#yLWO-~SXDjxli!YvTO)`der`s-v;U!+vB|*CpGVIcn)JfRWW#WA,<+9hIn@s!');
define('AUTH_SALT',        'NUqTv^Hmvu!ffH@`-IyM%Q/.Ox-D@bB^fL3X/B#sL-Gzh3QYW#]xGZ}j;DY+@h1u');
define('SECURE_AUTH_SALT', 'TF/[G#?jV<?7*fejS6~*-6X*+a*b<A=+nc,j1B&2;COb<Z+-X+AiowJ|fu/(@+Z[');
define('LOGGED_IN_SALT',   '|-^ 0h4BbG-XL[U@~>?]~Cz_M66L~nJH|1E6C~8[FDgypIFKS[Wuscab/vQ>$l%v');
define('NONCE_SALT',       'SvDrviFJ|A~j|oTZE.z1@~oGnLtK=/:&1nB~^Y+8p5&t9,)b76~ZdZ~x^wsvMQAW');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Язык локализации WordPress, по умолчанию английский.
 *
 * Измените этот параметр, чтобы настроить локализацию. Соответствующий MO-файл
 * для выбранного языка должен быть установлен в wp-content/languages. Например,
 * чтобы включить поддержку русского языка, скопируйте ru_RU.mo в wp-content/languages
 * и присвойте WPLANG значение 'ru_RU'.
 */
define('WPLANG', 'ru_RU');

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
