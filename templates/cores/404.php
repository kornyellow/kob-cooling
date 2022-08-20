<?php

namespace templates\cores;

use libraries\korn\client\KornHeader;

KornHeader::constructHeader("ไม่พบหน้าดังกล่าว");

?>

<div class="col-12">
	<div class="card">
		<h1 class="card-header">ไม่พบหน้าดังกล่าว</h1>
		<div class="card-body">
			<p class="card-text">เราไม่พบหน้าที่ท่านต้องการ</p>
			<a class="btn btn-dark" href="/home" title="หน้าหลัก">กลับสู่หน้าหลัก</a>
		</div>
	</div>
</div>
