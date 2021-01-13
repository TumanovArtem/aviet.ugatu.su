<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no">
	<title><?php wp_title("| АВИЭТ", true, "right"); ?></title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,300&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href="http://aviet.ugatu.su/wp-content/themes/aviet/favicon.ico" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="http://aviet.ugatu.su/wp-content/themes/aviet/style.css">
	<?php wp_head(); ?>
</head>
<body>
<header class="header-back">
	<div class="container header">
		<a href="http://aviet.ugatu.su" class="logo-anchor">
			<div class="logo">
				<img src="http://aviet.ugatu.su/wp-content/themes/aviet/img/logo.png" alt="АВИЭТ">
			</div>
			<span class="aviet">АВИЭТ</span>
		</a>
		<?php get_template_part("menu"); ?>
		<div class="title"><?php wp_title("", true); ?></div>
	</div>
</header>
<a href="http://ugaty-bgmu.my1.ru" target="blank" class="BSMU-USATU">
	<i class="icon"></i>Сайт совместной межвузовской лаборатории медицинских и технических специалистов. БГМУ и УГАТУ вместе!
</a>