<?php

namespace contents;

use libraries\korn\client\KornHeader;
use libraries\cooling\CoolingComponent;

KornHeader::constructHeader('สินค้า');

?>

<div class="col-12">
	<div class="card">
		<h1 class="card-header">สินค้า</h1>
		<div class="card-body">
			<p>คูลลิ่งทาวเวอร์ประเภทต่าง ๆ มีให้เลือกหลากหลาย ยกตัวอย่างเช่น ระบบดูดลมเข้าแบบไหลสวนทาง (แบบทรงกลม) ระบบดูดลมเข้าแบบไหลตัดขวาง (แบบทรงเหลี่ยม) ระบบเป่าลมเข้าแบบไหลสวนทางและระบบแบบปิด เพื่อพิจารณาตามความเหมาะสม เรามีให้บริการทั้งคูลลิ่งทาวเวอร์แบบมาตรฐาน และแบบที่ออกแบบตามความต้องการของที่ลูกค้ากำหนดเอง</p>
			<div class="card">
				<div class="row">
					<div class="col-12 col-xl-4 d-flex justify-content-center align-items-center">
						<img loading="lazy" class="img-fluid" src="/static/images/product/cooling_tower_square.png" alt="คูลลิ่งทาวเวอร์ทรงเหลี่ยม">
					</div>
					<div class="col-12 col-xl-8 d-flex align-items-center">
						<div class="card-body">
							<h2 class="card-title">คูลลิ่งทาวเวอร์ แบบ Cross Flow (ทรงเหลี่ยม)</h2>
							<p>ใช้หลักการแลกเปลี่ยนความร้อนระหว่างน้ำกับอากาศแบบสวนทางกันในแนวตั้งฉาก จึงทำให้มีประสิทธิภาพในการระบายความร้อนสูง ข้อดีคือมีขนาดเล็กกว่าแบบ Counter Flow (ทรงกลม) เหมาะสำหรับติดตั้งหน้างานที่มีพื้นที่จำกัด</p>
							<blockquote class="blockquote mt-5 mb-1">
								<h3 class="card-title"></h3>
								<footer class="blockquote-footer">สเปคคูลลิ่งทาวเวอร์ แบบ Cross Flow (ทรงเหลี่ยม)</footer>
							</blockquote>
							<ul>
								<li><a href="/static/pdf/csp_100.pdf" target="_blank">Cooling Tower CSP-100 Rt</a></li>
								<li><a href="/static/pdf/csp_150.pdf" target="_blank">Cooling Tower CSP-150 Rt</a></li>
								<li><a href="/static/pdf/csp_200.pdf" target="_blank">Cooling Tower CSP-200 Rt</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="row">
					<div class="col-12 col-xl-4 d-flex justify-content-center align-items-center">
						<img loading="lazy" class="img-fluid" src="/static/images/product/cooling_tower_circle.png" alt="คูลลิ่งทาวเวอร์ทรงกลม">
					</div>
					<div class="col-12 col-xl-8 d-flex align-items-center">
						<div class="card-body">
							<h2 class="card-title">คูลลิ่งทาวเวอร์ แบบ Counter Flow (ทรงกลม)</h2>
							<p>ใช้หลักการแลกเปลี่ยนความร้อนระหว่างน้ำกับอากาศแบบสวนทางกันในแนวดิ่ง จึงทำให้มีประสิทธิภาพในการระบายความร้อนสูง แต่จะใช้พื้นที่ในการติดตั้งมากกว่าแบบ Cross Flow (ทรงเหลี่ยม)</p>
							<blockquote class="blockquote mt-5 mb-1">
								<h3 class="card-title"></h3>
								<footer class="blockquote-footer">สเปคคูลลิ่งทาวเวอร์ แบบ Counter Flow (ทรงกลม)</footer>
							</blockquote>
							<ul>
								<li><a href="/static/pdf/csp.pdf" target="_blank">Cooling Tower CSP</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="col-12">
	<div class="card">
		<h2 class="card-header">อะไหล่และอุปกรณ์</h2>
		<div class="card-body">
			<div class="row gx-1">
				<div class="col-6 col-sm-4 col-xl-2">
					<figure class="figure vstack mb-3 mb-xl-0">
						<img loading="lazy" class="img-contain figure-img img-fluid rounded-1 border" src="/static/images/product/fan.jpg" alt="Fan Fiberglass">
						<figcaption class="figure-caption text-center">Fan Fiberglass</figcaption>
					</figure>
				</div>
				<div class="col-6 col-sm-4 col-xl-2">
					<figure class="figure vstack mb-3 mb-xl-0">
						<img loading="lazy" class="img-contain figure-img img-fluid rounded-1 border" src="/static/images/product/sprinkler.jpg" alt="Sprinkler Head">
						<figcaption class="figure-caption text-center">Sprinkler Head</figcaption>
					</figure>
				</div>
				<div class="col-6 col-sm-4 col-xl-2">
					<figure class="figure vstack mb-3 mb-xl-0">
						<img loading="lazy" class="img-contain figure-img img-fluid rounded-1 border" src="/static/images/product/filling.jpg" alt="ฟิลลิ่ง">
						<figcaption class="figure-caption text-center">ฟิลลิ่ง</figcaption>
					</figure>
				</div>
				<div class="col-6 col-sm-4 col-xl-2">
					<figure class="figure vstack mb-3 mb-xl-0">
						<img loading="lazy" class="img-contain figure-img img-fluid rounded-1 border" src="/static/images/product/pvc_filling.jpg" alt="PVC ฟิลลิ่ง">
						<figcaption class="figure-caption text-center">PVC ฟิลลิ่ง</figcaption>
					</figure>
				</div>
				<div class="col-6 col-sm-4 col-xl-2">
					<figure class="figure vstack mb-3 mb-xl-0">
						<img loading="lazy" class="img-contain figure-img img-fluid rounded-1 border" src="/static/images/product/chemical_1.jpg" alt="เคมีน้ำยา">
						<figcaption class="figure-caption text-center">เคมีน้ำยา</figcaption>
					</figure>
				</div>
				<div class="col-6 col-sm-4 col-xl-2">
					<figure class="figure vstack mb-3 mb-xl-0">
						<img loading="lazy" class="img-contain figure-img img-fluid rounded-1 border" src="/static/images/product/chemical_2.jpg" alt="เคมีน้ำยา">
						<figcaption class="figure-caption text-center">เคมีน้ำยา</figcaption>
					</figure>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
CoolingComponent::contact();
?>
