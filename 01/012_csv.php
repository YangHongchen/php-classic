<?php
	
// 将数组中的数据写入到CSV文件
$sales = array(
		array('Northeast','2015-01-01','2015-12-31',12.12),
		array('Southeast','2015-01-01','2015-12-31',19.18),
		array('Southeast','2015-01-01','2015-12-31',32.12),
		array('Northeast','2015-01-01','2015-12-31',22.33),
		array('Southeast','2015-01-01','2015-12-31',15.22),
		array('Northeast','2015-01-01','2015-12-31',45.57),
		array('Northeast','2015-01-01','2015-12-31',21.54),
	);

$fileName = './sales.csv';
$fpath = fopen($fileName, 'w')or die("找不到文件");
foreach ($sales as $i => $sale) {
	if (fputcsv($fpath, $sale)===false) {
		die("无法写入数据");
	}
}
fclose($fpath) or die('无法关闭文件流！');
