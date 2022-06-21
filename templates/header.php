<?php

namespace templates;

use libraries\methods\KornHeader;

$title       = KornHeader::getTitle();
$abstract    = KornHeader::getAbstract();
$description = KornHeader::getDescription();

?>

<!DOCTYPE html>
<html lang="th">

<head>
	<!-- Metas -->
	<meta charset="utf-8">

	<title><?php echo $title ?> - คูลลิ่งทาวเวอร์</title>

	<meta name="title" content="<?php echo $title ?> - กบคูลลิ่งทาวเวอร์ และบริการ">
	<meta name="author" content="สุคนธ์ สุโขพล (กบ)">
	<meta name="owner" content="kornkubzaza@gmail.com (กร)">

	<meta name="keywords" content="คูลลิ่งทาวเวอร์,คูลลิ่งทาวเวอร์ทรงกลม ทรงเหลี่ยม,หอระบายความร้อน,ติดตั้งเครื่องคูลลิ่งทาวเวอร์,ซ่อมคูลลิ่งทาวเวอร์,ระบบหล่อเย็น ระบบระบายความร้อน,กบคูลลิ่ง,กบ,กรุงเทพมหานคร">
	<meta name="abstract" content="<?php echo $abstract ?>">
	<meta name="description" content="<?php echo $description ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Taviraj&family=DM+Serif+Text&family=Kanit&display=swap">

	<!-- CSS -->
	<link rel="stylesheet" href="/static/css/root.css">
	<link rel="stylesheet" href="/static/css/main.css">

	<link rel="stylesheet" href="/static/css/home.css">
	<link rel="stylesheet" href="/static/css/services.css">
	<link rel="stylesheet" href="/static/css/contact.css">

	<!-- Favicon -->
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-config" content="/static/favicons/browserconfig.xml">
	<meta name="theme-color" content="#FFFFFF">

	<link rel="apple-touch-icon" sizes="180x180" href="/static/favicons/apple-touch-icon.png">
	<link rel="icon" sizes="any" href="/static/favicons/favicon.ico">
	<link rel="mask-icon" href="/static/favicons/safari.svg" color="#5BBAD5">
	<link rel="shortcut icon" href="/static/favicons/favicon.ico">

	<link rel="manifest" href="/static/favicons/site.webmanifest">
</head>

<body>

<!-- Navigation -->
<div class="header-wrapper">
	<header class="logo">
		<button id="mobileNavigationButton" class="collapse-button" title="เปิดเมนู">
			<img class="icon icon-dark" src="/static/svgs/bars.svg" alt="ไอคอนเปิดเมนู">
		</button>
		<a href="/home" class="logo-text">
			<span class="main"><span class="colon">:</span>coolingbykob.com</span>
			<span class="sub">cooling tower, services</span>
		</a>
		<div class="logo-contact">โทร 085-982-3898 คุณกบ</div>
	</header>
	<nav class="nav">
		<ul>
			<li class="nav-item"><a class="js-nav-button" href="/home" title="หน้าหลัก">หน้าหลัก</a></li>
			<li class="nav-item"><a class="js-nav-button" href="/products" title="สินค้า">สินค้า</a></li>
			<li class="nav-item"><a class="js-nav-button" href="/services" title="บริการ">บริการ</a></li>
			<li class="nav-item"><a class="js-nav-button" href="/works" title="ผลงาน">ผลงาน</a></li>
			<li class="nav-item"><a class="js-nav-button" href="/contact" title="ติดต่อเรา">ติดต่อเรา</a></li>
		</ul>
	</nav>
</div>
<div id="mobileNavigationOverlay" class="mobile-nav-overlay"></div>
<div id="mobileNavigation" class="mobile-nav-wrapper">
	<nav class="mobile-nav">
		<ul>
			<li class="nav-item">
				<a class="js-nav-button" href="/home" title="หน้าหลัก">
					<img class="icon icon-dark icon-margin" src="/static/svgs/house.svg" alt="ไอคอนหน้าหลัก">หน้าหลัก
				</a>
			</li>
			<li class="nav-item">
				<a class="js-nav-button" href="/products" title="สินค้า">
					<img class="icon icon-dark icon-margin" src="/static/svgs/box-open.svg" alt="ไอคอนหน้าหลัก">สินค้า
				</a>
			</li>
			<li class="nav-item">
				<a class="js-nav-button" href="/services" title="บริการ">
					<img class="icon icon-dark icon-margin" src="/static/svgs/screwdriver-wrench.svg" alt="ไอคอนหน้าหลัก">บริการ
				</a>
			</li>
			<li class="nav-item">
				<a class="js-nav-button" href="/works" title="ผลงาน">
					<img class="icon icon-dark icon-margin" src="/static/svgs/images.svg" alt="ไอคอนหน้าหลัก">ผลงาน
				</a>
			</li>
			<li class="nav-item">
				<a class="js-nav-button" href="/contact" title="ติดต่อเรา">
					<img class="icon icon-dark icon-margin" src="/static/svgs/address-card.svg" alt="ไอคอนหน้าหลัก">ติดต่อเรา
				</a>
			</li>
		</ul>
	</nav>
	<footer class="mobile-nav-footer">
		<div class="text">cooling tower, services</div>
		<div class="contact">โทร 082-423-2132 คุณกบ</div>
	</footer>
</div>

<!-- Main -->
<main class="main-body" id="main">
