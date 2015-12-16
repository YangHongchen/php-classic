<?php

echo "<hr>";
// 如果需要一个Perl兼容的正则表达式描述分隔符，则要使用preg_split()
// array preg_split ( string pattern, string subject [, int limit [, int flags]] )
// limit 如果指定了 limit，则最多返回 limit 个子串，如果 limit 是 -1，则意味着没有限制
// flags 可以是下列标记的任意组合（用按位或运算符 | 组合）： 
// PREG_SPLIT_NO_EMPTY: 如果设定了本标记，则 preg_split() 只返回非空的成分。 
// PREG_SPLIT_DELIM_CAPTURE: 如果设定了本标记，定界符模式中的括号表达式也会被捕获并返回。本标记添加于 PHP 4.0.5。 
// PREG_SPLIT_OFFSET_CAPTURE: 如果设定了本标记，如果设定本标记，对每个出现的匹配结果也同时返回其附属的字符串偏移量。注意这改变了返回的数组的值，使其中的每个单元也是一个数组，其中第一项为匹配字符串，第二项为其在 subject 中的偏移量。本标记自 PHP 4.3.0 起可用。 

$words = "my day 1.get up; 2.dress up; 3.have breakfirst;";
$wordsArr = preg_split('/\d\./', $words);
echo "<pre>";
print_r($wordsArr);

echo "<hr>";

$math = '3 + 2 / 9 - 7';
$stack = preg_split('/ *([+\-*\/]) */', $math,-1, PREG_SPLIT_DELIM_CAPTURE);
echo "<pre>";
print_r($stack);