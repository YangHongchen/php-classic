<?php
	// 解析固定宽度字段数据记录
	function fixed_expand_data($fields=array() ,$data=array()) {
		if (!empty($data)) {
			$arr = array();
			for ($i=0,$j=count($data); $i <$j ; $i++) { 
				$line_pos = 0 ;
				foreach ($fields as $field_name => $field_length) {
					$arr[$i][$field_name]= trim(substr($data[$i],$line_pos,$field_length));
					$line_pos += $field_length;
				}
			}
		}else{
			echo "数据源为空";
		}
		return $arr;
	}

	// 自定义字段值和长度
	$bookFields = array(
		'title'=>25,
		'author'=>15,
		'date'=>4
	);
	// 模拟从文件读入的数据
	$books = array(
		'Elmer Gantry             	Sinclair Lewis	1927',
		'The Java Programing      	Yangc Bruce   	1997',
		'Angular Js               	Google Project	2013',
		'The Parsifal Mosaic      	William Styrom	1979'
	);
	// 调用自定义方法
	$book_array = fixed_expand_data($bookFields,$books);

	echo "<pre>";
	print_r($book_array);