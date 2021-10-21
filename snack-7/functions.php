<?php

function calcolaMedia($numbs) {
	$sum = 0;
	foreach($numbs as $numb) {
		$sum += $numb;
	}

	return round($sum / count($numbs), 2);
}