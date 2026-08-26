<?php

if (!function_exists('wccartpdf_dd')) {
	function wccartpdf_dd(...$args)
	{
		if (function_exists('dump')) {
			dump(...$args);
		} else {
			var_dump(...$args);
		}
		die;
	}
}
