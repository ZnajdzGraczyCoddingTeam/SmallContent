<?php

function sc_doctype(){
	echo '<!DOCTYPE html>';
	
	echo '<html>';
}

function sc_head_meta(){
	$desc_value = sc_db_query('SELECT sc_description FROM sc_options WHERE id=1');
	$keyw_value = sc_db_query('SELECT sc_keywords FROM sc_options WHERE id=1');
	//echo meta values
	?>
	
	<meta charset="UTF-8">
	<meta name="Keywords" content="<?=$keyw_value?>">
	<meta name="Description" content="<?=$desc_value?>">
	<meta name="generator" content="<?=SC_VERSION?>">
<?php
}

function sc_head_css(){
	echo '<link rel="stylesheet" href="./sc-theme/sc-theme.css?'.SC_VERSION.'">';
	if(file_exists('./sc-extra-css.css')) echo '<link rel="stylesheet" href="./sc-theme/sc-extra-css.css'.SC_VERSION.'"';
}

function sc_head(){
	sc_head_meta();
	sc_head_css();
	sc_head_script();
}

function sc_all_html(){
	sc_doctype();
	echo '<head>';
	sc_head();
	echo '</head>';
	echo '<body>';
	sc_body();
}
?>