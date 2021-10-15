<?php

function fortmatNewLineVersion211014(){
    $content = file_get_contents('1.txt');
    //将换行去掉
    $content = str_replace("\n", '', $content);
    //根据首行缩进增加换行
    $content = str_replace("\t\t", "\n\n\t\t", $content);
    //移除开头的多余换行
    $content = trim($content, "\n");
    file_put_contents('2.txt', $content);
}

function fortmatNewLineVersion211015($content){
	file_put_contents('1.txt', $content);
	$path = '1.txt';
	$file = fopen($path, "r") or exit("Unable to open file!");
	$k    = 0;
	while(!feof($file)){
		$line_content = fgets($file);
		$res[] = $line_content;
	}
	foreach ($res as $k => &$v) {
		if($v == "\n") continue;
		if(strstr($v, "\n") && $res[$k+1] != "\n"){
			$v = rtrim($v, "\n");
		}
	}
	$content = implode('', $res);
	return $content;
}