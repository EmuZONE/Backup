<?php
// Language File for Sypex Dumper 2
$LNG = array(

// Information about the language file
'ver'				=> 20007, // Dumper version
'translated'		=> 'zapimir (http://sypex.net/)', // Contacts
'name'				=> 'Deutsch', // Lang name

// Toolbar
'tbar_backup'		=> 'Exportieren',
'tbar_restore'		=> 'Importieren', 
'tbar_files'		=> 'Dateien',
'tbar_services'		=> 'Dienste',
'tbar_options'		=> 'Optionen',
'tbar_createdb'		=> 'Erstelle DB',
'tbar_connects'		=> 'Verbindung',
'tbar_exit'			=> 'Verlassen',

// Names of objects in the tree
'obj_tables'		=> 'Tabellen',
'obj_views'			=> 'Ansicht',
'obj_procs'			=> 'Procedures',
'obj_funcs'			=> 'Funktionen',
'obj_trigs'			=> 'Triggers',
'obj_events'		=> 'Ereignisse',

// Export
'zip_max'			=> 'Max',
'zip_min'			=> 'Min',
'zip_none'			=> 'Unkomprimiert',
'default'			=> 'default',
'combo_db'			=> 'Datenbank (Schema):', 
'combo_charset'		=> 'Charset:', 
'combo_zip'			=> 'Kompression:', 
'combo_comments'	=> 'Bemerkung:',
'del_legend'		=> 'Automatisch l&ouml;schen wenn:',
'del_date'			=> 'Dateien aelter als %s Tage',
'del_count'			=> 'Anzahl der Dateien mehr als %s',
'tree'				=> 'Select objects:',
'no_saved'			=> 'No saved jobs',
'btn_save'			=> 'Speichern',
'btn_exec'			=> 'Ausf&uuml;hren',
'outfile'			=> 'OUTFILE mode',// 2.0.7 pro

// Import	
'combo_file'		=> 'File:',
'combo_strategy'	=> 'Restore strategy:',
'ext_legend'		=> 'Extended options:',
'correct'			=> 'Charset correction',
'autoinc'			=> 'Reset AUTO_INCREMENT',
'prefix'			=> 'Replace prefix from %s to %s',// 2.0.7 pro
'savesql'			=> 'Save to SQL-file',// 2.0.7 pro
'infile'			=> ' to file',// 2.0.7 pro

// Log
'status_current'	=> 'Aktueller Status:',
'status_total'		=> 'Totaler Status:',
'time_elapsed'		=> 'Elapsed:',
'time_left'			=> 'Left:',
'btn_stop'			=> 'Abbrechen',
'btn_pause'			=> 'Pause',
'btn_resume'		=> 'Fortsetzen',
'btn_again'			=> 'Wiederholen',
'btn_clear'			=> 'Log l�schen',

// Files
'btn_delete'		=> 'L�schen',
'btn_download'		=> 'Download',
'btn_open'			=> '�ffnen',

// Services
'opt_check'			=> 'Options for Check:',
'opt_repair'		=> 'Options for Repair:',
'btn_delete_db'		=> 'Delete DB',
'btn_check'			=> 'Check',
'btn_repair'		=> 'Repair',
'btn_analyze'		=> 'Analyze',
'btn_optimize'		=> 'Optimize',
'btn_extra'			=> 'Extra...',// 2.0.7 pro

// Options
'cfg_legend'		=> 'Basic settings:',
'cfg_time_web'		=> 'Timelimit web (seconds):',
'cfg_time_cron'		=> 'Timelimit cron (seconds):',
'cfg_backup_path'	=> 'Path to backup directory:',
'cfg_backup_url'	=> 'URL to backup directory:',
'cfg_globstat'		=> 'Global statistics:',
'cfg_extended'		=> 'Extended settings:',
'cfg_charsets'		=> 'Charset filter:',
'cfg_only_create'	=> 'Only create types:',
'cfg_auth'			=> 'Authorization chain:',
'cfg_confirm'		=> 'Ask confirmation for:',
'cfg_conf_import'	=> 'import',
'cfg_conf_file'		=> 'file delete',
'cfg_conf_db'		=> 'database delete',
'cfg_conf_truncate'	=> 'table empty',// 2.0.7 pro
'cfg_conf_drop'		=> 'table delete',// 2.0.7 pro
'cfg_outfile_path'	=> 'Path for OUTFILE:',// 2.0.7 pro
'cfg_outfile_size'	=> 'OUTFILE buffer size (МБ):',// 2.0.7 pro

// Connection
'con_header'		=> 'Venbindungs Einstellungen',
'connect'			=> 'Verbindung',
'my_host'			=> 'Host:',
'my_port'			=> 'Port:',
'my_user'			=> 'Benutzer:',
'my_pass'			=> 'Passwort:',
'my_pass_hidden'	=> 'Password is not shown',
'my_comp'			=> 'Compression protocol',
'my_db'				=> 'Databases:',
'btn_cancel'		=> 'Abbrechen',

// Save Job
'sj_header'			=> 'Save job',
'sj_job'			=> 'Job',
'sj_name'			=> 'Name (eng.):',
'sj_title'			=> 'Description:',

// Create DB
'cdb_header'		=> 'Create new database',
'cdb_detail'		=> 'Details',
'cdb_name'			=> 'Name:',
'combo_collate'		=> 'Collation:',
'btn_create'		=> 'Create',
'hint'				=> 'Hint',// 2.0.7 pro

// Authorization
'js_required'		=> 'JavaScript muss aktiv sein',
'auth'				=> 'Anmeldung',
'auth_user'			=> 'Benutzer:',
'auth_remember'		=> 'Speichern',
'btn_enter'			=> 'Anmelden',
'btn_details'		=> 'Details',

// Log messages
'not_found_rtl'		=> 'RTL-file not exists',
'backup_begin'		=> 'Start export DB `%s`',
'backup_TC'			=> 'Export table `%s`',
'backup_VI'			=> 'Export view `%s`',
'backup_PR'			=> 'Export procedure `%s`',
'backup_FU'			=> 'Export function `%s`',
'backup_EV'			=> 'Export event `%s`',
'backup_TR'			=> 'Export trigger `%s`',
'continue_from'		=> 'from positions %s',
'backup_end'		=> 'Export database `%s` finished.',
'autodelete'		=> 'Autodelete of old files:',
'del_by_date'		=> '- `%s` - deleted (by date)',
'del_by_count'		=> '- `%s` - deleted (by count)',
'del_fail'			=> '- `%s` - delete fail',
'del_nothing'		=> '- no files to delete',
'set_names'			=> 'Set connection encoding: `%s`',
'restore_begin'		=> 'Start import DB `%s`',
'restore_TC'		=> 'Import table `%s`',
'restore_VI'		=> 'Import view `%s`',
'restore_PR'		=> 'Import procedure `%s`',
'restore_FU'		=> 'Import function `%s`',
'restore_EV'		=> 'Import event `%s`',
'restore_TR'		=> 'Import trigger `%s`',
'restore_keys'		=> 'Enable indexes',
'restore_end'		=> 'DB `%s` restored from a backup.',
'stop_1'			=> 'Execution aborted by user', 
'stop_2'			=> 'Execution stopped by user',
'stop_3'			=> 'Execution stopped by timer',
'stop_4'			=> 'Execution stopped by timeout',
'stop_5'			=> 'Execution aborted because of an error',
'job_done'			=> 'Job successful',
'file_size'			=> 'File size',
'job_time'			=> 'Time spent',
'seconds'			=> 'seconds',
'job_freeze'		=> 'The process has not been updated for more than 30 seconds. Click Resume',
'stop_job'			=> 'Stop request',

// For JS
'js' => array(
	
	// Tabs names
	'backup'		=> 'Export database (schema)',
	'restore'		=> 'Import database (schema)',
	'log'			=> 'Log',
	'result'		=> 'Results',
	'files'			=> 'Files',
	'services'		=> 'Services',
	'options'		=> 'Options',

	// Tables header
	'dt'			=> 'Date/time',
	'action'		=> 'Action',
	'db'			=> 'Database',
	'type'			=> 'Type',
	'tab'			=> 'Tabs',
	'records'		=> 'Records',
	'size'			=> 'Size',
	'comment'		=> 'Comments',

	// AJAX Status
	'load'			=> 'Loading',
	'run'			=> 'Running...',
	'sdb'			=> 'Create new database',
	'sc'			=> 'Save connection',
	'sj'			=> 'Save job',
	'so'			=> 'Save options',

	// Messages
	'pro'			=> 'Option available only in Pro-version',
	'err_fopen'		=> 'Unable to open file',
	'err_sxd2'		=> 'View file contents available only for files created by Sypex Dumper 2',
	'err_empty_db'	=> 'Database is empty',
	'fdc'			=> 'Do you really want to delete file?',
	'ddc'			=> 'Do you really want to delete database?',
	'fic'			=> 'Do you really want to import file?',
	'ttc'			=> 'Do you really want to empty table?',// 2.0.7 pro
	'tdc'			=> 'Do you really want to delete table?',// 2.0.7 pro

	// Sizes
	'sizes'			=> array('B', 'KB', 'MB', 'GB'),

	// Изменение/исправление кодировки
	'chc_header'	=> 'Change charset',// 2.0.7 pro
	'coc_header'	=> 'Correct charset',// 2.0.7 pro

	'hint_chc'		=> 'Change charset needed in cases where you need to change the encoding tables and data, for example, from cp1251 to utf8.',// 2.0.7 pro
	'hint_coc'		=> 'Correct charset needed in cases where a table is specified one encoding, and data to another. For example, a table in latin1, and the data in cp1251.',// 2.0.7 pro
	'need_backup'	=> 'It is recommended to make a backup of the database.',// 2.0.7 pro
	
	// Долнительные сервисы
	'btn_chc'		=> 'Change charset',// 2.0.7 pro
	'btn_coc'		=> 'Correct charset',// 2.0.7 pro
	'btn_enable'	=> 'Enable keys',// 2.0.7 pro
	'btn_disable'	=> 'Disable keys',// 2.0.7 pro
	'btn_truncate'	=> 'Empty table',// 2.0.7 pro
	'btn_drop'		=> 'Delete table',// 2.0.7 pro
	'btn_drop_db'	=> 'Delete DB',// 2.0.7 pro
)
);
?>
