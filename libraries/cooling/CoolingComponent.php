<?php

namespace libraries\cooling;

use libraries\korn\KornComponent;

class CoolingComponent {
	public static function products(): void {
		echo '
		';
	}
	public static function services(): void {
		echo '
			<section class="section">
				<h2>บริการหลักของเรา</h2>
				<div class="cooling-service">
					<article>
						<img class="img" src="/static/images/services/parts.jpg" alt="งานอะไหล่คูลลิ่ง" title="งานอะไหล่คูลลิ่ง">
						<h3>งานอะไหล่คูลลิ่ง</h3>
					</article>
					<article>
						<img class="img" src="/static/images/services/structure_change.jpg" alt="งานปรับเปลี่ยนโครงสร้างคูลลิ่ง" title="งานปรับเปลี่ยนโครงสร้างคูลลิ่ง">
						<h3>งานปรับเปลี่ยนโครงสร้างคูลลิ่ง</h3>
					</article>
					<article>
						<img class="img" src="/static/images/services/pipe_paint.jpg" alt="งานทำสีท่อน้ำ / ท่อคูลลิ่ง" title="งานทำสีท่อน้ำ / ท่อคูลลิ่ง">
						<h3>งานทำสีท่อน้ำ / ท่อคูลลิ่ง</h3>
					</article>
					<article>
						<img class="img" src="/static/images/services/circle_filling.jpg" alt="งานเปลี่ยนฟิลกลม" title="งานเปลี่ยนฟิลกลม">
						<h3>งานเปลี่ยนฟิลกลม</h3>
					</article>
					<article>
						<img class="img" src="/static/images/services/square_filling.jpg" alt="งานเปลี่ยนฟิลเหลี่ยม" title="งานเปลี่ยนฟิลเหลี่ยม">
						<h3>งานเปลี่ยนฟิลเหลี่ยม</h3>
					</article>
					<article>
						<img class="img" src="/static/images/services/cleaning.jpg" alt="งานล้างคูลลิ่ง" title="งานล้างคูลลิ่ง">
						<h3>งานล้างคูลลิ่ง</h3>
					</article>
					<article>
						<img class="img" src="/static/images/services/condensor.jpg" alt="งานล้างคอนเดนเซอร์" title="งานล้างคอนเดนเซอร์">
						<h3>งานล้างคอนเดนเซอร์</h3>
					</article>
					<article>
						<img class="img" src="/static/images/services/head_motor_frame.jpg" alt="งานเปลี่ยนหัวเฮดและมอเตอร์เฟรม" title="งานเปลี่ยนหัวเฮดและมอเตอร์เฟรม">
						<h3>งานเปลี่ยนเฮดมอเตอร์เฟรม</h3>
					</article>
				</div>
			</section>
		';
	}
	public static function chemical(): void {
		echo '
			<section class="section">
				<h2>เคมีภัณฑ์</h2>
				<div class="cooling-chemical">
					'.KornComponent::image('/static/images/chemical/203.jpg', 'L-203').'
					'.KornComponent::image('/static/images/chemical/207.jpg', 'L-207').'
					'.KornComponent::image('/static/images/chemical/211.jpg', 'L-211').'
					'.KornComponent::image('/static/images/chemical/215.jpg', 'L-215').'
					'.KornComponent::image('/static/images/chemical/301.jpg', 'L-301').'
					'.KornComponent::image('/static/images/chemical/708.jpg', 'L-708').'
					'.KornComponent::image('/static/images/chemical/710.jpg', 'L-710').'
					'.KornComponent::image('/static/images/chemical/711.jpg', 'L-711').'
				</div>
			</section>
		';
	}
	public static function works(): void {
		echo '
			<section class="section">
				<h2>ผลงาน</h2>
				<div class="works">
					<article>
						<h3>โฮมโปร สาขาประชาชื่น งานบิ้วอินเสา</h3>
						<div>
							'.KornComponent::image('/static/images/works/homepro-pillar-built-in/1.jpg', 'โฮมโปร สาขาประชาชื่น งานบิ้วอินเสา').'
							'.KornComponent::image('/static/images/works/homepro-pillar-built-in/2.jpg', 'โฮมโปร สาขาประชาชื่น งานบิ้วอินเสา').'
							'.KornComponent::image('/static/images/works/homepro-pillar-built-in/3.jpg', 'โฮมโปร สาขาประชาชื่น งานบิ้วอินเสา').'
						</div>
					</article>
					<article>
						<h3>โฮมโปร สาขาอมตะ งานรีโนเวทกล่องเสาไม้</h3>
						<div>
							'.KornComponent::image('/static/images/works/homepro-pillar-wood-box/1.jpg', 'โฮมโปร สาขาอมตะ งานรีโนเวทกล่องเสาไม้').'
							'.KornComponent::image('/static/images/works/homepro-pillar-wood-box/2.jpg', 'โฮมโปร สาขาอมตะ งานรีโนเวทกล่องเสาไม้').'
							'.KornComponent::image('/static/images/works/homepro-pillar-wood-box/3.jpg', 'โฮมโปร สาขาอมตะ งานรีโนเวทกล่องเสาไม้').'
						</div>
					</article>
					<article>
						<h3>โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า</h3>
						<div>
							'.KornComponent::image('/static/images/works/homepro-rubber-floor-ceiling/1.jpg', 'โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า').'
							'.KornComponent::image('/static/images/works/homepro-rubber-floor-ceiling/2.jpg', 'โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า').'
							'.KornComponent::image('/static/images/works/homepro-rubber-floor-ceiling/3.jpg', 'โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า').'
							'.KornComponent::image('/static/images/works/homepro-rubber-floor-ceiling/4.jpg', 'โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า').'
							'.KornComponent::image('/static/images/works/homepro-rubber-floor-ceiling/5.jpg', 'โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า').'
							'.KornComponent::image('/static/images/works/homepro-rubber-floor-ceiling/6.jpg', 'โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า').'
						</div>
					</article>
					<article>
						<h3>สุภาลัย งานซ่อมฝ้า</h3>
						<div>
							'.KornComponent::image('/static/images/works/supalai-fix-ceiling/1.jpg', 'สุภาลัย งานซ่อมฝ้า').'
							'.KornComponent::image('/static/images/works/supalai-fix-ceiling/2.jpg', 'สุภาลัย งานซ่อมฝ้า').'
							'.KornComponent::image('/static/images/works/supalai-fix-ceiling/3.jpg', 'สุภาลัย งานซ่อมฝ้า').'
						</div>
					</article>
					<article>
						<h3>โรงพยาบาลมิตติเวชศรีนครินทร์ งานทาสีผนัง</h3>
						<div>
							'.KornComponent::image('/static/images/works/hospital-srinacarin-wall-paint/1.jpg', 'โรงพยาบาล สมิตติเวชศรีนครินทร์ งานทาสีผนัง').'
							'.KornComponent::image('/static/images/works/hospital-srinacarin-wall-paint/2.jpg', 'โรงพยาบาล สมิตติเวชศรีนครินทร์ งานทาสีผนัง').'
							'.KornComponent::image('/static/images/works/hospital-srinacarin-wall-paint/3.jpg', 'โรงพยาบาล สมิตติเวชศรีนครินทร์ งานทาสีผนัง').'
							'.KornComponent::image('/static/images/works/hospital-srinacarin-wall-paint/4.jpg', 'โรงพยาบาล สมิตติเวชศรีนครินทร์ งานทาสีผนัง').'
							'.KornComponent::image('/static/images/works/hospital-srinacarin-wall-paint/5.jpg', 'โรงพยาบาล สมิตติเวชศรีนครินทร์ งานทาสีผนัง').'
							'.KornComponent::image('/static/images/works/hospital-srinacarin-wall-paint/6.jpg', 'โรงพยาบาล สมิตติเวชศรีนครินทร์ งานทาสีผนัง').'
						</div>
					</article>
					<article>
						<h3>โฮมโปร สาขาเพชรเกษม งานเปลี่ยนแผ่นโพลี่ไม้คาน ทาสี</h3>
						<div>
							'.KornComponent::image('/static/images/works/homepro-change-poly-paint/1.jpg', 'โฮมโปร สาขาเพชรเกษม งานเปลี่ยนแผ่นโพลี่ไม้คาน ทาสี').'
							'.KornComponent::image('/static/images/works/homepro-change-poly-paint/2.jpg', 'โฮมโปร สาขาเพชรเกษม งานเปลี่ยนแผ่นโพลี่ไม้คาน ทาสี').'
							'.KornComponent::image('/static/images/works/homepro-change-poly-paint/3.jpg', 'โฮมโปร สาขาเพชรเกษม งานเปลี่ยนแผ่นโพลี่ไม้คาน ทาสี').'
						</div>
					</article>
					<article>
						<h3>โฮมโปร สาขาสุวรรณภูมิ งานปูกระเบื้องห้องน้ำชาย</h3>
						<div>
							'.KornComponent::image('/static/images/works/homepro-tile-toilet/1.jpg', 'โฮมโปร สาขาสุวรรณภูมิ งานปูกระเบื้องห้องน้ำชาย').'
							'.KornComponent::image('/static/images/works/homepro-tile-toilet/2.jpg', 'โฮมโปร สาขาสุวรรณภูมิ งานปูกระเบื้องห้องน้ำชาย').'
							'.KornComponent::image('/static/images/works/homepro-tile-toilet/3.jpg', 'โฮมโปร สาขาสุวรรณภูมิ งานปูกระเบื้องห้องน้ำชาย').'
						</div>
					</article>
					<article>
						<h3>โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ</h3>
						<div>
							'.KornComponent::image('/static/images/works/homepro-place-water-pipe/1.jpeg', 'โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ').'
							'.KornComponent::image('/static/images/works/homepro-place-water-pipe/2.jpeg', 'โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ').'
							'.KornComponent::image('/static/images/works/homepro-place-water-pipe/3.jpeg', 'โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ').'
							'.KornComponent::image('/static/images/works/homepro-place-water-pipe/4.jpeg', 'โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ').'
							'.KornComponent::image('/static/images/works/homepro-place-water-pipe/5.jpeg', 'โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ').'
							'.KornComponent::image('/static/images/works/homepro-place-water-pipe/6.jpeg', 'โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ').'
						</div>
					</article>
					<article>
						<h3>โรงพยาบาลกรุงเทพ งานติดวอลเปเปอร์</h3>
						<div>
							'.KornComponent::image('/static/images/works/hospital-bangkok-wallpaper/1.jpeg', 'โรงพยาบาลกรุงเทพ งานติดวอลเปเปอร์').'
							'.KornComponent::image('/static/images/works/hospital-bangkok-wallpaper/2.jpeg', 'โรงพยาบาลกรุงเทพ งานติดวอลเปเปอร์').'
							'.KornComponent::image('/static/images/works/hospital-bangkok-wallpaper/3.jpeg', 'โรงพยาบาลกรุงเทพ งานติดวอลเปเปอร์').'
						</div>
					</article>
					<article>
						<h3>งานระบบท่อบำบัดน้ำเสีย</h3>
						<div>
							'.KornComponent::image('/static/images/works/sewer/1.jpeg', 'งานระบบท่อบำบัดน้ำเสีย').'
							'.KornComponent::image('/static/images/works/sewer/2.jpeg', 'งานระบบท่อบำบัดน้ำเสีย').'
							'.KornComponent::image('/static/images/works/sewer/3.jpeg', 'งานระบบท่อบำบัดน้ำเสีย').'
						</div>
					</article>
				</div>
			</section>
		';
	}
	public static function contact(): void {
		echo '
			<section class="section contact-wrapper">
				<div class="line-qrcode">
					<img src="/static/images/contact/line_qrcode.jpg" alt="คิวอาร์โค้ดไลน์" title="คิวอาร์โค้ดไลน์" width="300">
				</div>
				<div class="contact">
					<h2 class="logo">
						<img class="img" src="/static/favicons/favicon-32.png" alt="coolingbykob.com" title="coolingbykob.com">
						<span class="main">coolingbykob.com</span>
					</h2>
					<table class="contact-data">
						<tr>
							<td class="head"><h3>ติดต่อกับ :</h3></td>
							<td class="content"><p>คุณสุคนธ์ สุโขพล (คุณกบ)</p></td>
						</tr>
						<tr>
							<td class="head"><h3>เบอร์โทรศัพท์ :</h3></td>
							<td class="content"><p>085-982-3898</p></td>
						</tr>
						<tr>
							<td class="head"><h3>ไอดีไลน์ :</h3></td>
							<td class="content"><p>kahluaandcupcake</p></td>
						</tr>
						<tr>
							<td class="head"><h3>เฟสบุ๊คเพจ :</h3></td>
							<td class="content"><p><a class="link" target="_blank" href="https://www.facebook.com/%E0%B8%9C%E0%B8%A5%E0%B8%B4%E0%B8%95%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%88%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%A2Cooling-Tower-%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%9B%E0%B8%A3%E0%B8%B1%E0%B8%9A%E0%B8%9B%E0%B8%A3%E0%B8%B8%E0%B8%87%E0%B9%82%E0%B8%84%E0%B8%A3%E0%B8%87%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B8%84%E0%B8%B9%E0%B8%A5%E0%B8%A5%E0%B8%B4%E0%B9%88%E0%B8%87-%E0%B9%80%E0%B8%9B%E0%B8%A5%E0%B8%B5%E0%B9%88%E0%B8%A2%E0%B8%99%E0%B8%9F%E0%B8%B4%E0%B8%A5-111540363537208" rel="noopener" title="เฟสบุ๊คเพจ">ผลิตและจำหน่าย Cooling Tower งานปรับปรุงโครงสร้างคูลลิ่ง</a></p></td>
					</table>
				</div>
			</section>
		';
	}
}
