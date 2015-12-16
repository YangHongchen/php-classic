<?php

	header('content-type:text/html;charset=utf-8');
	// 希望解析一个字符串，其中包含编码为二进制结构的值。或者将值编码为字符串

	// pack 函数

	$packed = pack('S4',1974,106,28225,32725);

	$nums = unpack('S4', $packed);

	var_dump($packed);
	echo "<hr>";
	var_dump($nums) ;