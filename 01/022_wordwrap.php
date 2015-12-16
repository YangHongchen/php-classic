<?php
	
	// 使文本在指定长度自动换行

	// 默认75个字节才会换行，默认换行符 \r\n
	$post = 'When I was in high school, I felt so bored about the English class, because I did not understand it. Miss Li was my English teacher, she found my attitude to her class. One day, when the class was over, she asked me to her office. She did not blame me for sleeping in her class, instead, she smiled and asked me the opinion about her class. I said her class was a little  boring and I thought she would be angry. Miss Li smiled and agreed with me. She asked me to give some opinion. I was so surprised that she was so kind. Miss Li improved her class and I became very active.';
	print "<pre>".wordwrap($post)."</pre>";

	// 自定义固定长度
	echo "<hr>";
	print "<pre>".wordwrap($post,45)."</pre>";

	// 自定义换行符
	echo "<hr>";
	print "<pre>".wordwrap($post,45,"\n\n")."</pre>";


	// 第四个参数：用于处理超出指定长度的单词。
	// 1：会对超出指定长度的单词自动换行。
	// 否则：会越过指定的行长度，而保留原有字符
	echo "<hr>";
	print "<pre>".wordwrap($post,45,"\n\n")."</pre>";