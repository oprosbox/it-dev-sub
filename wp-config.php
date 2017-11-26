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
define('DB_NAME', 'portfol');

/** Имя пользователя MySQL */
define('DB_USER', 'portfol');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'T8Lrn04wHDg1HuU2');

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
define('AUTH_KEY',         'xfUTy&v6&p~^47Y^*P>]DC{!QyS?X>v!{*m6UqL3QxScp-h2+Q5b`VCEKtU$0/~]');
define('SECURE_AUTH_KEY',  'E3(N4`QJ>Ve[UQWR[R/u.hTT[{C?|M#WV*<F-C2PQ_%H{B*(:,kK6).F~%f,Kyv7');
define('LOGGED_IN_KEY',    '*8]Niew<TyTltn5Tv?pW],Jk !4CN,=/]$S-VtMo_}`O?2tnJe-,4a[J=.| BYTj');
define('NONCE_KEY',        'ynqDKGk]lz;8](fWMk)R-T|iioioZ05(JPEGIR!Ud[f~.J,FNw$Fu}]%&vhv+~NR');
define('AUTH_SALT',        'bI$p4H]/N8,,)Zl2VArM=V48<iJ0](vd`KU:)}5aFv7h+w~P^H5K7LR!thz<${`:');
define('SECURE_AUTH_SALT', '%Me@b5|<hM!GQ9GF.=84uTjmKSMk,fy]}re[d~Z8Mbb6|MJ24nsUkm5d{2*8zYdo');
define('LOGGED_IN_SALT',   '(;#J@Y.k^yIIWKxOqY]xY[6kXkZg]a_hzfZXk?{68q,jn2s:wVCj%$8;TR|[?}mJ');
define('NONCE_SALT',       'e6*5&T9B@B4#iF_n[bBdZqEqmzo&smgC_ftfx6#8@|7.t/Pf*?-a+m`e`chp.ECp');

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
