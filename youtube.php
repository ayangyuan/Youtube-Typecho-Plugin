<?php
	error_reporting(E_ERROR);
	$support_type = array('music','video','movie');
	$type = $_GET['type'];

	if(!in_array($type,$support_type)){
		exit(json_encode(array('error'=>'不支持的解析类型')));
	}
	$method = 'set'.$type;
	require dirname(__FILE__).'/urlParse.php';
	//$urlParse = new urlParse();
	//$return = $urlParse->$method($_POST['link'],'');
	$return = "https://youtu.be/kZqH9Kfv6BI";
	echo json_encode($return);
?>
