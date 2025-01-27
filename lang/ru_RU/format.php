<?php
/**
 * Этот файл является частью пакета GM Framework.
 * 
 * Формат (пакет русской локализации).
 * 
 * @link https://gearmagic.ru/framework/
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */
 
return [
    /** {@see \Gm\I18n\Formatter} */
    // единица измерения информации
    'B' => 'Б',
    'GB' => 'ГБ',
    'GiB' => 'ГиБ',
    'KB' => 'КБ',
    'KiB' => 'КиБ',
    'MB' => 'МБ',
    'MiB' => 'МиБ',
    'PB' => 'ПБ',
    'PiB' => 'ПиБ',
    'TB' => 'ТБ',
    'TiB' => 'ТиБ',
    '{n, plural, =1{byte} other{bytes}}' => '{n, plural, one{байт} few{байта} many{байтов} other{байта}}',
    '{n, plural, =1{gibibyte} other{gibibytes}}' => '{n, plural, one{гибибайт} few{гибибайта} many{гибибайтов} other{гибибайта}}',
    '{n, plural, =1{gigabyte} other{gigabytes}}' => '{n, plural, one{гигабайт} few{гигабайта} many{гигабайтов} other{гигабайта}}',
    '{n, plural, =1{kibibyte} other{kibibytes}}' => '{n, plural, one{кибибайт} few{кибибайта} many{кибибайтов} other{кибибайта}}',
    '{n, plural, =1{kilobyte} other{kilobytes}}' => '{n, plural, one{килобайт} few{килобайта} many{килобайтов} other{килобайта}}',
    '{n, plural, =1{mebibyte} other{mebibytes}}' => '{n, plural, one{мебибайт} few{мебибайта} many{мебибайтов} other{мебибайта}}',
    '{n, plural, =1{megabyte} other{megabytes}}' => '{n, plural, one{мегабайт} few{мегабайта} many{мегабайтов} other{мегабайта}}',
    '{n, plural, =1{pebibyte} other{pebibytes}}' => '{n, plural, one{пебибайт} few{пебибайта} many{пебибайтов} other{пебибайта}}',
    '{n, plural, =1{petabyte} other{petabytes}}' => '{n, plural, one{петабайт} few{петабайта} many{петабайтов} other{петабайта}}',
    '{n, plural, =1{tebibyte} other{tebibytes}}' => '{n, plural, one{тебибайт} few{тебибайта} many{тебибайтов} other{тебибайта}}',
    '{n, plural, =1{terabyte} other{terabytes}}' => '{n, plural, one{терабайт} few{терабайта} many{терабайтов} other{терабайта}}',
    // дата и время
    '{n, plural, =1{1 day} other{# days}}' => '{n, plural, one{# день} few{# дня} many{# дней} other{# дня}}',
    '{n, plural, =1{1 hour} other{# hours}}' => '{n, plural, one{# час} few{# часа} many{# часов} other{# часа}}',
    '{n, plural, =1{1 minute} other{# minutes}}' => '{n, plural, one{# минута} few{# минуты} many{# минут} other{# минуты}}',
    '{n, plural, =1{1 month} other{# months}}' => '{n, plural, one{# месяц} few{# месяца} many{# месяцев} other{# месяца}}',
    '{n, plural, =1{1 second} other{# seconds}}' => '{n, plural, one{# секунда} few{# секунды} many{# секунд} other{# секунды}}',
    '{n, plural, =1{1 year} other{# years}}' => '{n, plural, one{# год} few{# года} many{# лет} other{# года}}',
    '{n, plural, =1{a day} other{# days}} ago' => '{n, plural, =1{день} one{# день} few{# дня} many{# дней} other{# дня}} назад',
    '{n, plural, =1{a minute} other{# minutes}} ago' => '{n, plural, =1{минуту} one{# минуту} few{# минуты} many{# минут} other{# минуты}} назад',
    '{n, plural, =1{a month} other{# months}} ago' => '{n, plural, =1{месяц} one{# месяц} few{# месяца} many{# месяцев} other{# месяца}} назад',
    '{n, plural, =1{a second} other{# seconds}} ago' => '{n, plural, =1{секунду} one{# секунду} few{# секунды} many{# секунд} other{# секунды}} назад',
    '{n, plural, =1{a year} other{# years}} ago' => '{n, plural, =1{год} one{# год} few{# года} many{# лет} other{# года}} назад',
    '{n, plural, =1{an hour} other{# hours}} ago' => '{n, plural, =1{час} one{# час} few{# часа} many{# часов} other{# часа}} назад',
    //  дата и время
    'in {n, plural, =1{a day} other{# days}}' => 'через {n, plural, =1{день} one{# день} few{# дня} many{# дней} other{# дня}}',
    'in {n, plural, =1{a minute} other{# minutes}}' => 'через {n, plural, =1{минуту} one{# минуту} few{# минуты} many{# минут} other{# минуты}}',
    'in {n, plural, =1{a month} other{# months}}' => 'через {n, plural, =1{месяц} one{# месяц} few{# месяца} many{# месяцев} other{# месяца}}',
    'in {n, plural, =1{a second} other{# seconds}}' => 'через {n, plural, =1{секунду} one{# секунду} few{# секунды} many{# секунд} other{# секунды}}',
    'in {n, plural, =1{a year} other{# years}}' => 'через {n, plural, =1{год} one{# год} few{# года} many{# лет} other{# года}}',
    'in {n, plural, =1{an hour} other{# hours}}' => 'через {n, plural, =1{час} one{# час} few{# часа} many{# часов} other{# часа}}',
    // денежные единицы
    '{n, plural, =1{Russian ruble} other{Russian rubles}}' => '{n, plural, one{Российский рубль} few{Российского рубля} many{Российских рублей} other{Российских рублей}}',
    '{n, plural, =1{ruble} other{rubles}}' => '{n, plural, one{рубль} few{рубля} many{рублей} other{рублей}}',
    '{n, plural, =1{kopeck} other{kopecks}}' => '{n, plural, one{копейка} few{копейки} many{копеек} other{копеек}}',

];
