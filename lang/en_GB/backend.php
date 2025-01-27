<?php
/**
 * Этот файл является частью пакета GM Panel
 * 
 * Пакет английской (британской) локализации.
 * 
 * @link https://gearmagic.ru
 * @copyright Copyright (c) 2015 Веб-студия GearMagic
 * @license https://gearmagic.ru/license/
 */

return [
    FRONTEND_NAME => 'Site',
    FRONTEND => 'site',
    BACKEND_NAME  => 'Control Panel',
    BACKEND => 'control panel',

    /** {@see \Gm\Panel\Controller\BaseController} */
    'The item you selected does not exist or has been deleted' => 'The item you selected does not exist or has been deleted.',
    'No data to perform action' => 'No data to perform action.',
    'Invalid query method' => 'Invalid query method.',
    'Invalid request format' => 'Invalid request format.',
    'Error filling out form fields: {0}' => 'Error filling out form fields<br>{0}.',
    'Invalid argument "{0}"' => 'Invalid argument "{0}".',
    'Could not delete record' => 'Could not delete record.',
    'Could not save data' => 'Could not save data.',
    'Could not add data' => 'Could not add data.',

     /** {@see \Gm\Panel\Controller\ModuleInfoController} */
    'Module information {0}' => 'Module information "{0}"',
    'Not enough information on the specified record, the user may have been deleted' => 'Not enough information on the specified record, the user may have been deleted.',

     /** {@see \Gm\Panel\Controller\ExtensionInfoController} */
     'Extension information {0}' => 'Extension information "{0}"',

    /** {@see \Gm\Panel\Data\Model\GridModel} */
    'The records were partially deleted, from the selected {nSelected} {selected, plural, =1{record} other{records}}, {nDeleted} were deleted, the rest were omitted' => 
        'The records were partially deleted, from the selected «<b>{nSelected}</b>», deleted «<b>{nDeleted}</b>» {deleted, plural, one{record} other{records}}.',
    'Records have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{record} other{records}} skipped' =>
        'Records have been partially deleted, «<b>{nDeleted}</b>» deleted, «<b>{nSkipped}</b>» {skipped, plural, =1{record} other{records}} skipped',
    'Unable to delete {N} {n, plural, =1{record} other{records}}, no records are available' =>
        'Unable to delete «<b>{N}</b>» {n, plural, =1{record} other{records}}, no records are available',
    'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available' =>
        'Unable to delete {n, plural, =1{record} other{records}}, no {n, plural, =1{record} other{records}} are available',
    'Successfully deleted {N} {n, plural, =1{record} other{records}}' => 
        'Successfully deleted «<b>{N}</b>» {n, plural, =1{record} other{records}}.',
    'Deletion' => 'Deletion',
    // files
    'Files have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{file} other{files}} skipped' =>
        'Files have been partially deleted, {deleted, plural, =1{deleted «<b>1</b>» file} few{deleted «<b>{nDeleted}</b>» files} many{deleted «<b>{nDeleted}</b>» files} other{deleted «<b>{nDeleted}</b>» files}}, '
     . '{skipped, plural, =1{skipped «<b>1</b>» file} few{skipped «<b>{nSkipped}</b>» file} many{skipped «<b>{nSkipped}</b>» files} other{skipped «<b>{nSkipped}</b>» files}}.',
    'Files have been partially deleted, {N} {n, plural, =1{file} other{files}} skipped' =>
        'Files have been partially deleted, {n, plural, =1{skipped «<b>1</b>» file} few{skipped «<b>{N}</b>» file} many{skipped «<b>{N}</b>» files} other{skipped «<b>{N}</b>» files}}.',
    'Directories have been partially deleted, {nDeleted} deleted, {nSkipped} {skipped, plural, =1{directory} other{directories}} skipped' =>
        'Directories have been partially deleted, {deleted, plural, =1{deleted «<b>1</b>» directory} few{deleted «<b>{nDeleted}</b>» directory} many{deleted «<b>{nDeleted}</b>» directories} other{deleted «<b>{nDeleted}</b>» directories}}, '
     . '{skipped, plural, =1{skipped «<b>1</b>» directory} few{skipped «<b>{nSkipped}</b>» directory} many{skipped «<b>{nSkipped}</b>» directories} other{skipped «<b>{nSkipped}</b>» directories}}.',
    'Directories have been partially deleted, {N} {n, plural, =1{directory} other{directories}} skipped' =>
        'Directories have been partially deleted, {n, plural, =1{skipped «<b>1</b>» directory} few{skipped «<b>{N}</b>» directory} many{skipped «<b>{N}</b>» directories} other{skipped «<b>{N}</b>» directories}}.',
    'Successfully deleted {N} {n, plural, =1{file} other{files}}' => 
        'Successfully {n, plural, =1{deleted «<b>1</b>» file} few{deleted «<b>{N}</b>» file} many{deleted «<b>{N}</b>» files} other{deleted «<b>{N}</b>» files}}.',
    'Successfully deleted {N} {n, plural, =1{directory} other{directories}}' => 
        'Successfully {n, plural, =1{deleted «<b>1</b>» directory} few{deleted «<b>{N}</b>» directory} many{deleted «<b>{N}</b>» directories} other{deleted «<b>{N}</b>» directories}}.',
    'Files and directories deleted successfully' => 'Files and directories deleted successfully.',
    'Files deleted successfully' => 'Files deleted successfully.',
    'Directories deleted successfully' => 'Directories deleted successfully.',
    'Unable to delete files' => 'Unable to delete files.',
    'Unable to delete directories' => 'Unable to delete directories.',

    /** {@see \Gm\Panel\Data\Model\FormModel} */
    'Unable to delete record' => 'Unable to delete record.',
    'Record successfully deleted' => 'Record successfully deleted.',
    'Record successfully added' => 'Record successfully added.',
    'Record successfully update' => 'Record successfully update.',
    'Unable to add record' => 'Unable to add record.',
    'Unable to update record' => 'Unable to update record.',
    'Update record' => 'Update record',
    'Adding record' => 'Adding record',
    'A record with the specified field values already exists' => 'A record with the specified field values already exists.',

    /** {@see \Gm\Panel\Module\Model\SettingsModel} */
    'Module settings {0}' => 'Module settings "{0}"',
    'Settings successfully changed' => 'Settings successfully changed.',

    /** {@see \Gm\Panel\Extension\Model\SettingsModel} */
    'Extension settings {0}' => 'Module settings "{0}"',

    /** {@see \Gm\Panel\View\BaseView} */
    'Could not load form template ({0})' => 'Could not load form template ({0}).',

    /** {@see \Gm\Panel\Helper\Ext} */
    'Editing' => 'Editing',
    'Search' => 'Search',
    'Columns' => 'Columns',
    'Add' => 'Add',
    'Adding a new record' => 'Adding a new record',
    'Delete' => 'Delete',
    'Delete selected records' => 'Delete selected records',
    'Are you sure you want to delete posts' => 'Are you sure you want to delete record(s) - <b>{0}</b> ?',
    'You need to select records' => 'You need to select records.',
    'Edit' => 'Edit',
    'Save' => 'Save',
    'Clear' => 'Clear',
    'Deleting all records' => 'Deleting all records',
    'Are you sure you want to delete all records' => 'Are you sure you want to delete all records?',
    'You are sure of this' => 'You are sure of this?',
    'Select' => 'Select',
    'Selecting entries in the list' => 'Selecting entries in the list',
    'Select all' => 'Select all',
    'Remove selection' => 'Remove selection',
    'Invert Selection' => 'Invert Selection',
    'Refresh' => 'Refresh',
    'Refresh a list of records' => 'Refresh a list of records',
    'Profiling' => 'Profiling',
    'Record profiling' => 'Record profiling',
    'Show' => 'Show',
    'Hide' => 'Hide',
    'Toggle columns' => 'Show / hide columns',
    'Filter' => 'Filter',
    'Filtering records' => 'Filtering records',
    '[None]' => '[None]',
    'Reference' => 'Reference',
    'This feature is under development' => 'This feature is under development!',
    'Browse' => 'Browse',
    'Entry must be selected' => 'Entry must be selected!',
    'Only one entry needs to be selected' => 'Only one entry needs to be selected!',
    /** {@see \Gm\Panel\Helper\Ext::fieldsetAudit()} */
    'edit / add record' => 'edit / add record',
    'User' => 'User',
    'Date' => 'Date',
    'today' => 'today', 'yesterday' => 'yesterday', 'during the week' => 'during the week', 'per month' => 'per month', 'in a year' => 'in a year',

    /** {@see \Gm\Panel\View\GridView} Grid columns. */
    'ID' => 'ID',
    'Date added' => 'Date added',
    'Date edit' => 'Date edit',

    /** {@see \Gm\Panel\Data\Model\FormModel} Grid expand. */ 
    'Record audit' => 'Record audit "<span>{0}</span>"',
    'Updated record date: {0}' => 'Updated record date: {0}',
    'Created record date: {0}' => 'Created record date: {0}',

    /** {@see \Gm\Panel\View\FormView} Form buttons. */
    'Reset'  => 'Reset',
    'Cancel' => 'Cancel',
    'Help' => 'Help',
    'Update' => 'Update',
    'About widget' => 'About widget',

    /** {@see \Gm\Panel\Audit\Audit} */
    'Forbidden access for {profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}'
        => 'FORBIDDEN ACCESS for <b>{profile}</b>, when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» at <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» at <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    'Forbidden access for {profile} at user account {user} performed: {action} with {id} from module {module} at {date} from {ipaddress}'
        => 'FORBIDDEN ACCESS form <b>{profile}</b> when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» with identifier «<b>{id}</b>» в <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    '{profile} at user account {user} use: {action} with {id} from module {module} at {date} from {ipaddress}' 
        => '<b>{profile}</b> when attempting under a user account «<b>{user}</b>» performed: {action} from module «<b>{module}</b>» with identifier «<b>{id}</b>» at <b>{date}</b> from IP-address <b>{ipaddress}</b>, operating system «<b>{os}</b>» in browser «<b>{browser}</b>»',
    '{data action}' => 'data action',
    '{update action}' => 'update action',
    '{add action}' => 'add action',
    '{view action}' => 'open tab/window',
    '<unknown>' => '<unknown>',
    /** {@see Gm\Panel\Controller\InfoController} */
    '{view info action}' => 'viewing record audit information "<b>{0}</b>"',
    /** {@see Gm\Panel\Controller\TreeController} */
    '{data tree action}' => 'viewing tree node records "<b>{0}</b>"',
    /** {@see Gm\Panel\Controller\SearchController} */
    '{view search action}' => 'open record search window',
    '{data search action}' => 'viewing record search values',
    '{update search action}' => 'applying setpoints to find records',
    /** {@see Gm\Panel\Controller\FormController} */
    '{data form action}' => 'view record "<b>{0}</b>"',
    '{update form action}' => 'update record "<b>{0}</b>"',
    '{add form action}' => 'add record "<b>{0}</b>"',
    '{view form action}' => 'opening a window to view the recording "<b>{0}</b>"',
    '{view add form action}' => 'opening a window to add a record',
    /** {@see Gm\Panel\Controller\ModuleSettingsController} */
    '{view settings action}' => 'opening the settings window',
    '{data settings action}' => 'view settings',
    '{update settings action}' => 'change settings',
    /** {@see Gm\Panel\Controller\ModuleInfoController} */
    '{info module action}' => 'opening a tab / window to view information',
    /** {@see Gm\Panel\Controller\GridController} */
    '{delete grid row(s) action}' => 'delete record(s) from grid',
    '{update grid row(s) action}' => 'update grid record "<b>{0}</b>"',
    '{clear grid row(s) action}' => 'delete all records from grid',
    '{clear action}' => 'delete all records',
    '{expand grid row(s) action}' => 'expanded record grid view "<b>{0}</b>"',
    '{view grid row(s) action}' => 'opening a tab to view a list of records',
    '{filter grid row(s) action}' => 'setting record filter',

    /** {@see \Gm\Data\DataManager} */
    '{dataManagerPermissions}' => [
        'info'       => ['Info', 'Module info'],
        'settings'   => ['Settings', 'Module settings'],
        'recordRls'  => ['Record-level access', 'View and read only your own records'],
        'writeAudit' => ['Audit Log', 'Documentation of operations performed by the user'],
        'viewAudit'  => ['Read Audit Log', 'View User Operations']
    ],

    /** {@see \Gm\Panel\Module\ModuleInstaller}, {@see \Gm\Panel\Widget\WidgetInstaller}  */
    'There is no {0} with the specified id "{1}"' => 'There is no {0} with the specified id "{1}".',
    'The {0} with the specified id "{1}" is a system' => 'The {0} with the specified id "{1}" is a system.',
    'The {0} with the identifier "{1}" is missing in the database' => 'The {0} with the identifier "{1}" is missing in the database.',
    'Missing {0} configuration file "{1}"' => 'Missing {0} configuration file "{1}".',
    'Missing file "{0}" configuration parameter "{1}"' => 'Missing file "{0}" configuration parameter "{1}".',
    'File "{0}" configuration parameter "{1}" specified incorrectly' => 'File "{0}" configuration parameter "{1}" specified incorrectly.',
    '{0} with specified id "{1}" already installed' => '{0} with specified id "{1}" already installed.',
    '{0} with specified parameter "{1}" already installed' => '{0} with specified parameter "{1}" already installed.',
    'Error adding {0} to database' => 'Error adding {0} to database.',
    'The {0} with ID "{1}" is not in the registry' => 'The {0} with ID "{1}" is not in the registry.',
    'The {0} with ID "{1}" not found at database' => 'The {0} with ID "{1}" not found at database.',
    'Error saving {0} to database' => 'Error saving {0} to database.',
    'The {0} does not have the "{1}" localization file specified in the installation options' 
        => 'The {0} does not have the "{1}" localization file specified in the installation options.',
    /** {@see \Gm\Panel\Extension\ExtensionInstaller} */
    'To install this extension, you need to install the module with the identifier "{0}"' 
        => 'To install this extension, you need to install the module with the identifier "{0}".'
];