<?php

	function str_rand($length=0,$character = '0123456789abcdefghijklmnopqrstuvwyzABCDEFGHIJKLMNOPQRSTUVWXYZ'){
		if (!is_int($length) || $length<0) {
			return false;
		}
		$character_length = strlen($character)-1;
		$str = '';
		for ($i=$length; $i >0; $i--) { 
			$str.= $character[mt_rand(0,$character_length-1)];
		}
		echo  $str ;
	}
	str_rand(10);