<?php
/**
 * Этот файл является частью пакета GM Panel.
 * 
 * Пакет русской локализации.
 * 
 * @link https://gearmagic.ru/framework/
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */
 
return [
    FRONTEND_NAME => 'Сайт',
    FRONTEND => 'сайт',
    BACKEND_NAME => 'Панель управления',
    BACKEND => 'панель управления',

    /** {@see \Gm\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'Выбранный вами элемент не существует или был удален.',
    'No data to perform action' => 'Нет данных для выполнения действия.',
    'Invalid query method' => 'Неверный метод запроса.',
    'Invalid request format' => 'Неправильный формат запроса.',
    'Error filling out form fields: {0}' => 'Ошибка заполнения полей формы<br>{0}.',
    'Invalid argument "{0}"' => 'Недопустимый аргумент "{0}".',
    'Could not delete record' => 'Не удалось удалить запись.',
    'Could not save data' => 'Не удалось сохранить данные.',
    'Could not add data' => 'Не удалось добавить данные.',

     /** {@see \Gm\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Информация о модуле "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'Недостаточно информации по указанной записи, возможно пользователь этой записи был удален.',

     /** {@see \Gm\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Информация о расширении "{0}"',

    /** {@see \Gm\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'Из выбранных записей «<b>{nSelected}</b>», {deleted, plural, =1{удалена «<b>1</b>» запись} few{удалено «<b>{nDeleted}</b>» записи} many{удалено «<b>{nDeleted}</b>» записей} other{удалено «<b>{nDeleted}</b>» записей}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Записи были частично удалены, {deleted, plural, =1{удалена «<b>1</b>» запись} few{удалены «<b>{nDeleted}</b>» записи} many{удалено «<b>{nDeleted}</b>» записей} other{удалено «<b>{nDeleted}</b>» записей}}, '
      . '{skipped, plural, =1{пропущена «<b>1</b>» запись} few{пропущено «<b>{nSkipped}</b>» записи} many{пропущено «<b>{nSkipped}</b>» записей} other{пропущено «<b>{nSkipped}</b>» записей}}.',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Невозможно выполнить удаление {n, plural, =1{записи, запись не доступа} other{«<b>{N}</b>» записей, записи не доступы}}.',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Невозможно выполнить удаление {n, plural, =1{записи, запись не доступна} few{записи, записи не доступны} many{записей, записи не доступны} other{записей, записи не доступны}}.',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Успешно {n, plural, =1{удалена «<b>1</b>» запись} few{удалены «<b>{N}</b>» записи} many{удалено «<b>{N}</b>» записей} other{удалено «<b>{N}</b>» записей}}.',
    'Deletion' => 'Удаление',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Файлы были частично удалены, {deleted, plural, =1{удалён «<b>1</b>» файл} few{удалены «<b>{nDeleted}</b>» файлы} many{удалено «<b>{nDeleted}</b>» файлов} other{удалено «<b>{nDeleted}</b>» файлов}}, '
     . '{skipped, plural, =1{пропущен «<b>1</b>» файл} few{пропущено «<b>{nSkipped}</b>» файла} many{пропущено «<b>{nSkipped}</b>» файлов} other{пропущено «<b>{nSkipped}</b>» файлов}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Файлы были частично удалены, {n, plural, =1{пропущен «<b>1</b>» файл} few{пропущено «<b>{N}</b>» файла} many{пропущено «<b>{N}</b>» файлов} other{пропущено «<b>{N}</b>» файлов}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Каталоги были частично удалены, {deleted, plural, =1{удалён «<b>1</b>» каталог} few{удалены «<b>{nDeleted}</b>» каталога} many{удалено «<b>{nDeleted}</b>» каталогов} other{удалено «<b>{nDeleted}</b>» каталогов}}, '
     . '{skipped, plural, =1{пропущен «<b>1</b>» каталог} few{пропущено «<b>{nSkipped}</b>» каталога} many{пропущено «<b>{nSkipped}</b>» каталогов} other{пропущено «<b>{nSkipped}</b>» каталогов}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Каталоги были частично удалены, {n, plural, =1{пропущен «<b>1</b>» каталог} few{пропущено «<b>{N}</b>» каталога} many{пропущено «<b>{N}</b>» каталогов} other{пропущено «<b>{N}</b>» каталогов}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Успешно {n, plural, =1{удалён «<b>1</b>» файл} few{удалены «<b>{N}</b>» файла} many{удалено «<b>{N}</b>» файлов} other{удалено «<b>{N}</b>» файлов}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Успешно {n, plural, =1{удалён «<b>1</b>» каталог} few{удалены «<b>{N}</b>» каталога} many{удалено «<b>{N}</b>» каталогов} other{удалено «<b>{N}</b>» каталогов}}.',
    'Files and directories deleted successfully' => 'Файлы и каталоги успешно удалены.',
    'Files deleted successfully' => 'Файлы успешно удалены.',
    'Directories deleted successfully' => 'Каталоги успешно удалены.',
    'Unable to delete files' => 'Невозможно удалить файлы.',
    'Unable to delete directories' => 'Невозможно удалить каталоги.',

    /** {@see \Gm\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Невозможно выполнить удаление записи.',
    'Record successfully deleted' => 'Запись успешно удалена.',
    'Record successfully added' => 'Запись успешно добавлена.',
    'Record successfully update' => 'Запись успешно изменена.',
    'Unable to add record' => 'Невозможно выполнить добавление записи.',
    'Unable to update record' => 'Невозможно выполнить изменение записи.',
    'Update record' => 'Изменение записи',
    'Adding record' => 'Добавление записи',
    'A record with the specified field values already exists' => 'Запись с указанными значениями полей уже существует.',

    /** {@see \Gm\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Настройка модуля "{0}"',
    'Settings successfully changed' => 'Настройки успешно изменены.',

    /** {@see \Gm\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Настройка расширения "{0}"',

    /** {@see \Gm\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Не удалось загрузить шаблон формы ({0}).',

    /** {@see \Gm\Panel\Helper\Ext} */
    'Editing' => 'Редактирование',
    'Search' => 'Поиск',
    'Columns' => 'Столбцы',
    'Add' => 'Добавить',
    'Adding a new record' => 'Добавление новой записи',
    'Delete' => 'Удалить',
    'Delete selected records' => 'Удаление выделенных записей',
    'Are you sure you want to delete posts' => 'Вы уверены, что хотите удалить запис(ь)и - <b>{0}</b> ?',
    'You need to select records' => 'Вам необходимо выделить записи.',
    'Edit' => 'Правка',
    'Save' => 'Сохранить',
    'Clear' => 'Очистить',
    'Deleting all records' => 'Удаление всех записей из списка',
    'Are you sure you want to delete all records' => 'Вы действительно хотите удалить все записи?',
    'You are sure of this' => 'Вы УВЕРЕНЫ в этом?',
    'Select' => 'Выделить',
    'Selecting entries in the list' => 'Выделение записей в списке',
    'Select all' => 'Выделить все',
    'Remove selection' => 'Убрать выделение',
    'Invert Selection' => 'Инвертировать выделение',
    'Refresh' => 'Обновить',
    'Refresh a list of records' => 'Обновление списка записей',
    'Profiling' => 'Профилирование',
    'Record profiling' => 'Профилирование записи',
    'Show' => 'Показать',
    'Hide' => 'Скрыть',
    'Toggle columns' => 'Показать / скрыть столбцы',
    'Filter' => 'Фильтр',
    'Filtering records' => 'Фильтрация записей',
    '[None]' => '[ без выбора ]',
    'Reference' => 'Справка',
    'This feature is under development' => 'Эта функция в процессе разработки!',
    'Browse' => 'Выбрать',
    'Entry must be selected' => 'Необходимо выбрать запись!',
    'Only one entry needs to be selected' => 'Необходимо выбрать только одну запись!',
    'Remove window modality' => 'Убрать модальность окна',
    /** {@see \Gm\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'правка / добавление записи',
    'User' => 'Пользователь',
    'Date' => 'Дата',
    'today' => 'сегодня', 'yesterday' => 'вчера', 'during the week' => 'за неделю', 'per month' => 'за месяц', 'in a year' => 'за год',

    /** {@see \Gm\Panel\View\GridView} */
    'ID' => 'Код',
    'Date added' => 'Дата добавления',
    'Date edit' => 'Дата правки',

    /** {@see \Gm\Panel\Data\Model\FormModel} */ 
    'Record audit' => 'Аудит записи "<span>{0}</span>"',
    'Updated record date: {0}' => 'Дата правки записи: {0}',
    'Created record date: {0}' => 'Дата добавления записи: {0}',

    /** {@see \Gm\Panel\View\FormView} */
    'Reset'  => 'Сбросить',
    'Cancel' => 'Отмена',
    'Help' => 'Помощь',
    'Update' => 'Изменить',
    'About widget' => 'О виджете',

    /** {@see \Gm\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'ДОСТУП ЗАПРЕЩЕН для <b>{profile}</b>, при попытки под учётной записью пользователя  «<b>{user}</b>» выполнить: {action} модуля  «<b>{module}</b>» в <b>{date}</b> c IP-адреса <b>{ipaddress}</b>, операционной системы «<b>{os}</b>» в браузере  «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> под учётной записью пользователя  «<b>{user}</b>» выполнил(а): {action} модуля «<b>{module}</b>» в <b>{date}</b> c IP-адреса <b>{ipaddress}</b>, операционной системы  «<b>{os}</b>» в браузере  «<b>{browser}</b>»',
    'Forbidden access for {profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'ДОСТУП ЗАПРЕЩЕН для <b>{profile}</b> под учётной записью пользователя  «<b>{user}</b>» выполнил(а): {action} модуля «<b>{module}</b>» c идентификатором «<b>{id}</b>» в <b>{date}</b> c IP-адреса <b>{ipaddress}</b>, операционной системы  «<b>{os}</b>» в браузере  «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> под учётной записью пользователя  «<b>{user}</b>» выполнил(а): {action} модуля  «<b>{module}</b>» c идентификатором  «<b>{id}</b>» в <b>{date}</b> c IP-адреса <b>{ipaddress}</b>, операционной системы  «<b>{os}</b>» в браузере  «<b>{browser}</b>»',
    '{data action}' => 'просмотр данных',
    '{update action}' => 'изменение записи',
    '{add action}' => 'добавление записи',
    '{view action}' => 'открытие вкладки/окна',
    '<unknown>' => '<неизвестно>',
    /** {@see \Gm\Panel\Controller\InfoController} */
    '{view info action}' => 'просмотр информации аудита записи "<b>{0}</b>"',
    /** {@see \Gm\Panel\Controller\TreeController} */
    '{data tree action}' => 'просмотр записей узла дерева "<b>{0}</b>"',
    /** {@see \Gm\Panel\Controller\SearchController} */
    '{view search action}' => 'открытие окна поиска записей',
    '{data search action}' => 'просмотр значений поиска записей',
    '{update search action}' => 'применение установленных значений для поиска записей',
    /** {@see \Gm\Panel\Controller\FormController} */
    '{data form action}' => 'просмотр записи "<b>{0}</b>"',
    '{update form action}' => 'изменение записи "<b>{0}</b>"',
    '{add form action}' => 'добавление записи "<b>{0}</b>"',
    '{view form action}' => 'открытие окна для просмотра записи "<b>{0}</b>"',
    '{view add form action}' => 'открытие окна для добавления записи',
    /** {@see \Gm\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'открытие окна настроек',
    '{data settings action}' => 'просмотр настроек',
    '{update settings action}' => 'изменение настроек',
    /** {@see \Gm\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'открытие вкладки/окна для просмотра информации',
    /** {@see \Gm\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'удаление записи(ей) из списка',
    '{update grid row(s) action}' => 'изменение записи "<b>{0}</b>" списка',
    '{clear grid row(s) action}' => 'удаление всех записей из списка',
    '{clear action}' => 'удаление всех записей',
    '{expand grid row(s) action}' => 'развернутый просмотр записи "<b>{0}</b>" списка',
    '{view grid row(s) action}' => 'открытие вкладки для просмотра списка записей',
    '{filter grid row(s) action}' => 'установка фильтра записей',

    /** {@see \Gm\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Информация', 'Информация о модуле'],
        'settings'   => ['Настройки', 'Настройки модуля'],
        'recordRls'  => ['Доступ на уровне записей', 'Просмотр и чтение только своих записей'],
        'writeAudit' => ['Вести Журнал аудита', 'Документирование операций совершаемых пользователем'],
        'viewAudit'  => ['Читать Журнал аудита', 'Просмотр операций совершаемых пользователем']
    ],

    /** {@see \Gm\Panel\Module\ModuleInstaller}, {@see \Gm\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => '{0} с указанным идентификатором отсутствует "{1}".',
    'The {0} with the specified id "{1}" is a system' => '{0} с указанным идентификатором "{1}" является системным.',
    'The {0} with the identifier "{1}" is missing in the database' => '{0} с идентификатором "{1}" в базе данных отсутствует.',
    'Missing {0} configuration file "{1}"' => '{0} не имеет файл конфигурации "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'Отсутствует параметр "{1}" конфигурации файла "{0}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'Неправильно указан параметр "{1}" конфигурации файла "{0}".',
    '{0} with specified id "{1}" already installed' => '{0} с указанным идентификатором "{1}" уже установлен.',
    '{0} with specified parameter "{1}" already installed' => '{0} с параметром "{1}" уже установлен.',
    'Error adding {0} to database' => '{0} невозможно добавить в базу данных из-за возникшей ошибки.',
    'The {0} with ID "{1}" is not in the registry' => '{0} с идентификатором "{1}" отсутствует в реестре.',
    'The {0} with ID "{1}" not found at database' => '{0} с идентификатором "{1}" не найден в базе данных.',
    'Error saving {0} to database' => '{0} невозможно сохранить в базу данных из-за возникшей ошибки.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => '{0} не имеет файл локализации "{1}", указанный в параметрах установки.',
    /** {@see \Gm\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'Для установки этого расширения, необходимо установить модуль с идентификатором "{0}".'
];
