<?php 
	/**
	 * NINA Framework
	 * Vertion 1.0
	 * Author NINA Co.,Ltd. (nina@nina.vn)
	 * Copyright (C) 2015 NINA Co.,Ltd. All rights reserved
	*/
	 
	if(!defined('_lib')) die("Error");
		error_reporting(0);


	function nettuts_error_handler($number, $message, $file, $line, $vars)
	{
		if ( ($number !== E_NOTICE) && ($number < 2048) ) {
			include 'templates/error_tpl.php';
			die();
		}
	}
	//set_error_handler('nettuts_error_handler');
	//error_reporting(0);

	date_default_timezone_set('Asia/Ho_Chi_Minh');

	$config_url=$_SERVER["SERVER_NAME"].'';
	$config['debug']=1;    #Bật chế độ debug dành cho developer
	$config['lang']="vi";
	$config_email="contact@nhaxanhsaigon.com";
	$config_pass="uwBGlNgSm";
	$config_ip="210.2.87.7";

	$config['database']['servername'] = 'localhost';
	$config['database']['username'] = 'nhaxanhsai_db';
	$config['database']['password'] = 'qZik1TZh';
	$config['database']['database'] = 'nhaxanhsai_db';
	$config['database']['refix'] = 'table_';

?>