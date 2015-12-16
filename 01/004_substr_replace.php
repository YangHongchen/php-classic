希望用另一个不同的字符串来替换一个子串。<br>
应用场景：对手机号中间四位以 * 代替。
<hr>
<?php
	$str = '13564632787';
	echo substr_replace($str, "****", 4,4);

	echo "<hr>";

	// 未指定length，则会替换从start开始到字符串末尾的所有字符
	echo  substr_replace($str, '*',4);
	echo "<br>";

	// 如果start为负数，则会从右侧开始替换

	// 如果start和length都为0，则替换用的子串则会插入到字符串的开始位置
	echo substr_replace($str, "****", 0,0);

	// 文章末尾 详情

	echo "<hr>";
	$post =" Edit files side by side, or edit two locations in the one file. You can edit with as many rows and columns as you wish.
			Take advwitch Projects in Sublime Text capture the full contents of the workspace, including modified and unsaved files.  ";

	printf('<a href="more.php?id=%id">%s</a>',123,substr_replace($post, "...", 100));