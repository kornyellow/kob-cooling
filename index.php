<?php

use libraries\korn\utils\KornNetwork;
use libraries\korn\utils\KornConfig;

// Make errors visible
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Set timezone
date_default_timezone_set('Asia/Bangkok');

// Libraries for autoload classes
include('vendor/autoload.php');

// Config header
KornConfig::$websiteName = 'คูลลิ่งทาวเวอร์';
KornConfig::$defaultDescription = 'จำหน่าย ออกแบบ ผลิต ติดตั้ง Cooling Tower ทุกแบบ คุณภาพมาตรฐาน โดยวิศวกรผู้เชี่ยวชาญ ทีมงานของเรายินดี เข้าไปตรวจเช็คที่หน้างาน ประเมินราคาฟรี พร้อมบริการหลังการขาย';
KornConfig::$defaultAbstract = 'หน้าหลักแสดงเนื้อหาเกี่ยวกับรายละเอียดคูลลิ่งทาวเวอร์';
KornConfig::$defaultKeywords = 'คูลลิ่งทาวเวอร์,คูลลิ่งทาวเวอร์ทรงกลม ทรงเหลี่ยม,หอระบายความร้อน,ติดตั้งเครื่องคูลลิ่งทาวเวอร์,ซ่อมคูลลิ่งทาวเวอร์,ระบบหล่อเย็น ระบบระบายความร้อน,กบคูลลิ่ง,กบ,กรุงเทพมหานคร';

// Start Sessions
session_start();

// Find requested path
$currentDomainURL = KornNetwork::getCurrentDomainURL();

$requestPath  = KornNetwork::getRequestPath();
$absolutePath = KornNetwork::getAbsolutePath($requestPath);
if ($requestPath != $absolutePath) {
	KornNetwork::redirectPage($currentDomainURL.'/'.$absolutePath);
}

// Preventing user from accessing direct index.php
if (str_ends_with($absolutePath, 'index.php')) {
	$absolutePath = substr($absolutePath, 0, -9);
	KornNetwork::redirectPage($currentDomainURL.'/'.$absolutePath);
}

// Find a requested file
$requestFile = KornNetwork::getDocumentRoot().'/contents/';

if (empty($absolutePath)) {
	$requestFile .= 'home.php';
} else if (!file_exists($requestFile.$absolutePath.'.php')) {
	$requestFile .= $absolutePath.'/index.php';
} else {
	$requestFile .= $absolutePath.'.php';
}

// Construct an entire page
if (file_exists($requestFile))
	include($requestFile);
else
	include('templates/cores/404.php');
include('templates/footer.php');
