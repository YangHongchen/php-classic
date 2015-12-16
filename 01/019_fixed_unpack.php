<?php
	// 解析固定宽度字段数据记录 unpack

	function fixed_width_unpack($format_str,$data){
		$arr = array();
		for ($i=0,$j=count($data); $i <$j ; $i++) { 
			$arr[$i] = unpack($format_str, $data[$i]);
		}
		return $arr;
	}

	$books = array(
		'Elmer Gantry             	Sinclair Lewis	1927',
		'The Java Programing      	Yangc Bruce   	1997',
		'Angular Js               	Google Project	2013',
		'The Parsifal Mosaic      	William Styrom	1979'
	);

	$res = fixed_width_unpack('A25title/A15author/A5time',$books);

	echo "<pre>";
	print_r($res);
