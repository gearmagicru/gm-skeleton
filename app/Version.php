<?php
/**
 * Этот файл является частью приложения GearMagic.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

namespace App;

/**
 * Версия приложения.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package App
 */
class Version extends \Gm\Version\AppVersion
{
    /**
     * {@inheritdoc}
     */
    public string $code = 'GM SKELETON';

    /**
     * {@inheritdoc}
     */
    public string $name = 'GearMagic: Skeleton';

    /**
     * {@inheritdoc}
     */
    public string $originalName = 'GearMagic: Скелет';

    /**
     * {@inheritdoc}
     */
    public string $number = '1.0';

    /**
     * {@inheritdoc}
     */
    public string $date = '01/01/2025';

    /**
     * {@inheritdoc}
     */
    public string $resource = 'https://apps.gearmagic.ru';

    /**
     * {@inheritdoc}
     */
    public string $docsResource = 'https://docs.gearmagic.ru';

    /**
     * {@inheritdoc}
     * 
     * В результате обновления приложения, здесь свойству будут указаны параметры 
     * обновленной версии редакции приложения.
     */
    protected mixed $edition = null;
}
