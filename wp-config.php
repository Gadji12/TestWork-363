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
 * * Настройки MySQL
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
define( 'DB_NAME', 'worktest' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

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
define( 'AUTH_KEY',         'tm2TR?}nmq/E:A]xv&1ZaA-*DNJr7J!d$A;v=@l`H~f5^)Co1u7,)0apLRFV4i+b' );
define( 'SECURE_AUTH_KEY',  '_J1$Xb56`hnw+H0=8;3/g-o58Vm1fx%Ohb]te#pnI:&Q3-l>%em6Bds/H$a{S,d@' );
define( 'LOGGED_IN_KEY',    '?>epF>g0s(Ol)|g5d0r#M%1I8# l~~@W`N8GppzE2|45(C.{Ngl$;rEQLJe;ipV/' );
define( 'NONCE_KEY',        'aivQqqDxpw{wps>-907U!rk:|ff+Zj+zGwANG}t=|DdDFC&M#KKv:=;`=L]Dnv@r' );
define( 'AUTH_SALT',        'G-9c>fq7J|yDYS>++^+PrbTL[&hh+64P|cR6-9}>HacDki|(|grCi.lw!kG(.%tL' );
define( 'SECURE_AUTH_SALT', 'HYK)mM[XU(*yusC!?!r%Mpe#02n,y.^.H:%DA5#PuxwFQ;!~8w3(6wI/LJM%EK 9' );
define( 'LOGGED_IN_SALT',   '!=&4:^:np,2u=B$]=B-?ww__%{I1Lnqq*^npyRye%W5t~i]@!NP$2j;Qe{b6O=Xg' );
define( 'NONCE_SALT',       'Wh:MS5B;DU{ 4Pihw!3h4Ntd+*^,+3VwY2n93lnCrKdfj|Gl{R_+x#{TP}R)DRT9' );

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
