<?php
// 带权重值的随机程序（抽奖）  
function pc_rand_weighted($weights){
    $total = 0 ;
    foreach ($weights as $i => $weight) {
        $total += $weight;
        $distribution[$i] = $total ;
    }	
    $rand = mt_rand(0,$total-1);
    foreach ($distribution as $nums => $weights) {
        // 控制概率的关键
        if ($rand < $weights) {
            return $nums;
        }
    }
}
	
// 权重配置
$weights= array(
    '一等奖'=>2,
    '二等奖'=>10,
    '三等奖'=>50,
    '未中奖'=>1000,
    );

$res = pc_rand_weighted($weights);

echo $res;