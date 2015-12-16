<?php

	// 
	$sales = array(
		array('Northeast','2015-01-01','2015-12-31',12.12),
		array('Southeast','2015-01-01','2015-12-31',19.18),
		array('Southeast','2015-01-01','2015-12-31',32.12),
		array('Northeast','2015-01-01','2015-12-31',22.33),
		array('Southeast','2015-01-01','2015-12-31',15.22),
		array('Northeast','2015-01-01','2015-12-31',45.57),
		array('Northeast','2015-01-01','2015-12-31',21.54)
	);
	$fh = fopen('php://output', 'w');
	foreach ($sales as $i => $sale_line) {
		if (fputcsv($fh, $sale_line) === false) {
			die('写入数据失败');
		}
	}
	fclose($fh) or die('关闭文件流失败');
	// 如果PHP的缓存没有开启，需要我们手动开启
	ob_start();
	// 获取缓存内容
	$output = ob_get_contents();
	// 清空缓存
	ob_end_clean();