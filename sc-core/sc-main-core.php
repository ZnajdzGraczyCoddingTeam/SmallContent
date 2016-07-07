<?php
require 'sc-config.php';

function sc_db_query($SQL){
	try
	{
		$pdo = new PDO('mysql:host='.SC_DB_HOST.';dbname='.SC_DB_NAME.'', SC_DB_USER, SC_DB_PASS);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		return $pdo->query($SQL);
		
	}catch(PDOException $e){
		return 'ERROR DATABASE!'.$e->getMessage();
	}
}

?>