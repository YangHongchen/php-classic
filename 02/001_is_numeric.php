<?php

	$num = '5,100';
	$res = 'no';
	if (is_numeric($num)) {
		$res = 'yes';
	}
	echo "带千分位的数字：$num 是数字吗？<br>答案：".$res;


	echo "<hr>";
	// 用参数，去除千分位
	$num = str_replace(',', '', $num);
	$res = 'no';
	if (is_numeric($num)) {
		$res = 'yes';
	}
	echo "<br>BU带千分位的数字：$num 是数字吗？<br>答案：".$res;

