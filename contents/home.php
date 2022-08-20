<?php

namespace contents;

use libraries\cooling\CoolingHeader;
use libraries\cooling\CoolingComponent;

CoolingHeader::constructHeader();
?>

<div class="col-12">
	<div class="card">
		<div class="row">
			<div class="col-lg-6">
				<div id="carouselCoolingType" class="carousel slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselCoolingType" data-bs-slide-to="0" class="active" aria-current="true" aria-label="คูลลิ่งทาวเวอร์ทรงกลม"></button>
						<button type="button" data-bs-target="#carouselCoolingType" data-bs-slide-to="1" aria-label="คูลลิ่งทาวเวอร์ทรงเหลี่ยม"></button>
					</div>
					<div class="carousel-inner rounded-1">
						<div class="carousel-item active">
							<img loading="lazy" class="img-fluid" src="/static/images/type/circle.jpg" alt="คูลลิ่งทาวเวอร์ทรงกลม">
						</div>
						<div class="carousel-item">
							<img loading="lazy" class="img-fluid" src="/static/images/type/square.jpg" alt="คูลลิ่งทาวเวอร์ทรงเหลี่ยม">
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselCoolingType" data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">หน้าก่อนหน้า</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselCoolingType" data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">หน้าถัดไป</span>
					</button>
				</div>
			</div>
			<div class="col-lg-6 d-flex align-items-center">
				<div class="card-body">
					<h1 class="card-title">คูลลิ่งทาวเวอร์</h1>
					<blockquote class="blockquote mt-4">
						<footer class="blockquote-footer">cooling tower, services</footer>
					</blockquote>
					<p class="card-text">ผลิตและจำหน่ายคูลลิ่งทาวเวอร์กลมและคูลลิ่งทาวเวอร์เหลี่ยม ซ่อมแซมคูลลิ่งทาวเวอร์ เปลี่ยนอะไหล่ของคูลลิ่งทาวเวอร์ทุกชนิด ทุกยี่ห้อ บริการงานล้างคูลลิ่ง ทั้งงานระบบ งานปั๊มน้ำ และงานท่อ โดยทีมงานมืออาชีพที่ชำนาญงาน เพื่อให้บริการตามความต้องการของลูกค้าและเจ้าของโครงการ หรือผู้รับเหมาก่อสร้าง เพื่อตอบสนองความต้องการในงานระบบงานทำคูลลิ่งทาวเวอร์ และงานระบบ และจำหน่ายเคมีน้ำยาในระบบคูลลิ่ง ซิลเลอร์ บอยเลอร์</p>
					<p class="card-text"><small class="text-muted">ติดต่อ โทร 085-982-3898 (คุณกบ)</small></p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
CoolingComponent::contact();
?>
