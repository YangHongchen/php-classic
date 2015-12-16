<?php

	// substr($string,$start,$length);
	
	// 如果$start为正数，则下标从左往右，如果为负数则从右往左
	// 如果忽略$length,则取从$start开始到元字符末尾的子串
	// 如果start大于字符串长度，则会返回false
	// 如果start为负数，且值超过了字符串长度，那$start会被当作0来处理
	// 如果length为负数，substr会从字符串末尾倒数来确定子字符串到哪里结束
	
	$str = "I Love You";
	// 截取下标从2开始，长度为5的字符，返回结果为Love
	$sub_str = substr($str,2,5);

	// 截取下标从2到字符尾部的字符
	$sub_str2 = substr($str,2);
	echo "截取下标从2开始，长度为5的字符:";
	echo $sub_str;

	echo "<br>截取下标从2到字符尾部的字符：";
	echo $sub_str2;

	echo "<br>start为负数:";
	echo substr($str,-1,2);

	echo "<br>length为负数:";
	echo substr($str, 0,-2);
