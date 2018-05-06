<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BaiduTopic;
use Illuminate\Support\Facades\DB;

class Homepage extends Controller
{
    /**
     * 显示主页
     */
    function show(){
        $data = [];
        //获取百度数据
        $this -> getBaiduTop();
        $baiduTopics = BaiduTopic::all();
        $baiduTopics = $baiduTopics -> toArray();
        //传入视图
        $data['baiduTopics'] = $baiduTopics;
        //获取新浪数据
        //传入视图
        return view('homepage',$data);
    }
    /**
    * 抓取百度热点排行保存到数据库
    * 成功保存数据库
    * return bool
    */
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
            $r_exp = '/<li>\s*<span class=\"(.*)\">(\d*)<\/span>\s*<a target=\"_blank\" title=\"(.*)\" data=\"1\|1\" class=\"list-title\" href="(.*)\" href_top=\"(.*)\">(.*)<\/a>(.*)\s*<\/li>/isU';
            $a = preg_match_all($r_exp, $r[1][0], $s);
            $ret = [];
            //开启事务
            DB::beginTransaction();
            //清空表
            DB::table('baidu_topics')->delete();
            for($t=0;$t<10;$t++){
                //提取指数
                $roule = '/[1-9][0-9]{4,9}/';
                preg_match($roule,$s[7][$t],$a);
                $title = $s[3][$t];
                $src = $s[4][$t];
                $ret[$t]['title'] = $title;
                $ret[$t]['src'] = $src;
                $ret[$t]['point'] = $a;
                //刷新数据库记录
                $baiduTopic = new BaiduTopic();
                $baiduTopic -> title = $title;
                $baiduTopic -> link = $src;
                $baiduTopic -> index = $a[0];
                $saved = $baiduTopic -> save();
                if(!$saved){
                    DB::rollBack();
                    return false;
                }
            }
            Db::commit();
            return true;
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
            DB::rollBack();
            return false;
        }
    }
    /**
     * 抓取新浪热点排行保存到数据库
     * 成功则保存至数据库
     */
    function getWeibo(){
        // 创建一个新cURL资源
        $ch = curl_init();
        // 设置URL和相应的选项
        curl_setopt($ch, CURLOPT_URL, "http://api.shenjian.io/?appid=f55e66587a370fd5f81d859e4cf1ba55&type=realtime");
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch,  CURLOPT_RETURNTRANSFER, true);
        // 抓取URL并把它传递给浏览器
        $data = curl_exec($ch);
        //关闭资源
        curl_close($ch);
        $data = json_decode($data);
        dump($data);
        //
    }
}
