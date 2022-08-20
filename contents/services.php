<?php

namespace contents;

use libraries\korn\client\KornHeader;
use libraries\cooling\CoolingComponent;

KornHeader::constructHeader("บริการ");

CoolingComponent::services();
CoolingComponent::contact();
