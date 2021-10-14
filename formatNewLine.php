<?php

function fortmatNewLine(){
    $content = file_get_contents('1.txt');
    //将换行去掉
    $content = str_replace("\n", '', $content);
    //根据首行缩进增加换行
    $content = str_replace("\t\t", "\n\n\t\t", $content);
    //移除开头的多余换行
    $content = trim($content, "\n");
    file_put_contents('2.txt', $content);
}