<?php
/**
 * Этот файл является частью пакета GM Framework.
 * 
 * Сообщения (пакет русской локализации).
 * 
 * @link https://gearmagic.ru/framework/
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    'Home' => 'Главная',
    'Message' => 'Сообщение',
    'Warning' => 'Предупреждение',
    'Error' => 'Ошибка',
    'The module cannot be called from the administration panel' => 'Вызов модуля из Панели управления невозможен.',
    'Edition' => 'Редакция',
    'Widget' => 'Виджет',
    'Module' => 'Модуль',
    'Module extension' => 'Расширение модуля',
    'Extension' => 'Расширение',
    'Application' => 'Приложение',
    'Web application' => 'Веб-приложение',

    /** {@see \Gm\Exception\TokenMismatchException} */
    'CSRF token mismatch' => 'Несовпадение токена CSRF',
    'CSRF token is invalid or missing' => 'CSRF токен недействителен или отсутствует.',
    /** {@see \Gm\Exception\ForbiddenHttpException} */
    'Access error' => 'Ошибка доступа',
    /** {@see \Gm\Db\Adapter\Exception\CommandException} */
    'Query error' => 'Ошибка запроса к базе данных',
    /** {@see \Gm\Db\Adapter\Exception\ConnectException} */
    'Connect error' => 'Ошибка подключения',
    /** {@see \Gm\ServiceManager} */
    'Unable to call service "{0}"' => 'Не удалось запустить службу "{0}". Служба не найдена.',

    /** {@see \Gm\Mvc\Application} */
    'Could not set internal encoding "{0}"' => 'Не удалось установить внутреннюю кодировку "{0}".',

    /** {@see \Gm\Mvc\Module\Module} */
    'Module could not make id for view model' => 'Модуль не может сделать идентификатор для модели представления.',
    'Controller with name "{0}" not exists' => 'Контроллер с именем "{0}" не существует.',
    'You are not allowed to perform this action' => 'Вам не разрешено выполнять это действие.',
    'Action "{0}" at controller "{1}" not exists' => 'Действие "{0}" контроллера "{1}" не существует.',
    'Could not define module id' => 'Не удалось определить идентификатор модуля.',
    'No permission "{0}" to access the module' => 'Нет разрешения "{0}" для доступа к модулю.',

    /** {@see \Gm\Mvc\Controller\Controller} */
    'Invalid parameter passed' => 'Передан неверный параметр.',
    'Invalid parameter specified "{0}"' => 'Неправильно указан параметр "{0}".',
    'Parameter "{0}" not specified' => 'Параметр "{0}" не указан.',
    'Parameter passed incorrectly "{0}"' => 'Неправильно передан параметр "{0}".',
    'The value for parameter "{0}" is missing' => 'Значение параметра "{0}" отсутствует.',
    'Could not defined data model "{0}"' => 'Не удалось определить модель данных "{0}".',

    /** {@see \Gm\ModuleManager\BaseManager}, {@see \Gm\WidgetManager\WidgetManager} */
    '{0} with id "{1}" not exists' => '{0} с идентификатором "{1}" не существует.',
    'File {0} "{0}" not exists' => '{0} не имеет файл "{0}".',
    /** {@see \Gm\ModuleManager\ModuleManager} */
    'Missing "{1}" in options to load {0}' => '{0} не имеет параметр "{1}" для загрузки.',

    /** {@see \Gm\User\User} */
    'Login required' => 'Необходимо пройти авторизацию.',

    /** {@see \Gm\Cache\StorageFactory} */
    'The factory needs an associative array as an argument' => 'Фабрике нужен ассоциативный массив в качестве аргумента.',
    'Missing "adapter"' => 'Отсутствует "adapter".',
    'Missing "adapter.name"' => 'Отсутствует "adapter.name".',

    /** {@see \Gm\Crypt\Password\Crypt} */
    'The options parameter must be an array' => 'Параметр options должен быть массивом.',
    'The format {0} specified is not valid. The supported formats are: {1}' => 'Указанный формат {0} недопустим. Поддерживаемые форматы: {1}.',
    'The options parameter must be an array or a Traversable' => 'Параметр options должен быть массивом или Traversable.',
    'You must specify a password format' => 'Вы должны указать формат пароля.',
    'You must specify UserName and AuthName (realm) to generate the digest' => 'Вы должны указать UserName и AuthName (область) для генерации дайджеста.',
    'The APR1 password format is not valid' => 'Недопустимый формат пароля APR1.',
    'You must specify UserName and AuthName (realm) to verify the digest' => 'Вы должны указать UserName и AuthName (область) для проверки дайджеста.',
    'The salt value for APR1 algorithm must be 8 characters long' => 'Значение соли для алгоритма APR1 должно быть длиной 8 символов.',
    'The salt value must be a string in the alphabet' => 'Значение соли должно быть строкой в алфавите.',

    /** {@see \Gm\Db\Sql\AbstractExpression} */
    '$argument should be {0} or {1} or {2} or {3} or {4}, "{5}" given' => '$argument должен быть {0} или {1} или {2} или {3} или {4}, "{5}" дан.',
    'Argument type should be in array({0})' => 'Тип аргумента должен быть в массиве ({1}).',
    /** {@see \Gm\Db\Sql\AbstractSql} */
    'Elements returned from getExpressionData() array must be a string or array' => 'Элементы, возвращаемые из массива getExpressionData(), должны быть строкой или массивом.',
    'A number of parameters was found that is not supported by this specification' => 'Был найден ряд параметров, которые не поддерживаются этой спецификацией.',
    'A number of parameters ({0}) was found that is not supported by this specification' => 'Был найден ряд параметров ({0}), которые не поддерживаются этой спецификацией.',
    'Supplied expression must be a string' => 'Поставляемое выражение должно быть строкой.',
    /** {@see \Gm\Db\Sql\Expression} */
    'Expression parameters must be a scalar or array' => 'Параметры выражения должны быть скаляром или массивом.',
    'The number of replacements in the expression does not match the number of parameters' => 'Количество замен в выражении не соответствует количеству параметров.',
    /** {@see \Gm\Db\Sql\Insert} */
    'values or select should be present' => 'значения или select должны присутствовать.',
    'The key {0} was not found in this objects column list' => 'Ключ {0} не был найден в этом списке столбцов объектов.',
    /** {@see \Gm\Db\Sql\Query} */
    '{0} expects parameter to be numeric, "{1}" given' => '{0} ожидает, что параметр будет числовым, задано {1}.',
    /** {@see \Gm\Db\Sql\QueryBuilder} */
    'Table must be a string, array or instance of TableIdentifier' => 'Таблица должна быть строкой, массивом или экземпляром TableIdentifier.',
    'Can\'t get Sql string from query builder, unknow result' => 'Не удалось получить строку Sql от построителя запросов, неизвестный результат.',
    'This Sql object is intended to work with only the table "{0}" provided at construction time' => 'Этот объект Sql предназначен для работы только с таблицей "{0}", предоставленной во время создания.',
    /** {@see \Gm\Db\Sql\Select} */
    'Since this object was created with a table and/or schema in the constructor, it is read only' => 'Поскольку этот объект был создан с помощью таблицы и / или схемы в конструкторе, он доступен только для чтения.',
    '$table must be a string, array, or an instance of TableIdentifier' => '$table должен быть строкой, массивом или экземпляром TableIdentifier.',
    'from() expects $table as an array is a single element associative array' => 'from() ожидает, что $table как массив является ассоциативным массивом из одного элемента.',
    'Quantifier must be one of DISTINCT, ALL, or some platform specific object implementing ExpressionInterface' => 'Квантификатор должен быть одним из DISTINCT, ALL или какого-то конкретного платформенного объекта, реализующего ExpressionInterface.',
    /** {@see \Gm\Db\Adapter} */
    'Could find connection config' => 'Неи смог найти конфигуратор соединения.',
    /** {@see \Gm\Db\Adapter\Driver\MySqli\Command} */
    'Can not execute SQL request, query is empty' => 'Невозможно выполнить запрос SQL, запрос пуст.',
    'Error executing database query' => 'Ошибка при выполнении запроса к базе данных.',
    'Query error: {0}, {1}' => 'Ошибка «{0}» выполнения запроса «{1}».',
    /** {@see \Gm\Db\Adapter\Driver\MySqli\Connection} */
    'Connection error: when making a connection to the server' => 'Ошибка при подключении к серверу базы данных. ',
    'Connection error: loading {0} character set' => 'Ошибка подключения при загрузке набора символов "{0}". ',

    /** {@see \Gm\Event\EventManager} */
    '{0}: expects a callback; none provided' => '{0}: ожидает обратного вызова; не предоставлено.',
    '{0}: сallback function "{1}" not called' => '{0}: функция обратного вызова "{1}" не вызвана.',

    /** {@see \Gm\Helper\Json} */
    'Could not JSON decode: {0}' => 'Не удалось декодировать JSON: {0}.',

    /** {@see \Gm\Http\AbstractMessage} */
    'Not valid or not supported HTTP version: {0}' => 'Недопустимая или не поддерживаемая версия HTTP: {0}.',
    /** {@see \Gm\Http\Request} */
    'Unable to determine the entry script file path' => 'Невозможно определить путь к файлу сценария входа.',
    'Unable to determine the entry script URL' => 'Невозможно определить URL сценария входа.',
    /** {@see \Gm\Http\Response} */
    'Invalid status response code provided: "{0}"' => 'Предоставлен неверный код ответа о статусе: "{0}".',
    /** {@see \Gm\Exception\PredefinedException} */
    'Unable to complete request due to error in server script' => 'Невозможно выполнить запрос из-за ошибки в сценарии сервера.',

    /** {@see \Gm\Log\Log} */
    'Unknow log handler' => 'Неизвестный обработчик журнала.',

    /** {@see \Gm\Version\Compare} */
    'Parameters for {0} comparison are incorrect' => 'Неправильно указаны параметры для сравнения "{0}".',
    'Уou need a {0} for {1}' => 'Вам необходим "{0}" для "{1}".',
    'Уou need a {0} version of at least {1}, current version: {2}' => 'Вам необходим {0} версией не ниже "{1}", текущая версия: "{2}".',
    'Уou need a {0} for {1} version of at least {2}, current version: {3}' => 'Вам необходима версия {0} "{1}" не ниже "{2}", текущая версия: "{3}".',
    'Used for {0} with id {1}' => 'Вам необходим {0} с идентификатором "{1}".',
    'Used for {0} with code {1}' => 'Вам необходимо {0} с кодом "{1}".',
    'Used for {0} with name {1}' => 'Вам необходимо {0} с именем "{1}".',

    /** {@see \Gm\Session\Container} */
    'Name passed to container is invalid; must consist of alphanumerics, backslashes and underscores only' => 'Имя, переданное в контейнер, недействительно; должен состоять только из буквенно-цифровых символов, обратной косой черты и подчеркивания.',
    'Manager provided is invalid; must implement ManagerInterface' => 'Предоставленный менеджер недействителен; должен реализовать ManagerInterface.',

    /** {@see \Gm\Stdlib\Serializer} */
    'Unable to save config file' => 'Невозможно сохранить файл конфигурации.',

    /** {@see \Gm\Url\UrlManager} */
    'Please configure UrlManager::scriptUrl correctly as you are running a console application' => 'Пожалуйста, настройте UrlManager::scriptUrl правильно, когда вы запускаете консольное приложение.',

    /** {@see \Gm\Validator\AbstractValidator} */
    'Invalid option "{0}"' => 'Неправильная опция "{0}".',
    'No message template exists for key "{0}"' => 'Неверный параметр "{0}".',
    'No property exists by the name "{0}"' => 'Не существует свойства с именем "{0}".',
    'Unknown type' => 'Неизвестный тип.',
    'Invalid query parameter' => 'Неправильный параметр запроса!',
    'File "{0}" not found' => 'Файл "{0}" не найден.',
    /** {@see \Gm\Validator\Between} */
    'Missing option. "min" and "max" have to be given' => 'Пропущена опция «мин» или «макс» валидатора «Between». Опция должна быть задана.',
    'The input is not between "%min%" and "%max%", inclusively' => 'значение поля должно быть между "%min%" и "%max%" символами, включительно.',
    'The input is not strictly between "%min%" and "%max%"' => 'значение поля должно быть между "%min%" и "%max%" символами.',
    'The input must be less "%max%", inclusively' => 'Значение должно быть меньше "%max%", включительно',
    'The input must be greater "%min%", inclusively' => 'Значение должно быть больше "%min%", включительно',
    'The input must be less "%max%"' => 'Значение должно быть меньше "%max%"',
    'The input must be greater "%min%"' => 'Значение должно быть больше "%min%"',
    /** {@see \Gm\Validator\NotEmpty} */
    'Value is required and can\'t be empty' => 'значение поля является обязательным и не может быть пустым', 
    /** {@see \Gm\Validator\Select} */
    'You need to select an item from the list' => 'Вам необходимо выбрать из списка элемент (не допускается значение отличное от элемента в списке).',
    /** {@see \Gm\Validator\Match} */
    "Missing option. 'format' or 'message' have to be given" => 'Пропущена опция. «формат» или «сообщение» должны быть указаны.',
    'You have filled in the field incorrectly' => 'Вы неправильно заполнили поле, поле должно содержать соответствующие символы.',
    /** {@see \Gm\Validator\Captcha} */
    'You entered the code incorrectly' => 'Вы неправильно ввели код.',
    'Missing option. "param" have to be given' => 'Пропущена опция «param» валидатора «Captcha». Опция должна быть задана.',
    /** {@see \Gm\Validator\Compare} */
    'Wrong value selected' => 'Неправильно указано значение',
    'You have incorrectly set the comparison condition' => 'Вы неправильно задали условие сравнения',

    /** {@see \Gm\Data\DataManager} */
    'A field with aliases "{0}" already exists' => 'Поле с псевдонимов "{0}" уже существует в настройках менеджера конфигурации модуля.',
    'A field with name "{0}" already exists' => 'Поле с именем "{0}" уже существует в настройках менеджера конфигурации модуля.',

    /** {@see \Gm\View\ViewManager} */
    'Could not render module, template with name "{0}" not found' => 'Не удалось отобразить модуль, шаблон с именем "{0}" не найден.',
    'Could not render module, template filename "{0}" not exists' => 'Не удалось отобразить модуль, имя файла шаблона "{0}" не существует.',
    'Could not load template, file is not accessible "{0}"' => 'Не удалось загрузить шаблон, файл недоступен "{0}".',
    'Could not render module, render with name "{0}" not found' => 'Не удалось отобразить модуль, не найден модуль с именем "{0}".',
    'Could not render module, template (filename) "{0}" not defined or not found' => 'Не удалось выполнить рендер модуля, шаблон (имя файла) "{0}" не найден или неопределён.',

    /** {@see \Gm\View\Renderer\PhpRenderer} */
    'Could not render by PhpRenderer, template "{0}" not exists' => 'Не удалось отобразить с помощью PhpRenderer, шаблон "{0}" не существует.',

    /** {@see \Gm\Shortcode\ShortcodeManager} */
    'Unknown shortcode "{0}"' => 'Неизвестный шорткод "{0}".',
    'Shortcode "{0}" does not have option "{1}"' => 'Шорткод "{0}" не имеет опцию "{1}".',
    'Shortcode "{0}" does not have method "{1}"' => 'У шорткода "{0}" нет метода "{1}".',

    /** {@see \Gm\Helper\Dir} */
    'Could not perform file deletion "{0}"' => 'Не удалось выполнить удаление файла "{0}"',
    'Could not perform directory deletion "{0}"' => 'Не удалось выполнить удаление каталога "{0}"',
    'File name "{0}" is not a directory' => 'Имя файла "{0}" не является каталогом',

    /** {@see \Gm\Theme\Theme} */
    'Unable to create directory "{0}"' => 'Невозможно создать каталог "{0}"',
    'Unable to copy file "{0}" to directory "{1}"' => 'Невозможно выполнить копирование файла "{0}" в каталог "{1}"',
    'I managed to copy only part of the files "{0}"' => 'Удалось скопировать только часть файлов "{0}".',

    /** {@see \Gm\Uploader\UploadedFile} */
    'Invalid file format' => 'Неверный формат файла.',
    'The uploaded file exceeds the size set in the settings' => 'Загруженный файл превышает размер, установленный в настройках.',
    'The uploaded file exceeds the upload_max_filesize directive in php.ini' => 'Размер загруженного файла превысил максимально допустимый размер, который задан директивой upload_max_filesize конфигурационного файла php.ini.',
    'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form' => 'Размер загружаемого файла превысил значение MAX_FILE_SIZE, указанное в HTML-форме.',
    'The uploaded file was only partially uploaded' => 'Загружаемый файл был получен только частично.',
    'No file was uploaded' => 'Файл не был загружен.',
    'Missing a temporary folder' => 'Отсутствует временная папка.',
    'Failed to write file to disk' => 'Не удалось записать файл на диск.',
    'File upload stopped by extension' => 'PHP-расширение остановило загрузку файла.',
    'Unknown upload error' => 'Неизвестная ошибка загрузки.',
    'Invalid file extension' => 'Недопустимое расширение файла.',
    'Missing class or extension PHP: "{0}"' => 'Отсутствует класс или расширение PHP: "{0}".',
    'Error uploading image file' => 'Ошибка загрузки (обработки) файла изображения.',

    /** {@see \Gm\Exception\XmlFormatter} */
    'Invalid tag name or tag "{0}" does not exist' => 'Недействительное имя тега или тег "{0}" не существует.',
    /** {@see \Gm\Exception\FileNotFoundException} */
    'File does not exist at path "{0}"' => 'Файл не существует по указанному пути "{0}".',

    /** {@see \Gm\Updates\Package} */
    'Invalid update package identifier format' => 'Неверный формат идентификатора пакета обновлений.',
    'The specified update package data format "{0}" does not exist' => 'Указанный формат "{0}" данных пакета обновлений не существует.',
    'Unable to create update package file "{0}"' => 'Невозможно создать файл пакета обновлений "{0}"',
    'Unable to package update package files "{0}"' => 'Невозможно упаковать файлы пакета обновлений "{0}"',
    'Update pckage option "{0}" not specified or specified incorrectly' => 'Не указан или неправильно указан параметр "{0}" пакета обновлений.',
    'Your app version is not compatible with the update packages version' => 'Версия вашего приложения не совместима с версией пакета обновлений.',
    'Update package with ID "{0}" is missing' => 'Отсутствует пакет обновлений с идентификатором "{0}".',
];
