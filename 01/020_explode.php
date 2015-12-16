<?php

	// 分解字符串:
	// explode($delimiter,$string,$count)
	// 可以传入$count 指定返回的数组长度，如果$count 小于应返回的长度，那数组最后一个元素将包含虽有余下的字符
	// 如果一个字符串有一个固定的字符分割，则用explode
	$str = "My sentence is not very complicated";
	$wordsArr = explode(' ', $str);

	echo "<pre>";
	print_r($wordsArr);




