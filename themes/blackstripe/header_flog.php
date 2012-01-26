<?php 
global $pagetitle,$type,$page,$photoId,$setId;

 $arrtype = array(
		'' =>  '',
		'photo' => 'photo.php',
		'recent' => ' - '._RECENT,
		'sets' => ' - '._SETS,
		'tags' => ' - '._TAGS,
		'map' => ' - '._MAP,
		'favorites' => ' - '._FAVORITES,
		'about' => ' - '._ABOUT		
 );

 if (isset($page)){
 	$pagenum=" - "._PAGE." ".$page;
 }
 if (isset($photoId)){
 	$photoTit= " - "._PHOTO." ".$photoId;
 }
 if (isset($setId)){
 	$setTit = " - "._SETS." ".$setId;
 }
$pagetitle .= $arrtype[$type].$setTit.$pagenum.$photoTit;
include("header.php"); 
?>

<link href='<?php echo SITE_URL;?>/<?php echo SITE_THEME_PATH;?>css/blackstripe.css' rel='stylesheet' type='text/css' />
<!-- Javascript effects -->
<link href='<?php echo SITE_URL;?>/<?php echo SITE_THEME_PATH;?>css/slimbox2.css' rel='stylesheet' type='text/css' />
<link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/themes/black-tie/jquery-ui.css" />
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script>
<script type='text/javascript' src='<?php echo SITE_URL; ?>/<?php echo SITE_THEME_PATH;?>js/slimbox2.js'></script>

  <div id="container">

    <div id="wrapper">
    
      <div id="header">
        <span id="header_title"></span> 
        <span id="header_menu"><?php include('menu.php'); ?></span>
      </div>
