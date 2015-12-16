<?php

	// 步骤1：打开文件句柄
	$output = fopen("php://output", 'w');

	// 设置换回头信息
	header('Content-Type:application/csv');
	header('Content-Disposition:attachment;filename="download.csv"');

	// 想文件中写入内容
	fputcsv($output, array('Menu1','Menu2','Menu3'));

	// 关闭文件流，并输出到客户端（浏览器）
	fclose($output) or die ('can not close output !!!');