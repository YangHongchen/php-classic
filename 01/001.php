<?php
	header("content-type:text/html;charset=utf-8");
	echo "PHP中的字符串是字节序列<br>";
	
	echo "PHP中字符串是二进制安全的：字符串可以包含null字节，而且可以根据需要扩展和收缩。
	字符串的大小只受PHP内存的限制。";
	
	
	echo "字符串的三种初始化方式：单引号，双引号，hereDoc";
	echo "单引号：";
	$danyinhao = '我是单引号初始化的。。。';
	
	echo "<br>";
	echo "我是双引号初始化的";
	$shuangyinhao = "我是双引号初始化的！";
	
	echo "hereDoc:";
	$hereDoc = <<<pront
		<h1>我是hereDOC初始化的参数</h1>
pront;
	echo $hereDoc;


	echo "<hr>";
	echo "由于PHP不会检查单引号中的变量，或者任意转义序列，所以采用这种方式简单快捷！<br>";

	echo "测试实例：";
	$dollar = 89.9;
	echo "I went to the store, and I cost \$$dollar <br>";
	echo 'I went to the store, and I cost \$$dollar <br> ';