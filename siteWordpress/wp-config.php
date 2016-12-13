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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '^6A5`QuT.cmJGtY7jXr7UKhF*tgD&c!@*=[NGQ..ZoQgyqA[M;b&Q]v}!c#}Epe!');
define('SECURE_AUTH_KEY',  '~mTgj5`L) ux%X%c2NFkgvWJq<VJ0k/?_>!wwOcv|s?/uqx<9m!htDtCHp@yO%]!');
define('LOGGED_IN_KEY',    'q*&,o|~EmXE(DA!_>m?vcl jCm(NaUG>Th(u7?RIZ8UN{OtOir4no_ YW2s1@<9q');
define('NONCE_KEY',        'N/Cj0utR&%}-V*,{3,>A,sT/L/es t?G1h^5rIe8 5B2!$F8w/[P$@4^xG~S((tV');
define('AUTH_SALT',        'mQpj-NV@!wwuQWl$s*.Ca}&]kLoiuHWdzi7yXm&gj#dUp3?1/C5n`)Xxk{^([O.4');
define('SECURE_AUTH_SALT', 'BboC._G$I8/$7th:|KO]{Mz<8*vd*{MWj)zS78|L)*`V:duz_1ZX:ZxA(#1fadx8');
define('LOGGED_IN_SALT',   'y9gqbd=AR)r~kr`<mo/jwGqFVln==7^QlwRpJTY`[Ws5~$|u7eDP*n;5P-NGu`rz');
define('NONCE_SALT',       'q6^FnVv^+pnNW[rO[p2*%$=}nNV;RI[v!q43kz[?1r:<?L`1s:y2]:xPArqK7a^}');

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
