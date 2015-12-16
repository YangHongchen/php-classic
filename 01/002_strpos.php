<?php

	// 查看一个字符串中是否包含特定子串
	$email = '12312#￥3@qq.com';
	// 返回结果为6，即：@字符在$email变量第一次出现的位置
	echo strpos($email, "#￥");
