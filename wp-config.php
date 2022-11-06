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
define( 'AUTH_KEY',         'w=P[o>@$o:]k!;;&V~96.d<;VmsD5}BdYj$JN#LM(]?G&-4Y`;;v5-#u1x]bX4}p' );
define( 'SECURE_AUTH_KEY',  '`4DLfqzp$ yYMqCs[xD/h;N7,`DXwZ]:J%s=q?ZzfqbTdB jpe1vscOn|ux$;2MU' );
define( 'LOGGED_IN_KEY',    'Rs66p:6b84uXWn|aQ,axu@cyN-5f]=q3ylMb)zUQ]eF#TZm/.jjGl(?aH1CowbhC' );
define( 'NONCE_KEY',        '|!ELi/i~_X]e YoSN[P%T[/$=vO/+L^^g6rtdn]A0c+,D#v1hi_De?T#<06I3S2V' );
define( 'AUTH_SALT',        'UM yJq!LW/9KYBA2Y-^h9TcN_iC(wx9GJrn=nZ#TFuJl<490NL(b 2&zN^$VFXQz' );
define( 'SECURE_AUTH_SALT', '5.%{8K;26ZUI:,32SdZ-&Shw7pP:^pSZ+c?64U{@uHrRLloyE)DYAgHNqbEP5zMV' );
define( 'LOGGED_IN_SALT',   '6AxhCpm#5/Bcsy(jI_] <oSsx:BSRzD/kcdi6ocMqY}t;;}T*J?XmW(o.O73Jbff' );
define( 'NONCE_SALT',       'c@_3Q)|bN3>NP.Bz)9-KxObv_#Zu.?#YO8*;!8e}-;L/(Mc.k,_)y<>(XK,c(Pe>' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'Bitrix_Kokos';

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
