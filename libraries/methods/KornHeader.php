<?php

namespace libraries\methods;

class KornHeader {
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
		if ($title != null) KornHeader::$title = $title;
		if ($description != null) KornHeader::$description = $description;
		if ($abstract != null) KornHeader::$abstract = $abstract;
		
		include('templates/header.php');
	}
}
