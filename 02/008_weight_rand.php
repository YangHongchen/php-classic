<?php

	function weighted_rand($weight_arr){
		$total = 0;
		foreach ($weight_arr as $i => $weight) {
			$total += $weight;
			$distribution[$i] = $total;
		}
		$random = mt_rand(0,$total);
		foreach ($distribution as $i => $item) {
			if ($random < $item) {
				return $i;
			}
		}
	}

	$arr=  array(
		'One'=>10,
		'Two'=>20,
		'Three'=>30,
		'Four'=>40,
	);

	echo weighted_rand($arr);