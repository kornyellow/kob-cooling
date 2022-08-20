<?php

namespace contents;

use libraries\korn\client\KornHeader;
use libraries\cooling\CoolingComponent;

KornHeader::constructHeader('ผลงาน');

$works = [
	['งานติดตั้งคูลลิ่งกลม', 'cooling-circle-install', 4],
	['งานติดตั้งคูลลิ่งเหลี่ยม', 'cooling-square-install', 6],
	['งานติดตั้งฮูต', 'hood-install', 4],
	['งานเปลี่ยนโครงสร้างช่วงล่างคูลลิ่ง', 'lower-part-cooling', 4],
	['งานโอเวอร์ฮอนมอเตอร์คูลลิ่ง', 'overhorn-motor-cooling', 6],
	['งานเปลี่ยนท่อน้ำคูลลิ่ง', 'change-water-pipe', 4],
	['งานเปลี่ยนเรซิน', 'change-resin', 4],
	['งานเปลี่ยนเพรสเชอร์รีรีฟวาล์ว', 'change-pressor-valve', 4],
	['งานล้างฟิล', 'fill-cleaning', 6],
	['โฮมโปร สาขาประชาชื่น งานบิ้วอินเสา', 'homepro-pillar-built-in', 3],
	['โฮมโปร สาขาอมตะ งานรีโนเวทกล่องเสาไม้', 'homepro-pillar-wood-box', 3],
	['โฮมโปร สาขารังสิต งานปูกระเบื้องยาง งานฝ้า', 'homepro-rubber-floor-ceiling', 6],
	['สุภาลัย งานซ่อมฝ้า', 'supalai-fix-ceiling', 3],
	['โรงพยาบาลมิตติเวชศรีนครินทร์ งานทาสีผนัง', 'hospital-srinacarin-wall-paint', 6],
	['โฮมโปร สาขาเพชรเกษม งานเปลี่ยนแผ่นโพลี่ไม้คาน ทาสี', 'homepro-change-poly-paint', 3],
	['โฮมโปร สาขาสุวรรณภูมิ งานปูกระเบื้องห้องน้ำชาย', 'homepro-tile-toilet', 3],
	['โฮมโปร สาขาเพชรเกษม งานวางท่อพักน้ำ', 'homepro-place-water-pipe', 6],
	['โรงพยาบาลกรุงเทพ งานติดวอลเปเปอร์', 'hospital-bangkok-wallpaper', 3],
	['งานระบบท่อบำบัดน้ำเสีย', 'sewer', 3],
];

function renderWorks($works): string {
	$all = '';
	foreach ($works as $work) {
		$header = $work[0];
		$folder = $work[1];
		$amount = $work[2];

		$content = '';
		for ($i = 1; $i <= $amount; $i++) {
			if ($amount == 3) {
				$content .= '
					<div class="col-12 col-sm-4">
						<figure class="figure vstack mb-0">
							<img loading="lazy" class="mb-0 img-contain figure-img img-fluid rounded-1 border" src="/static/images/works/'.$folder.'/'.$i.'.jpg" alt="ภาพที่ '.$i.'">
						</figure>
					</div>
				';
			} else if ($amount == 4) {
				$content .= '
					<div class="col-6 col-xl-3">
						<figure class="figure vstack mb-0">
							<img loading="lazy" class="mb-0 img-contain figure-img img-fluid rounded-1 border" src="/static/images/works/'.$folder.'/'.$i.'.jpg" alt="ภาพที่ '.$i.'">
						</figure>
					</div>
				';
			} else if ($amount == 6) {
				$content .= '
					<div class="col-6 col-sm-4 col-xl-2">
						<figure class="figure vstack mb-0">
							<img loading="lazy" class="mb-0 img-contain figure-img img-fluid rounded-1 border" src="/static/images/works/'.$folder.'/'.$i.'.jpg" alt="ภาพที่ '.$i.'">
						</figure>
					</div>
				';
			}
		}

		$all .= '
			<div class="col-12">
				<div class="card">
					<h2 class="card-header">'.$header.'</h2>
					<div class="row gx-0">'.$content.'</div>
				</div>
			</div>
		';
	}
	return $all;
}


?>

<div class="col-12">
	<div class="card">
		<h1 class="card-header bg-dark text-light">ผลงาน</h1>
		<div class="card-body">
			<p class="card-text">ชำนาญด้านการผลิตคูลลิ่งทาวเวอร์ และบริการที่เป็นเลิศ บริการด้านการล้างคูลลิ่งทาวเวอร์ และงานซ่อมบำรุง งานระบบต่าง ๆ เปลี่ยนอะไหล่ ซ่อมแซมคูลลิ่งทาวเวอร์ โดยทีมช่างและวิศวกรผู้ชำนาญการเป็นเวลานับ 10 ปี ทางเรายินดีและพร้อมให้บริการท่านทุกที่ทุกเวลา</p>
			<div class="row gy-3"><?php echo renderWorks($works) ?></div>
		</div>
	</div>

	<?php
	CoolingComponent::contact();
	?>
