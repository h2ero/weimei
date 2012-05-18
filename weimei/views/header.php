<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
	<HEAD>
		<META content="text/html; charset=utf-8" http-equiv=Content-Type>
		<title><?=$title?>-唯美小站WeiMei.De</title>
		<meta name="author" content="h2ero" />
		<meta name="keywords" content="<?=$keywords?>" />
		<meta name="description" content="<?=isset($description)?$description:''?>" />
		<link rel="shortcut icon" href="favicon.ico"/>
		<!-- Date: 2011-10-23 -->
		<link rel="stylesheet/less" href="/style/css/style.less">
		<link rel=stylesheet type=text/css href='/style/css/base.css'>
		<link rel=stylesheet type=text/css href='/style/css/fancybox/jquery.fancybox-1.3.4.css'>
		<script src='/style/js/jquery-1.7.2.min.js'></script>
		<script src='/style/js/less-1.3.0.min.js'></script>
		<script src='/style/js/main.js'></script>
		<script src='/style/js/jquery.fancybox-1.3.4.js'></script>
		<?php
		echo $css.$js;
		 ?>
		<script src='/style/js/simpleStyle.js'></script>
		<script type="text/javascript">
		var baseurl='<?=base_url()?>';
		var siteurl='<?=site_url()?>';
		var album_id='<?=$albumId?>';
		var target='<?=$target?>';
		</script>
	</head>
	<body>
		<div id="container">
		<div id="header">
		<div id="inner-header">
			<a href="/" id="logo"><img id="logo" src="/style/images/logo.png" /></a>
			<div id="menu">
				<a href="/pic"><img src="/style/images/img.png" alt="" /></a>
				<a href="/article"><img src="/style/images/text.png" alt="" /></a>
			</div>
			<div id="user-msg"></div>
			<div class="fn-clear"></div>
		</div>
		</div>
		<!--header-->