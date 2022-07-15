<?php

namespace libraries\korn;

class KornComponent {
	public static function externalLink(string $href, string $text): string {
		return '<a rel="noopener" title="'.$text.'" href="'.$href.'" target="_blank">'.$text.'</a>';
	}
	public static function internalLink(string $href, string $text): string {
		return '<a title="'.$text.'" href="'.$href.'">'.$text.'</a>';
	}
	public static function image(string $src, string $text): string {
		return '<img alt="'.$text.'" title="'.$text.'" src="'.$src.'" loading="lazy">';
	}
}
