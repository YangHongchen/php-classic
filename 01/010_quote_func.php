<?php

	$arr = array('name' =>'yangc','age'=>27,'addr'=>'HuBei Province ' );
	
	// 必须这样写，不能写成 $arr['name']的形式，否则会报错
	$words = "I am $arr[name]";
	
	// 也可以采用{} 引入更复杂变量的形式,$arr['name']在这种情况下是可以使用的。
	$words_adv = "I am {$arr['name']}";

	echo $words;
	echo "<hr>";
	echo $words_adv;

		
	// hereDoc 的使用
	echo "<hr>";
	$hereDoc = <<<DOC
		Right now the time is <font color='#f00'>
DOC
.strftime('%c').<<<DOC
	,</font> but tomorrow will be ：<font color='#f00'>
DOC
.strftime('%c',time()+86400).'</font>';

echo $hereDoc;