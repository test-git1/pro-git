<?php
	$key = "PSY";
	$micro = microtime(true);
	if($key == "PSD"){
		$arr["PSD"];
	}else if( $key == "PSA"){
		$arr["PSA"];
	}else if( $key == "PSW"){
		$arr["PSW"];
	}else if( $key == "PSQ"){
		$arr["PSQ"];
	}else if( $key == "PSE"){
		$arr["PSE"];
	}else if( $key == "PST"){
		$arr["PST"];
	}else if( $key == "PSY"){
		$arr["PSY"];
	}
	echo microtime(true)-$micro;
	echo "\n";

	$micro = microtime(true);
	$arr = ['PAS','PAD','PSW','PSQ','PSE','PST','PSY'];
	$arr["PSY"];
	echo microtime(true)-$micro;
	echo "\n";