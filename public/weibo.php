<?php
header("Content-type: text/html; charset=utf-8");

if($str = file_get_contents("http://s.weibo.com/top/summary?cate=realtimehot")) {
//    $str = mb_convert_encoding($str, 'UTF8','UTF-8');
//    var_dump($str);
    $str = htmlentities($str);
//    var_dump($str);
//    echo str_replace_array('\/');
//    var_dump($str);
    $r_exp = '/<tr (.*?)tr>/isU';
    $r_exp = '/\'class=\\"star_name\\"><a href=\\"\\/weibo\\/(.*?)&Refer=top/';
    $str = str_replace('<div','123',$str);
    print_r($str);

    $a = preg_match_all($r_exp, $str, $r);
    var_dump(print_r($r));
} else {
    echo 'ERROR';
}