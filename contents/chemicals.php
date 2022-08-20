<?php

namespace contents;

use libraries\cooling\CoolingHeader;
use libraries\cooling\CoolingComponent;

CoolingHeader::constructHeader("ติดต่อเรา");
?>

<section class="main-cover">
	<h1><img class="icon icon-light icon-margin" src="/static/svgs/flask-vial.svg" alt="ไอคอนเคมีภัณฑ์">เคมีภัณฑ์</h1>
	<p>เคมีภัณฑ์ ผลิตและจำหน่าย จารบี น้ำมัน สเปรย์ เคมีน้ำยาในระบบคูลลิ่งทาวเวอร์ บอยเล่อร์ ซิลเลอร์</p>
</section>

<?php
CoolingComponent::chemical();
CoolingComponent::contact();
?>
