<?php 
	//The switch get the $_GET['p'] value to check and load the right page
	switch ($_GET['p']) 
    {
		case 'home': require_once 'welcome.php'; break;
        case 'users': require_once 'users.php'; break;
		case 'advertisements':  require_once 'advertisements.php'; break;
		default: require_once '404.php'; break;
	}
	//End of the switch case
?>