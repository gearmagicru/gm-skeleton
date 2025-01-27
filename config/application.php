<?php
/**
 * Файл конфигурации приложения.
 * 
 * @link https://gearmagic.ru/
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    /**
     * Язык локализации.
     * 
     * Здесь указывают язык (слаг языка) приложения по умолчанию. Из коробки доступны: "ru", "en".
     * Если значение не меняется, значит оно уже выставлено с помощью панели управления и берётся из 
     * унифицированного (unified) конфигуратора приложения `Gear::$app->unifiedConfig->language`.
     */
    'language' => 'ru',

    /**
     * Часовой пояс по умолчанию для всех функций даты/времени в приложении.
     * 
     * Здесь вы можете указать часовой пояс по умолчанию для вашего приложения, который будет 
     * использоваться функциями даты и времени PHP. Этот часовой пояс будет применяться для 
     * пользователей у которых в настройках он не указан.
     */
    'timeZone' => 'Europe/Moscow',

    /**
     * Часовой пояс хранилищ (баз данных, кэша и т.п.) данных.
     * 
     * Здесь указывают часовой пояс в котором будут хранится данные на сервере. Возвращаются 
     * данные уже в часовом поясе (параметр 'timeZone') пользователя. Если данные хранятся и 
     * выводятся в одном и том же часовом поясе, тогда укажите ''.
     */
    'dataTimeZone' => 'UTC',

    /**
     * Кодировка приложения.
     * 
     * Установка/получение внутренней кодировки скрипта и кодировки ответа пользователю.
     */
    'encoding' => [
        'internal' => 'utf-8',
        'external' => 'utf-8'
    ],

    /**
     * Конфигурация Панели управления.
     * 
     * Здесь устанавливаются: маршрут и параметры маршрутизации к модулям (backend) панели управления приложением.
     */
    BACKEND => [
        // маршрут к панели управления
        'route'  => 'admin',
        /** Конфигурация маршрутизатора запросов */
        'router' => [
            'factory' => [
                'filename'     => __DIR__ . '/' . BACKEND . '/.router.php',
                'useSerialize' => true
            ]
        ],
        /** Конфигурация менеджера служб */
        'services' => [
            'factory' => [
                'filename' => __DIR__ . '/' . BACKEND . '/.services.php',
            ]
        ]
    ],

    /**
     * Конфигурация веб-сайта.
     * 
     * Здесь устанавливаются: параметры маршрутизации к модулям (frontend) веб-сайта.
     */
    FRONTEND => [
        /** Конфигурация маршрутизатора запросов */
        'router' => [
            'factory' => [
                'filename'     => __DIR__ . '/' . FRONTEND . '/.router.php',
                'useSerialize' => true
            ]
        ],
        /** Конфигурация менеджера служб */
        'services' => [
            'factory' => [
                'filename' => __DIR__ . '/' . FRONTEND . '/.services.php',
            ]
        ]
    ],

    /**
     * Конфигурация консоли.
     * 
     * Здесь устанавливаются параметры конфигурации консоли.
     */
    CONSOLE => [
        /** Конфигурация менеджера служб */
        'services' => [
            'factory' => [
                'filename' => __DIR__ . '/' . CONSOLE . '/.services.php',
            ]
        ]
    ],

    /**
     * Конфигурация унифицированного конфигуратора.
     * 
     * Здесь указывается "унифицированная" (общая) конфигурация для всех служб приложения, параметры которых 
     * могут изменятся через панель управления приложением.
     */
    'unified' => [
        'factory' => [
            'filename'     =>__DIR__ . '/.unified.php',
            'useSerialize' => true
        ]
    ],

    /**
     * Конфигурация менеджера служб.
     * 
     * Здесь устанавливаются имена (псевдонимы) служб, используемых по умолчанию приложением, а так же файл 
     * конфигурации с пакетами служб и компонентов, которые вы можете добавлять.
     */
    'services' => [
        'factory' => [
            'filename'     => __DIR__ . '/.services.php',
            'useSerialize' => true,
            /*
             * Пакет служб (компонентов фреймворка), параметры которых могут изменяться в процессе установки.
             */
            'defaults' => [
                'request' => [
                    'class'               => '\Gm\Http\Request',
                    'cookieValidation'    => '*',
                    'cookieValidationKey' => '97bc592b27a9ada2d9a4bb418ed0ebed',
                    'markupValidationKey' => 'd32693cc4a587da3fabc962176f3c244'
                ],
                'encrypter' => [
                    'class'  => '\Gm\Encryption\Encrypter',
                    'cipher' => 'AES-128-CBC',
                    'key'    => 'abcdef1234567890'
                ]
            ]
        ]
    ],

    /**
     * API вашего веб-приложения.
     * 
     * Здесь устанавливаются параметры подключения к API серверу вашего веб-приложения 
     * для удалённого вызова функционала ваших модулей.
     */
    'apiServer' => [
        'url' => ''
    ],

    /**
     * API сервер Marketplace GearMagic.
     * 
     * Здесь устанавливаются параметры подключения к API серверу Marketplace GearMagic 
     * для получения обновлений, лицензионного ключа, справочной информации и т.д.
     */
    'apiMarketplaceServer' => [
        'url' => 'http://apps.gearmagic.ru/api'
    ],

    /**
     * Сервер документации GearMagic.
     * 
     * Здесь устанавливаются параметры подключения к серверу документации GearMagic 
     * для получения справочной информации для вашего веб-приложения.
     */
    'docsServer' => [
        'url' => 'https://apps.gearmagic.ru/docs'
    ],

    /**
     * Автозагрузка служб.
     * 
     * Здесь перечисляются имена служб приложения, которые будут автоматически 
     * создаваться (и вызывать свой метод "bootstrap") после запуска приложения.
     * Эти параметры преобладают над параметрами указанными в унифицированном 
     * конфигураторе приложения `Gear::$app->unifiedConfig->bootstrap`.
     * 
     * Пример: `'serviceName' => [FRONTEND => false, BACKEND => true]`
     */
    'bootstrap' => [
        'frontendTheme' => [FRONTEND => true], // служба "Тема" исключительно для frontend
        'backendTheme'  => [BACKEND  => true] // служба "Тема"  исключительно для backend
    ],

    /**
     * Параметры приложения.
     * 
     * Здесь устанавливаются (если необходимо) дополнительные параметры приложения в 
     * виде пары "ключ - значение".
     */
    'params' => [],

    /**
     * Версия редакции приложения.
     * 
     * Здесь устанавливаются базовые параметры редакции приложения в виде пар "ключ - значение".
     */
    'edition' => [
        'code'         => 'GM SKELETON',
        'name'         => 'Skeleton',
        'originalName' => 'Скелет',
        'number'       => '1.0',
        'resource'     => 'https://apps.gearmagic.ru',
        'docsResource' => 'https://docs.gearmagic.ru',
        'date'         => '01/01/2025'
    ]
];
