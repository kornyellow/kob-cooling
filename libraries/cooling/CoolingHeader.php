<?php

namespace libraries\cooling;

class CoolingHeader {
	private static string $title       = "หน้าหลัก";
	private static string $description = "จำหน่าย ออกแบบ ผลิต ติดตั้ง Cooling Tower ทุกแบบ คุณภาพมาตรฐาน โดยวิศวกรผู้เชี่ยวชาญ ทีมงานของเรายินดี เข้าไปตรวจเช็คที่หน้างาน ประเมินราคาฟรี พร้อมบริการหลังการขาย";
	private static string $abstract    = "หน้าหลักแสดงเนื้อหาเกี่ยวกับรายละเอียดคูลลิ่งทาวเวอร์";
	
	public static function getTitle(): string {
		return self::$title;
	}
	public static function getDescription(): string {
		return self::$description;
	}
	public static function getAbstract(): string {
		return self::$abstract;
	}
	
	public static function constructHeader($title = null, $description = null, $abstract = null): void {
		if ($title != null) CoolingHeader::$title = $title;
		if ($description != null) CoolingHeader::$description = $description;
		if ($abstract != null) CoolingHeader::$abstract = $abstract;
		
		include('templates/header.php');
	}
}
