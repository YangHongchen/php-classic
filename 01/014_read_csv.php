<style type="text/css">
	
	table{
		border:1px solid #dddddd;
		border-collapse: collapse;
		width:800px;
	}

	table tr td{
		border:1px solid #ddd;
		padding: 10px;
	}
</style>

<?php

	$file_path = './sales.csv';
	$fh = fopen($file_path, 'r') or die('无法读取文件');
	print("<table>");
	while ($csv_line = fgetcsv($fh,200)) {
		print("<tr>");
		for ($i=0,$j=count($csv_line); $i < $j ; $i++) { 
			print('<td>'.htmlentities($csv_line[$i]).'</td>');
		}
		print('</tr>');
	}
	print('</table>');
	fclose($fh) or die('关闭文件流失败');