<?php
	if (!isset($page_title)) {
		$page_title = 'Page Title';
	}
?>

<!DOCTYPE html>
<html lang="ru"><!-- bloginfo('language') -->
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title><?= $page_title ?> - Segasec</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
	<link rel="stylesheet" href="css/main.css">
	<?php //wp_head(); ?>
</head>
<body>
	<div class="wrapper push">
		<div class="page">
			<header class="header">
				<div class="header-inner">
					<div class="header-block">
						<a href="index.php" class="logo-block">
							<img src="img/logo.svg" alt="">
						</a>
					</div>
					<div class="header-block right-block">
						<ul class="top-nav">
							<li><a href="#">Solution</a></li>
							<li><a href="#">Company</a></li>
							<li><a href="#">Careers</a></li>
							<li><a href="#">Partners</a></li>
							<li><a href="#">News</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
						<a href="#" class="btn btn-small">Report Malicius Site</a>
					</div>
				</div>
			</header>