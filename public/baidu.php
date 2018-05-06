<?php
function getBaiduTop(){
    $opts=array(
        "http"=>array(
            "method"=>"GET",
            "timeout"=>1
        ),
    );
    $context = stream_context_create($opts);
    if($str = file_get_contents("http://top.baidu.com/?qq-pf-to=pcqq.c2c",false,$context)) {
        $str = mb_convert_encoding($str, 'UTF8', 'GB2312');
        $r_exp = '/<ul id=\"hot-list\" class=\"list\">(.*)<\/ul>/isU';

        $a = preg_match_all($r_exp, $str, $r);

        //$result = print_r($r, true);
        //print_r($a);
//        echo "BEGIN:";
        //echo htmlentities($r[1][0]);

        $r_exp = '/<li>\s*<span class=\"(.*)\">(\d*)<\/span>\s*<a target=\"_blank\" title=\"(.*)\" data=\"1\|1\" class=\"list-title\" href="(.*)\" href_top=\"(.*)\">(.*)<\/a>(.*)\s*<\/li>/isU';
        $a = preg_match_all($r_exp, $r[1][0], $s);
        $ret = [];
        //测试输出
        for($t=0;$t<10;$t++){
            //提取指数
            $roule = '/[1-9][0-9]{4,9}/';
            preg_match($roule,$s[7][$t],$a);
            $title = $s[3][$t];
            $src = $s[4][$t];
            $ret[$t]['title'] = $title;
            $ret[$t]['src'] = $src;
            $ret[$t]['point'] = $a;
        }
        return $ret;
        /**
         * 0,li
         * 1,num-top,num-normal
         * 2,number
         * 3,title
         * 4,link
         * 5,未知
         * 6,title
         * 7,指数加链接
         */
    } else {
//        echo 'ERROR';
        return false;
    }
}
getBaiduTop();