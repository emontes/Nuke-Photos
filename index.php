<?php
/**
 * @author Enrique Montes <enriqueadelino@gmail.com>
 * @version 1.0
 * @package NukeFlogr
 * @link http://nukeflogr.googlecode.com
 * en www.turista.com.mx
 */

if (!eregi("modules.php", $PHP_SELF)){
	die ("You can't access this rows directly...");
}
$index = 1;
$pagetitle = " - Fotos";
require_once("mainfile.php");
$module_name = basename(dirname(__FILE__));
$module_path = 'modules/'.$module_name;
get_lang($module_name);


require_once("modules/$module_name/adminflog/flogr.php");


if ($_GET['type'] != 'rss' && $_GET['type'] != 'map_data') {
	include("footer.php");
}


?>