<?php
	echo "字节反转: ";
	$str  = "Hello World !!!";
	// 按字节反转
	echo strrev($str);

	echo "<hr>";
	echo "单词反转: ";
	// 按单词反转：需要根据单词边界分解字符串，反转这些单词，然后再重新组合
	$string = "Once upon a time there was a turtle";
	$words = explode(" ", $string);
	$words = array_reverse($words);
	$rev_string = implode(' ', $words);
	echo $rev_string;

	// 简介的反转单词的代码
	echo "<hr>";
	echo "最简单的一行代码单词反转:<br> ";
	echo "<code>implode(' ', array_reverse(explode(' ', $string)));</code><br>";
  	echo implode(' ', array_reverse(explode(' ', $string)));
