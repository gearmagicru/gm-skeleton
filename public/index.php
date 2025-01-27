<?php
/**
 * Этот файл является частью приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

chdir(dirname(__DIR__));

/**
 * Выполнение регистрации composer.
 * 
 * Composer предоставляет сгенерированный загрузчик классов для приложения.
 */
require 'bootstrap/autoload.php';

/**
 * Выполнение инициализации и запуска приложения.
 */
$app = require_once 'bootstrap/app.php';
$app->run();