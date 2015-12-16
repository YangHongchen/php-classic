<?php
	
	echo "<h1>生成固定宽度字段数据：(用其他字段填充)</h1>";

	$books = array(
		array('Elmer Gantry','Sinclair Lewis',1927),
		array('The Java Programing','Yangc Bruce',1997),
		array('Angular Js','Google Project',2013),
		array('The Parsifal Mosaic','William Styrom',1979)
	);

	foreach ($books as $i => $book) {
		$title = str_pad(substr($book[0],0,25), 25,' ');
		$author = str_pad(substr($book[1],0,14), 14,' ');
		$time = str_pad(substr($book[2],0,4), 4,' ');
		echo $title."\t".$author."\t".$time."<br>";
		file_put_contents('./data.txt', $title."\t".$author."\t".$time."\n\r",FILE_APPEND);
	}

	// str_pad 

	// str_pad($input, $pad_length,$pad_char);
	echo "<hr>";
	echo "<pre>";
	echo str_pad('abc', 26,'*');
