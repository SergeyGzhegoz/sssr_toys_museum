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
define( 'DB_NAME', 'sssr_toys_museum' );

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
define( 'AUTH_KEY',         'N{eYh;6[4mN9lt:f7|2GRG~u8)U2Jj4G0IayD_`OLRbB$u5v]:ve$^ kdn;NAtJw' );
define( 'SECURE_AUTH_KEY',  'r($j9f#;tkOu<N^J|/`Qp[a^<mJeppWaV&/APETr{xEBs:gXzH3 ?o?I|1)WjJCd' );
define( 'LOGGED_IN_KEY',    'P@6tJYwWV$qW=>a[!vYY44L}IRxFd*;0AS;LvJ<=I<-%Ws5IZ}<h:RpA-YkBRw4@' );
define( 'NONCE_KEY',        ',Cus[M8}X-Z?LwN+$fVUQz<MA^&t JoOV40FL+6Hos_J~Dix|E:v9~@;=+`cf--<' );
define( 'AUTH_SALT',        'qRYPL(T1Zor}1!.LV_EwpL!Ahj1S#M@(O/D$:7vPz.Mv>|/g@_`J6{~u3y={L1f`' );
define( 'SECURE_AUTH_SALT', 'U(Q`E}0ei*s}efnf=S<TV5%<F~!`/yw`3V(I/asU^Q~E;XyQNiXI?`x};14}[9g1' );
define( 'LOGGED_IN_SALT',   '^n`:S<Y%at{_$ZCsrG6$G]vVcC@RZP%z=Yn{13?/a5m-oyhpW;fC/NV!_lTDKl+{' );
define( 'NONCE_SALT',       'FjS28<~>mpg`v#cbEA8%K8I3W}Qo@L8,t=U`?$[3F54e(DRo0?Lx1DD1Oe(f+]<D' );

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
