<?php

	// 将字母全改为大写
	$lowercase = 'abcdef';
	echo strtoupper($lowercase);

	echo "<br>";
	// 将字母全改为小写
	$uppercase ='ABCDEF';
	echo strtolower($uppercase);

	echo "<br>";
	// 英文的首字母大写
	$word = '1 good';
	echo ucfirst($word);

	echo "<br>";
	// ucwords
	$words = 'I am a good boy';
	echo ucwords($words);

	