<?php 
	include("conf/".$_SERVER['SERVER_NAME'].".php");
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="Pagina 404">
<meta name="robots" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<title>ADmize | OPS!! Sei capitato sulla pagina 404!</title>
<link rel="stylesheet" type="text/css" media="screen" href="http://www.devslide.com/public/labs/browser-detection/browser-detection.css" />
<script type="text/javascript" src="http://www.devslide.com/public/labs/browser-detection/browser-detection.js"></script>
<script type="text/javascript">
<!--
var displayPoweredBy = false;
// -->
</script>
<link rel="shortcut icon" href="<?php echo $server_url; ?>favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo $server_url; ?>favicon.ico" type="image/x-icon"><!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style type="text/css">
.clearfix:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}
header #panes div {
	display:none;
}
</style>
<!--[if IE]>
<style type="text/css">
  .clearfix {
    zoom: 1;     /* triggers hasLayout */
    }  /* Only IE can see inside the conditional comment
    and read this CSS rule. Don't ever use a normal HTML
    comment inside the CC or it will close prematurely. */
</style>
<![endif]-->
<!--[if lt IE 7]>
<script src="js/DD_belatedPNG.js"></script>
<script>
  DD_belatedPNG.fix('img');
</script>
<![endif]-->
<link href="<?php echo $server_url; ?>css/admize.css" rel="stylesheet" type="text/css">
<link href="<?php echo $server_url; ?>css/utility.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php @include($server_pth."inc_web/header.php"); ?>
<div id="sezione">
    <h2 class="title">OPS!</h2>
</div>
<div id="content" class="clearfix">
    <div class="mono brief">
        <div class="clearer thirty"></div>
        <h2> non hai trovato la pagina che cercavi?</h2>
        <h3><a href="javascript:history.back()">torna alla pagina precedente</a></h3>
        <div class="clearer twenty"></div>
    </div>
</div>
</div>
<?php @include($server_pth."inc_web/footer.php"); ?>
</body>
</html>
