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
define( 'DB_NAME', 'ciot-sphere_bd' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'HU1V~,cm1jHeaCp&e(kyt+#as.T2o;AFh=I& 70ts)dCt0+,G7V{SMNF>?ogKihX' );
define( 'SECURE_AUTH_KEY',  'n?,0)b^)~]KmvE0D<Kvk!];oTxq|#5d:`yzO;6v?JBpE8+^UJ 2<BlMldbjORjaH' );
define( 'LOGGED_IN_KEY',    '%b5O^o!E>|9,]{W-L!gb,8y1v+ApBX*KEC^,-r[OqRoaRX]s-[&`g$X~ZbBpYGD4' );
define( 'NONCE_KEY',        '7W2C3dLD1a2[49g1Ja?Kcd)7YlLA89+O Z}M[*-6c<ca_;1DCk)^smWK7mQ#I}Ys' );
define( 'AUTH_SALT',        'dCN)0aAFMFWV;m`*Kl?hD!Gp/moh:bI-F(p=KrVkui0}12w>wevZ9=PF&%0X6$G=' );
define( 'SECURE_AUTH_SALT', 'i<Eq@eKT{1r&b#RI<k*%kj7$h%A@t/]-+V^u>aln!30x8c4l>|l@ix5TM&pLH~+1' );
define( 'LOGGED_IN_SALT',   'RqL-+4xEs$:.68rV4)}vo%N!A_z,`tm)_Yx[et,!$UR:U:*%$uRVy&,6.wI>pKp[' );
define( 'NONCE_SALT',       'rp:,;iT*zx*/!8LD`IU`M5/r!M`CLg6 UC6}~QjG0]YZMin4;)~Q Sb4mOy}#$k%' );

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
