<?php

namespace contents;

use libraries\korn\client\KornHeader;
use libraries\cooling\CoolingComponent;

KornHeader::constructHeader(
	'ติดต่อเรา',
	'หากสนใจหรือมีคำถาม คุณลูกค้าสามารถติดต่อมาได้ในช่องทางดังกล่าว kobcooling.com ยินดีให้บริการทุก ๆ คน',
	'หน้าแสดงช่องทางการติดต่อ'
);

?>

<div class="col-12">
	<div class="card">
		<h1 class="card-header bg-dark text-light">ติดต่อเรา</h1>
		<div class="card-body">
			<p class="card-text">หากสนใจหรือมีคำถาม คุณลูกค้าสามารถติดต่อมาได้ในช่องทางดังกล่าว kobcooling.com ยินดีให้บริการทุก ๆ คน</p>
		</div>
	</div>
</div>

<?php
CoolingComponent::contact();
?>
