<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	/* TRAJETTORIA CUSTOM CONSTANTS */

	#USER STATUS
	define("STATUS_INACTIVE", "0");
	define("STATUS_ACTIVE", "1");

	#USER ROLE
	define("ROLE_NAO_ATRIBUIDO", "0");
	define("ROLE_ASSISTENTE", "1");
	define("ROLE_COORDENADOR_GRUPO", "2");
	define("ROLE_SUPERVISOR_GRUPO", "3");
	define("ROLE_ADMIN_ANESTESIA", "4");
	define("ROLE_ADMIN_SISTEMA", "10");
	
	#QUESTION TARGETS
	define("TARGET_AUTO_AVALIACAO", "0");
	//define("TARGET_COORDENADOR_GRUPO", "1");
	define("TARGET_SUPERVISOR_GRUPO", "2");
	define("TARGET_CHEFE_ANESTESIA", "3");
	
	#STATUS APROVACOES
	define("NAO_APROVADO", "0");
	define("APROVADO", "1");	
	
	#WORDPRESS DATABASE
	define("WP_DBNAME", "wp_anestesia");
	define("WP_DBHOST", "localhost");
	define("WP_DBUSER", "root");
	define("WP_DBPASSWORD", "krieger");

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ',							'rb');
define('FOPEN_READ_WRITE',						'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE',		'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE',	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE',					'ab');
define('FOPEN_READ_WRITE_CREATE',				'a+b');
define('FOPEN_WRITE_CREATE_STRICT',				'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',		'x+b');


/* End of file constants.php */
/* Location: ./application/config/constants.php */