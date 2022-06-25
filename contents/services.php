<?php

namespace contents;

use libraries\cooling\CoolingHeader;
use libraries\cooling\CoolingComponent;

CoolingHeader::constructHeader("บริการ");
?>

<section class="main-cover">
	<h1><img class="icon icon-light icon-margin" src="/static/svgs/screwdriver-wrench.svg" alt="ไอคอนบริการของเรา">บริการของเรา</h1>
	<p>บริการซ่อมแซม เปลี่ยนอะไหล่ และปรับปรุง คูลลิ่งทาวเวอร์ เรามีบริการ ในการซ่อมแซม เปลี่ยนอะไหล่ และปรับปรุง คูลลิ่งทาวเวอร์ เรามี อะไหล่ คูลลิ่งทาวเวอร์ของทุกรุ่น ของทุกยี่ห้อ สำหรับไว้ให้บริการ ทีมงานของเรายินดี เข้าไปตรวจเช็คที่หน้างานและประเมินราคา ให้กับลูกค้า</p>
</section>

<?php
CoolingComponent::services();
CoolingComponent::contact();
?>
