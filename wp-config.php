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
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         '^m[XX]f5$zFv~l^1Q},?]4]xi3RZF,MtVaELklDmEjihH+@,iQD6.Gu};{X9p&L+' );
define( 'SECURE_AUTH_KEY',  'r3|}&dHu/rSbPYJ$jvhzM# $^g2LhS{ek],&8OVCnySWj q*s}6au{~v7p-33wKR' );
define( 'LOGGED_IN_KEY',    '3i[2</!`5|yA:_IUG&)Xq_h2YXcEvsEcz&Y1R<!_X6r3{I=iy|OKuj,g$]PpWQ=C' );
define( 'NONCE_KEY',        '-3Xk#=-L#f-F5?|R}Gwl-(=VRMA9u#$G`[ssF5;J1d1M,v!Pq1b8v6CukjHja6Yu' );
define( 'AUTH_SALT',        '*E^P;to%J&R|ah6Fz,a]5 iJcug#eH^&0w#u!&5s=QCwaZ`2UakNt%,5MiO#1o5?' );
define( 'SECURE_AUTH_SALT', 'q62McP5ND{}dy{LMK*;i?DOx00:C)DzvS_[Y=/O#nf.tCIgEu=.:UE?5B3;nLj3 ' );
define( 'LOGGED_IN_SALT',   'uV8(dNr:HsLA5sCM`Mtbsl855^jL_z@jBQ^lMZ4S;pcV&DW:0D].<]8@7:,W$QXf' );
define( 'NONCE_SALT',       '%.JRxczgzbt `I<q/. Q|tI8hyVE3Z5v:yK/^/n#-:%/0Pq.5TME[@JK76@}0(+T' );

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
