<?php

	echo "<h1>解析固定宽度的数据</h1>";
	$fh = fopen("./data.txt", 'r');
	
	// fgets -- 从文件指针中读取一行
	while($line = fgets($fh,1024)){
		$field[0] = substr($line,0,25);
		$field[1] = substr($line,25,15);
		$field[2] = substr($line,42,4);
		$fields[]= $field;
	}
	echo "<pre>";
	print_r($fields);
