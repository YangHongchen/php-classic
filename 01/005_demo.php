<?php

	// 使用for循环处理字符串中的各个字节。
	// 实例：统计一个字符串中元字符的个数。
	$str = "This weekend , I'm going to shopping for a pet chicken ! ";
	$vowels = 0 ;
	for ($i=0,$j = strlen($str); $i < $j ; $i++) { 
		if (strstr('aeiouAEIOU',$str[$i])) {
			$vowels++;
		}
	}
	echo "字符串:".$str."中，元字符有：".$vowels."个";
