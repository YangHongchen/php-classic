<?php

	// 希望从字符串开头或者末尾删除空白符
	// ltrim 去除左侧空格
	// rtrim 去除右侧空格
	// trim  去除两侧空格

	// 删除左侧空白符
	$lstr = ' I amd YangC';
	$rstr = 'I amd YangC ';
	$str  = ' I amd YangC ';

	echo "去空格前：";
	var_dump($lstr);
	echo "<br>";
	echo "去空格后：";
	var_dump(ltrim($lstr)) ;

	echo "<hr>";
	echo "去空格前：";
	var_dump($rstr);
	echo "<br>";
	echo "去空格后：";
	var_dump(rtrim($rstr));
	
	echo "<hr>";
	echo "去空格前：";
	var_dump($str);
	echo "<br>";
	echo "去空格后：";
	var_dump(trim($str)) ;


	// 作用2：删除指定字符
	echo "<h3>trim 还可以删除指定字符，不仅仅局限于空格</h3>";
	echo '<code>trim($string,$delStr</code>)<BR>';
	echo '参数：$delStr 就是指定要删除的字符<BR>';

	// 实例1：删除字符串中的分号（;）
	echo trim('SELECT * FROM USERS ;' ,';')."<br>";

	// 实例2：删除字符串两侧的数字和空格
	// 注意0..9表示0到9的数字
	echo trim('12 I am 10 years old now ,and this year is 2015 !',' 0..9');


