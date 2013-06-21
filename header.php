<?php
  // Define path and name of cached file    
  $cachefile = 'cache/'.basename($_SERVER['SCRIPT_FILENAME']).'.html';
  // How long to keep cache file?   
  $cachetime = 18000;
  // Is cache file still fresh? If so, serve it.    
  if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {    
  include($cachefile);        
  exit;    
  }   
  // if no file or too old, render and capture HTML page.
  ob_start();
header('Content-Type: text/html; charset=utf-8');
$sitename='WebCraft';
$slogan='A Minecraft inspired theme';
/*---Minify HTML---*/
function sanitize_output($buffer){
    $search = array(
        '/\>[^\S ]+/s', //strip whitespaces after tags, except space
        '/[^\S ]+\</s', //strip whitespaces before tags, except space
        '/(\s)+/s'  // shorten multiple whitespace sequences
        );
    $replace = array(
        '>',
        '<',
        '\\1'
        );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}
ob_start("sanitize_output");
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="apple-touch-icon.png"/>
	<title><?php echo $sitename; ?> - <?php echo $slogan; ?></title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="icon" href="favicon.ico" />
	<!--CSS RESET-->
	<style type="text/css">html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font:inherit;font-size:100%;margin:0;padding:0;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote:before,blockquote:after,q:before,q:after{content:none}table{border-collapse:collapse;border-spacing:0}</style>
	<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap-responsive.min.css" />
	<link rel="stylesheet" type="text/css" media="all" href="css/style.css" />
	<script src="js/modernizr.js"></script>
</head>
<body>
	<div id="loading"></div>
	<div class="container">
		<header class="row-fluid">
			<div id="logo" class="span12">
	      		<a href="index.php"><img src="img/logo.png" width="548" height="88" alt="<?php echo $sitename; ?>" title="<?php echo $sitename; ?>" /></a>
	      		<div id="splash"><?php $items = file("splashes.txt",FILE_IGNORE_NEW_LINES); $item = rand(0, sizeof($items)-1); echo $items[$item]; ?></div>
	      	</div>
		  <nav class="span12">
			  <a href="index.php">Home</a>
			  <a href="elements.php">Elements</a>
			  <a href="changelog.php">Changelog</a>
			  <a href="downloads.php">Downloads</a>	  
		  </nav>
		</header>
		<div id="content" class="row-fluid">
			<section class="span9">
				<div>
