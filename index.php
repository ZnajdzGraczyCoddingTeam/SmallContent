<?php
session_start();

require 'sc-core/sc-main-core.php';

$maintenance_opt = sc_db_query('SELECT sc_maintenance FROM sc_options WHERE id=1');

if($maintenance_opt==true || $maintenance_opt==1){
	header('Location: sc-maintenance.php');
	exit();
}

ini_set('display_errors', 0);

switch($_GET['page']){
	default:
		require 'sc-includes/sc-default.php';
	break;
}

ini_set('display_errors', 1);

?>