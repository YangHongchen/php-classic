<?php

	echo "<h1>生成固定宽度字段数据：</h1>";

	$books = array(
		array('Elmer Gantry','Sinclair Lewis',1927),
		array('The Java Programing','Yangc Bruce',1997),
		array('Angular Js','Google Project',2013),
		array('The Parsifal Mosaic','William Styrom',1979)
	);

	// A25 A15 A4 
	foreach ($books as $i => $book) {
		// A25 A15 A4 分别代表固定长度为25，15，4的字符串，不足用空格填充
		var_dump(pack('A25A15A4',$book[0],$book[1],$book[2]).'<br>');
		echo '书名长度:'.strlen(pack('A25',$book[0])).'<br>';
		echo '作者长度:'.strlen(pack('A15',$book[1])).'<br>';
		echo '时间长度:'.strlen(pack('A4',$book[2])).'<br>';
	}