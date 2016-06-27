<?php
require_once '../../library/config.php';
require_once '../library/functions.php';

$_SESSION['login_return_url'] = $_SERVER['REQUEST_URI'];
checkUser();

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

switch ($view) {
	case 'list' :
		$content 	= 'list.php';		
		$pageTitle 	= 'GSO - View Equipment';
		break;

	case 'add' :
		$content 	= 'add.php';		
		$pageTitle 	= 'GSO - Add Equipment';
		break;

	case 'reserve' :
		$content 	= 'reserve.php';		
		$pageTitle 	= 'GSO - Modify Equipment';
		break;

	case 'detail' :
		$content    = 'detail.php';
		$pageTitle  = 'GSO - View Equipment Detail';
		break;
		
	default :
		$content 	= 'list.php';		
		$pageTitle 	= 'GSO - View Equipment';
}




$script    = array('confirmation.js');

require_once '../include/template.php';
?>
