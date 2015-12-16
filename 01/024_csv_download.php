<?php
	// 可下载的CSV程序
	// 结合使用header() 函数，改变PHP程序输出的内容类型。
	// 使用fputcsv() 函数完成数据格式化，将CSV文件发送到浏览器，并自动转交给一个电子表格程序
		
	// 为fputcsv打开文件句柄
	$output = fopen("php://output", 'w') or die('can not open php://output');
	$total = 0 ;
	$datas = array(
		array('East','2015-01-01','2015-12-31',2300.22),
		array('West','2015-01-01','2015-12-31',1245.54),
		array('South','2015-01-01','2015-12-31',4567.43),
		array('North','2015-01-01','2015-12-31',7512.97)
	);
	// 告诉浏览器，返回类型是CSV
	header('Content-Type:application/csv');
	header('Content-Disposition:attachment;filename="save.csv"');
	// print header now 
	fputcsv($output, array("Region",'StartDate','End Date','Amount'));
	foreach ($datas as $data) {
		fputcsv($output, $data);
		$total += $data[3];
	}
	fputcsv($output,array("All Regions", "--","--",$total));
	fclose($output) or die ('无法关闭！');
