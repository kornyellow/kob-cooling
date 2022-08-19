<?php

namespace templates;

use libraries\cooling\CoolingHeader;

$title       = CoolingHeader::getTitle();
$abstract    = CoolingHeader::getAbstract();
$description = CoolingHeader::getDescription();

if ($title !== 'หน้าหลัก') {
	$title.= ' · คูลลิ่งทาวเวอร์';
} else {
	$title = 'คูลลิ่งทาวเวอร์';
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
	<!-- Metas -->
	<meta charset="utf-8">

	<title><?php echo $title ?></title>

	<meta name="title" content="<?php echo $title ?> · กบคูลลิ่งทาวเวอร์ และบริการ">
	<meta name="author" content="สุคนธ์ สุโขพล (กบ)">
	<meta name="owner" content="kornkubzaza@gmail.com">

	<meta name="keywords" content="คูลลิ่งทาวเวอร์,คูลลิ่งทาวเวอร์ทรงกลม ทรงเหลี่ยม,หอระบายความร้อน,ติดตั้งเครื่องคูลลิ่งทาวเวอร์,ซ่อมคูลลิ่งทาวเวอร์,ระบบหล่อเย็น ระบบระบายความร้อน,กบคูลลิ่ง,กบ,กรุงเทพมหานคร">
	<meta name="abstract" content="<?php echo $abstract ?>">
	<meta name="description" content="<?php echo $description ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- CSS -->
	<link href="/static/css/root.css" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer async></script>


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
<nav class="navbar navbar-dark sticky-top navbar-expand-lg bg-dark">
	<div class="container-md">
		<a class="navbar-brand display-1" href="/home">kobcooling.com</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbar"
			aria-controls="navbar"
			aria-expanded="false"
			aria-label="Toggle navigation"
		><span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="/home">หน้าหลัก</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/products">สินค้า</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/services">บริการ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/chemicals">เคมีภัณฑ์</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/works">ผลงาน</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact">ติดต่อ</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Main -->
<main class="main-body" id="main">
<div class="container-md mt-2">
<div class="row gy-2">
