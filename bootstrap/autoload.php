<?php
/**
 * Этот файл является частью приложения GearMagic.
 * 
 * Начальная загрузка.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

define('REQUIRED_PHP_VERSION', '8.2');
define('REQUIRED_APACHE_VERSION', '2.4');

/**
 * Отладка.
 */
define('GM_MODE', 'production'); // production, development
define('GM_DEBUG', false); // включить / выключить вывод ошибок
define('GM_DEBUG_START', microtime(false)); // время запуска (для измерения времени работы приложения)
define('GM_ENABLE_ERROR_HANDLER', true); // включить / выключить обработчик ошибок
define('GM_ENABLE_EXCEPTION_HANDLER', true); // включить / выключить обработчик исключений

/**
 * Использовать несколько сайтов на основе одного кода.
 */
define('GM_MULTISITE', false);

/**
 * Установка уровня вывода ошибок PHP
 * @see http://php.net/error_reporting
 *
 * При разработке приложения, настоятельно рекомендуется включить уведомления
 * и строгие предупреждения. Включить их с помощью: GM_DEBUG = true.
 * При работе в стандартном режиме используйте GM_DEBUG = false.
 */
defined('GM_MODE_PRO') or define('GM_MODE_PRO', GM_MODE === 'production');
defined('GM_MODE_DEV') or define('GM_MODE_DEV', GM_MODE === 'development');

if (GM_MODE_PRO) {
    ini_set('display_startup_errors', 0);
    ini_set('display_errors', 0);
    error_reporting(0);
} else
if (GM_MODE_DEV) {
    if (GM_ENABLE_ERROR_HANDLER) {
        ini_set('display_startup_errors', 0);
        ini_set('display_errors', 0);
    }
    error_reporting(E_ALL);
}

/**
 * Установка путей приложения.
 */
define('DS', DIRECTORY_SEPARATOR);
define('BASE_PATH',   dirname(__DIR__ . '..' . DS)); // директория приложения
define('CONFIG_PATH', DS . 'config'); // директория файлов конфигурации
define('VENDOR_PATH', DS . 'vendor'); // директория сторонних библиотек
define('MODULE_PATH', DS . 'modules'); // директория подключения модулей
define('PUBLIC_PATH', DS . 'public'); // общедоступная директория
define('SETUP_PATH', BASE_PATH . MODULE_PATH . DS . 'gm' . DS . 'gm.setup'); // директория установки 

/**
 * Определение ОС (для преобразований директорий).
 */
if (DS === '\\') {
    define('OS_WINDOWS', true);
    define('OS_OTHER', false);
} else {
    define('OS_WINDOWS', false);
    define('OS_OTHER', true);
}

/**
 * Разделитель namespace.
 */
define('NS', '\\');

/**
 * Названия используемые для опредения клиентской стороны пользовательского 
 * интерфейса и программно-аппаратной части сервиса, а также консоли.
 */
define('BACKEND', 'backend');
define('FRONTEND', 'frontend');
define('CONSOLE', 'console');

/**
 * Индексы используемые для опредения клиентской стороны пользовательского 
 * интерфейса и программно-аппаратной части сервиса.
 */
define('BACKEND_SIDE_INDEX', 0);
define('FRONTEND_SIDE_INDEX', 1);
define('BOTH_SIDE_INDEX', 2); // backend и frontend

/**
 * Названия префиксов пространства имен и путей модулей клиентской стороны пользовательского 
 * интерфейса и программно-аппаратной части сервиса.
 */
define('BACKEND_NAME', ucfirst(BACKEND));
define('FRONTEND_NAME', ucfirst(FRONTEND));

/**
 * Установка базовых URL приложения.
 */
// базовый URL-путь запуска приложения (если приложение установлено не в корень,
// а в указанную директорию, тогда базовый URL-путь совпадает с директорией, например "/demo")
define('BASE_URL', ''); 
// базовый URL-путь для вызова ресурсов модулей
define('MODULE_BASE_URL', '/modules');
// базовый URL-путь для вызова общедоступных ресурсов приложения (см. .htaccess)
define('PUBLIC_BASE_URL', '/public');

/**
 * Проверка подключения путей и установка настройки конфигурации.
 */
if (!file_exists(BASE_PATH . VENDOR_PATH)) {
    die(sprintf('Сonfiguration error: can not set the local path "%s"', VENDOR_PATH));
}
$path = BASE_PATH . MODULE_PATH . PATH_SEPARATOR
      . BASE_PATH . VENDOR_PATH . PATH_SEPARATOR
      . get_include_path();
if (set_include_path($path) === false) {
    die(sprintf('Сonfiguration error: can not set the local path "%s"', $path));
}

/**
 * Специальные символы.
 */
define('SYMBOL_NONAME', '{ ? }'); // при ошибке определении имени
define('SYMBOL_NOID', '{ ?ID }'); // при ошибке определении идентификатора

// проверка версии PHP
if (version_compare(PHP_VERSION, REQUIRED_PHP_VERSION) == -1) {
    die(sprintf('To run the system, you need a version no lower than PHP %s, current version: %s', REQUIRED_PHP_VERSION, PHP_VERSION));
}

// если версия PHP < 8.0
if (!function_exists('get_debug_type')) {
    /**
     * Возвращает имя типа переменной в виде, подходящем для отладки.
     * 
     * @param mixed $value Переменная, у которой проверяется тип.
     * 
     * @return string
     */
    function get_debug_type($value): string
    {
        return gettype($value);
    }
}
if (!function_exists('array_is_list')) {
    /**
     * Проверяет, является ли данный array списком.
     * 
     * @param array $arr Массив (array) для проверки. 
     * 
     * @return bool
     */
    function array_is_list(array $arr): bool
    {
        if ($arr === []) {
            return true;
        }
        return array_keys($arr) === range(0, count($arr) - 1);
    }
}

/**
 * Регистрация автозагрузчика Composer.
 * 
 * Composer предоставляет удобный автоматически сгенерированный загрузчик классов 
 * для приложения. Регистрируем его здесь и не беспокоимся о загрузки классов "вручную".
 */
require 'vendor/autoload.php';

/**
 * Регистрация установщика.
 * 
 * Вызывает установщик, если он присутствует в директории модулей и доступен для 
 * вызова.
 */
if (file_exists(SETUP_PATH)) {
    if (file_exists(SETUP_PATH . DS . '.setup')) {
        require SETUP_PATH . DS . 'setup.php';
    }
}