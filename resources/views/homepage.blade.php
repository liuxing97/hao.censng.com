<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv=”X-UA-Compatible” content=”IE=edge,chrome=1″/>
	<meta name="viewport" content="width=device-width, minimum-scale=1, user-scalable=no">
    <script type="text/javascript" src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <title>辰象导航</title>
</head>
<body on>
    <!--顶部栏-->
    <div class="topNav">
        <div class="topNav-main">
            <div class="navLogo">
                <img src="{{URL::asset('img/nav_logo_156x36.png')}}" />
            </div>
            <div class="navLogo-sec">
                <img src="{{URL::asset('img/censng_logo_sec.png')}}" />
            </div>
        </div>
    </div>
    <!--主要盒子-->
    <div class="mainBox">
        <!--节气-->
        <div class="calendar"><span>谷雨</span></div>
        <!--快捷搜索-->
        <div class="fastSearch">
            <!--搜索主体-->
            <div class="fastSearch-main">
                <!--选择搜索引擎-->
                <div class="search-select chird">
                    <div class="search-select-box">
                        <img src="{{URL::asset('img/baidu_search_78x24.png')}}" />
                    </div>
                </div>
                <!--搜索内容框-->
                <div class="search-contect chird">
                    <input class="search-contect-text" type="text" />
                </div>
                <!--搜索按钮-->
                <div class="search-search chird">
                    <div class="search-search-box">
                        <span>搜索</span>
                    </div>
                </div>
            </div>
        </div>
        <!--节气信息-->
        <div class="calendarMsg">
            <div class="calendarMsg-box">
                <span>谷雨是二十四节气的第六个节气，也是春季最后一个节气，每年4月19日～21日时太阳到达黄经30°时为谷雨，源自古人“雨生百谷”之说。同时也是播种移苗、埯瓜点豆的最佳时节。</span>
                <span>“清明断雪，谷雨断霜”，气象专家表示，谷雨是春季最后一个节气，谷雨节气的到来意味着寒潮天气基本结束，气温回升加快，大大有利于谷类农作物的生长。</span>
            </div>
        </div>
    </div>
    <!--常用链接-->
    <div class="commonLink">
        <!--常用链接主体-->
        <div class="commonLink-main">
            <!--外层整体-->
            <div class="linkItem">
                <a href="http://youku.com">
                    <!--图标背景 style:table-cell-->
                    <div class="linkItem-bg">
                        <!--图标-->
                        <img src="{{URL::asset('img/common_link/youku_38x38.png')}}" />
                    </div>
                    <!--链接名称-->
                    <div class="linkItem-title">优酷</div>
                </a>
            </div>&nbsp;
            <div class="linkItem">
                <a href="http://iqiyi.com">
                <!--图标背景 style:table-cell-->
                <div class="linkItem-bg">
                    <!--图标-->
                    <img src="{{URL::asset('img/common_link/iqiyi_38x38.png')}}" />
                </div>
                <!--链接名称-->
                <div class="linkItem-title">爱奇艺</div>
                </a>
            </div>&nbsp;
            <div class="linkItem">
                <a href="http://video.qq.com">
                <!--图标背景 style:table-cell-->
                <div class="linkItem-bg">
                    <!--图标-->
                    <img src="{{URL::asset('img/common_link/tencent_video_38x38.png')}}" />
                </div>
                <!--链接名称-->
                <div class="linkItem-title">腾讯视频</div>
                </a>
            </div>&nbsp;
            <div class="linkItem">
                <a href="http://taobao.com">
                <!--图标背景 style:table-cell-->
                <div class="linkItem-bg">
                    <!--图标-->
                    <img src="{{URL::asset('img/common_link/taobao_38x38.png')}}" />
                </div>
                <!--链接名称-->
                <div class="linkItem-title">淘宝</div>
                </a>
            </div>&nbsp;
            <div class="linkItem">
                <a href="http://jd.com">
                <!--图标背景 style:table-cell-->
                <div class="linkItem-bg">
                    <!--图标-->
                    <img src="{{URL::asset('img/common_link/jd_38x38.png')}}" />
                </div>
                <!--链接名称-->
                <div class="linkItem-title">京东</div>
                </a>
            </div>&nbsp;
            <div class="linkItem">
                <a href="http://bilibili.com">
                <!--图标背景 style:table-cell-->
                <div class="linkItem-bg">
                    <!--图标-->
                    <img src="{{URL::asset('img/common_link/bilibili_38x38.png')}}" />
                </div>
                <!--链接名称-->
                <div class="linkItem-title">B站</div>
                </a>
            </div>&nbsp
            <div class="linkItem">
                <a href="http://qq.com">
                <!--图标背景 style:table-cell-->
                <div class="linkItem-bg">
                    <!--图标-->
                    <img src="{{URL::asset('img/common_link/tencent_38x38.png')}}" />
                </div>
                <!--链接名称-->
                <div class="linkItem-title">腾讯</div>
                </a>
            </div>&nbsp;
            <div class="linkItem">
                <a href="http://ifeng.com">
                <!--图标背景 style:table-cell-->
                <div class="linkItem-bg">
                    <!--图标-->
                    <img src="{{URL::asset('img/common_link/ifeng_38x38.png')}}" />
                </div>
                <!--链接名称-->
                <div class="linkItem-title">凤凰网</div>
                </a>
            </div>
        </div>
    </div>
    <!--热点排行榜-->
    <div class="hotTopic">
        <!--热点排行榜主体-->
        <div class="hotTopic-main">
            <!--百度热点榜单-->
            <div class="topicList">
                <!--榜单名片-->
                <div class="listHeader">
                    <!--榜单Logo及名称-->
                    <div class="listBaseShow">
                        <a href="http://top.baidu.com">
                            <!--榜单Logo-->
                            <div class="listLogo">
                                <img src="{{URL::asset('img/bd_topic_list_logo.png')}}" />
                            </div>
                            <!--榜单名称-->
                            <div class="listTitle">百度风云榜</div>
                        </a>

                    </div>
                    <!--搜索指数说明-->
                    <div class="searchIndexMsg">
                        <!--标题-->
                        <span class="t">搜索指数</span>
                        <!--算法-->
                        <span class="m">（百度搜索指数）</span>
                    </div>
                </div>
                <!--榜单主体-->
                <div class="topicList-main">
                    <!--榜单头部-->
                    <div class="topicList-main-header">
                        <span class="rank">排名</span>
                        <span class="key">关键词</span>
                    </div>
                    <!--榜单主体的主体-->
                    <div class="topicList-main-main">
                        @php
                            for($t=0;$t<10;$t++){
                            $topic = $baiduTopics[$t];
                            $topic['link'] = url($topic['link']);
                            $topNum = $t+1;
                                echo "
                                <div class=\"topicItem\">
                                <a target=\"new_target\" href={$topic['link']}>
                                    <!--排名-->
                                    <div class=\"rank\">
                                        <!--排名盒子-->
                                        <div class=\"rank-box\">{$topNum}</div>
                                    </div>
                                    <!--关键词-->
                                    <div class=\"key\">".$topic['title']."</div>
                                    <!--搜索指数-->
                                    <div class=\"index bd_index\">{$topic['index']}</div>
                                    </a>
                                </div>

                                ";
                            }
                        @endphp
                    </div>
                    <!--查看完整榜单-->
                    <div class="readMore"><a target="_blank" href="http://top.baidu.com">查看完整榜单</a></div>

                </div>
            </div>&nbsp;
            <!--微博热搜榜-->
            <div class="topicList">
                <!--榜单名片-->
                <div class="listHeader">
                    <!--榜单Logo及名称-->
                    <div class="listBaseShow">
                        <a href="https://s.weibo.com/top/summary">
                            <!--榜单Logo-->
                            <div class="listLogo">
                                <img src="{{URL::asset('img/wb_topic_list_logo.png')}}" />
                            </div>
                            <!--榜单名称-->
                            <div class="listTitle">微博风云榜</div>
                        </a>

                    </div>
                    <!--搜索指数说明-->
                    <div class="searchIndexMsg">
                        <!--标题-->
                        <span class="t">搜索指数</span>
                        <!--算法-->
                        <span class="m">（微博搜索指数）</span>
                    </div>
                </div>
                <!--榜单主体-->
                <div class="topicList-main">
                    <!--榜单头部-->
                    <div class="topicList-main-header">
                        <!--top标志-->
                        <span>a</span>
                        <!--内容-->
                        <span></span>
                    </div>
                    <!--榜单主体的主体-->
                    <div class="topicList-main-main">
                        <!--榜单排名项-->
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                        <div class="topicItem">
                            <!--排名-->
                            <div class="rank">
                                <!--排名盒子-->
                                <div class="rank-box">1</div>
                            </div>
                            <!--关键词-->
                            <div class="key">月薪1万是讨饭</div>
                            <!--搜索指数-->
                            <div class="index wb_index">491530</div>
                        </div>
                    </div>
                    <!--查看完整榜单-->
                    <div class="readMore">查看完整榜单</div>
                </div>
            </div>
        </div>
    </div>
    <!--辰象科技-->
    <div class="censng">
        <!--辰象科技Logo（居中）-->
        <img onclick="jiguan()" src="{{URL::asset('img/censng_logo_389x85.png')}}" />
    </div>
    <!--加载辰象科技-->
    <div style="display: none" onclick="showCensngApp('open')" class="loadCensng">
        加载辰象科技相关
    </div>
    <!--几个入口-->
    <div class="censngSite">
        <!--入口模块-->
        <div class="censngSite-main">
            <!--辰象支付入口-->
            <div class="censngApp">
                <!--图标及标题-->
                <div class="appShow">
                    <!--图标-->
                    <div class="appIcon">
                        <!--图标Box-->
                        <div class="appIconBox">
                            <img src="{{URL::asset("img/censng_pay_84x84.png")}}" />
                        </div>
                    </div>
                    <!--标题-->
                    <div class="appTitle">辰象支付</div>
                </div>&nbsp;
                <!--展示板-->
                <div class="showBrand censngPay">
                    <!--左侧-->
                    <div class="left">微 信 扫 一 扫 ， 查 看 自 己 的 消 费 情 况 。</div>
                    <!--右侧-->
                    <div class="right">
                        <div class="right-text">
                            <span>本功能目前还在测试及考究，如果某天你遇到了辰象支付。请放心尝试吧，我们没有坏意。暂时只提供给使用者入口，我们不想宣传。</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--辰象建站入口-->
            <div class="censngApp">
                <!--图标及标题-->
                <div class="appShow">
                    <!--图标-->
                    <div class="appIcon">
                        <!--图标Box-->
                        <div class="appIconBox">
                            <img src="{{URL::asset("img/censng_build_84x84.png")}}" />
                        </div>
                    </div>
                    <!--标题-->
                    <div class="appTitle">辰象建站</div>
                </div>&nbsp;
                <!--展示板-->
                <div class="showBrand">
                    <img src="{{URL::asset("img/censng_build_banner.png")}}" />
                </div>
            </div>
            <div class="censngApp">
                <!--图标及标题-->
                <div class="appShow censngContactShow">
                    <!--图标-->
                    <div class="appIcon contactIcon">
                        <!--图标Box-->
                        <div class="appIconBox">
                            <img src="{{URL::asset("img/censng_contact_84x84.png")}}" />
                        </div>
                    </div>
                    <!--标题-->
                    <div class="appTitle">联系我们</div>
                </div>&nbsp;
                <!--展示板-->
                <div class="showBrand censngContact">
                    <img src="{{URL::asset("img/contact_banner.png")}}" />
                </div>
            </div>
        </div>

    </div>
    <!--底部-->
    <div class="footer">
        <div class="footer-banner"><img src="{{URL::asset('img/footer-bg.png')}}" /></div>
        <p>Copyright © 2009-2018 CENSNG 西安辰象的象网络技术有限公司</p>
        <p>陕网文[2011]0398-130号京ICP备12002058号</p>
    </div>
</body>
</html>
<style>
    html,body,address,blockquote,body,dd,div,dl,dt,fieldset,form,frame,frameset,h1,h2,h3,h4,h5,h6,noframes,ol,p,ul,center,dir,hr,menu,pre{display:block;margin: 0;padding: 0;line-height: 1em}
    html{position: relative}
    a{text-decoration: none;}
    a:focus{outline: none;}
    li{display:list-item}
    head{display:none}
    table{display:table}
    tr{display:table-row}
    thead{display:table-header-group}
    tbody{display:table-row-group}
    tfoot{display:table-footer-group}
    col{display:table-column}
    colgroup{display:table-column-group}
    td,th{display:table-cell;}
    caption{display:table-caption}
    th{font-weight:bolder; text-align:center}
    caption{text-align:center}
    h1{font-size:2em; margin:.67em 0}
    h2{font-size:1.5em; margin:.75em 0}
    h3{font-size:1.17em; margin:.83em 0}
    h4,p,blockquote,ul,fieldset,form,ol,dl,dir,menu{margin:1.12em 0}

    h5{font-size:.83em; margin:1.5em 0}
    h6{font-size:.75em; margin:1.67em 0}
    h1,h2,h3,h4,h5,h6,b,strong{font-weight:bolder}
    blockquote{margin-left:40px; margin-right:40px}
    i,cite,em,var,address{font-style:italic}
    pre,tt,code,kbd,samp{font-family:monospace}
    pre{white-space:pre}
    button,textarea,input,object,select{display:inline-block;}
    big{font-size:1.17em}
    small,sub,sup{font-size:.83em}
    sub{vertical-align:sub}
    sup{vertical-align:super}
    table{border-spacing:2px;}
    thead,tbody,tfoot{vertical-align:middle}
    td,th{vertical-align:inherit}
    s,strike,del{text-decoration:line-through}
    hr{border:1px inset}
    ol,ul,dir,menu,dd{margin-left:40px}
    ol{list-style-type:decimal}
    ol ul,ul ol,ul ul,ol ol{margin-top:0; margin-bottom:0}
    u,ins{text-decoration:underline}
    br:before{content:”\A”}
    :before,:after{white-space:pre-line}

    center{text-align:center}
    abbr,acronym{font-variant:small-caps; letter-spacing:0.1em}
    :link,:visited{text-decoration:underline}
    :focus{outline:thin dotted invert}

    @media print{
        h1{page-break-before:always}
        h1,h2,h3,
        h4,h5,h6{page-break-after:avoid}
        ul,ol,dl{page-break-before:avoid}
    }
</style>
<style>
    body{
        background: #fbfbfb;
        font-family: "微软雅黑",Arial;
    }
</style>
<style>
    .topNav{
        background: #000000;
        height: 120px;
        width: 100%;
    }
    .topNav-main{
        height: 100%;
        width: 1200px;
        margin: 0 auto;
        position: relative;
    }
    .topNav-main .navLogo{
        display: inline-block;
        width: 156px;
        height: 36px;
        position: relative;
        top: 40px;
    }
    .topNav-main .navLogo img{
    }
    .navLogo-sec{
        position: absolute;
        bottom: 20px;
    }
</style>
<style>
    .mainBox{
        background: url("/img/main_box_bg_1400x534.png") no-repeat center;
        width: 100%;
        height: 534px;
    }
    .mainBox .calendar{
        font-family: Arial;
        font-size: 32px;
        color: #000000;
        padding-top: 92px;
        margin: 0 auto;
        width: 120px;
        text-align: center;
        letter-spacing: 18px;
        text-indent:8px;
    }
    .mainBox .calendar span{
    }
    .fastSearch{
        padding-top: 56px;
    }
    .fastSearch-main{
        width: 800px;
        margin: 0 auto;
        text-align: center;
    }
    .fastSearch-main .chird{
        display: inline-block;
        line-height: 38px;
        vertical-align: top;
    }
    .fastSearch-main .search-select{
        margin-right: 20px;
    }
    .fastSearch-main .search-select-box{
        display: table-cell;
        vertical-align: middle;
        height: 38px;
    }
    .fastSearch-main .search-contact{

    }
    .fastSearch-main .search-contect-text{
        width: 550px;
        height: 38px;
        border: none;
        border-radius: 100px;
    }
    .fastSearch-main .search-search{
        margin-left: 20px;
    }
    .fastSearch-main .search-search-box{
        display: table-cell;
        line-height: 38px;
    }
    .fastSearch-main .search-search-box span{
        display: inline-block;
        height: 28px;
        background: #c61212;
        width: 76px;
        border-radius: 5px;
        vertical-align: middle;
        color: #fff;
        line-height: 28px;
        font-size: 16px;
        letter-spacing: 6px;
        text-indent: 6px;
    }
    .calendarMsg{
        height: 195px;
        width: 705px;
        background: rgba(51,51,51,0.4);
        margin: 0 auto;
        margin-top: 76px;
        box-sizing: border-box;
    }
    .calendarMsg-box{
        display: table-cell;
        vertical-align: middle;
        height: 195px;
        padding: 0 45px;
    }
    .calendarMsg-box span{
        display: block;
        color: #ffffff;
        font-size: 14px;
        padding: 5px 0;
        letter-spacing: 0;
        line-height: 1.5em;
    }
</style>
<style>
    .commonLink{
        width: 100%;
        height: 230px;
        margin-top: 50px;
    }
    .commonLink-main{
        width: 990px;
        margin: 0 auto;
        text-align: justify;
        text-align-last: justify;
    }
    .linkItem{
        width: 84px;
        height:112px;
        text-align: center;
        display: inline-block;
        text-align-last: auto;
        border-radius: 5px;
        padding-bottom: 10px;
    }
    .linkItem:hover{
        box-shadow: 0 0 10px #ccc;
    }
    .linkItem:hover img{
        width: 40px;
        height: 40px;
    }
    .linkItem a{
        text-decoration: none;
    }
    .linkItem a:focus{
        outline: none;
    }
    .linkItem-bg{
        width: 84px;
        height: 84px;
        background: #fff;
        border-radius: 10px;
        display: table-cell;
        vertical-align: middle;
    }
    .linkItem-bg img{
    }
    .linkItem-title{
        font-size: 14px;
        margin-top: 12px;
        letter-spacing: 5px;
        text-indent: 5px;
        color: #666;
    }
</style>
<style>
    .hotTopic{
        width: 100%;
        margin: 0 auto;
        cursor: default;
    }
    .hotTopic-main{
        width: 900px;
        height: 665px;
        margin: 0 auto;
        text-align: justify;
        text-align-last: justify;
    }
    .topicList{
        width: 366px;
        height: 650px;
        display: inline-block;
        text-align-last: right;
        text-align: right;
        vertical-align: top;
    }
    .topicList:hover .listBaseShow a{
        font-weight: bold;
    }
    .listHeader{
        width: 366px;
        height: 122px;
        background: #ffffff;
        display: table-cell;
        vertical-align: middle;
        border-radius: 5px;
    }
    .listHeader .listBaseShow{
        display: inline-block;
        vertical-align: middle;
        text-align: center;
        text-align-last: center;
    }
    .listHeader .listBaseShow a{
        text-decoration: none;
    }
    .listHeader .listBaseShow a:focus{
        outline: none;
    }
    .listBaseShow .listLogo{
    }
    .listBaseShow .listLogo img{

    }
    .listBaseShow .listTitle{
        font-size: 14px;
        color: #666666;
        margin-top: 15px;
        letter-spacing: 6px;
        text-indent: 6px;
    }
    .listHeader .searchIndexMsg{
        display: inline-block;
        margin-left: 30px;
        text-align: center;
        text-align-last: center;
        font-size: 14px;
        width: 128px;
        vertical-align: middle;
        padding: 10px 15px 10px 10px;
        border-left: 1px solid #f2f2f2;
    }
    .searchIndexMsg .t{
        display: block;
        color: #ff9900;
        letter-spacing: 6px;
        text-indent: 6px;
    }
    .searchIndexMsg .m{
        margin-top: 15px;
        display: block;
        color: #cccccc;
    }
    .topicList-main{
        padding: 28px 26px;
        width: 366px;
        height: 508px;
        background: #fff;
        border-radius: 5px;
        box-sizing: border-box;
        margin-top: 28px;
        text-align: left;
        text-align-last: left;
        font-size: 14px;
    }
    .topicList-main-header{
        line-height: 40px;
    }
    .topicList:hover .listHeader,.topicList:hover .topicList-main{
        box-shadow: 0 0 10px #ccc;
    }
    .topicList-main-header .rank,.topicItem .rank{
        display: inline-block;
        width: 28px;
        text-align: left;
        text-align-last: left;
    }
    .topicList-main-header .key,.topicItem .key{
        padding-left: 7px;
        width: 210px;
    }
    .topicList-main-header .rank{
        color: #999;
    }
    .topicList-main-header .key{
        color: #666;
    }
    .topicList-main-main{
        margin-top: 10px;
    }
    .topicItem{
        line-height: 2.5em
    }
    .topicItem a{
        text-decoration: none;
    }
    .topicItem a:focus{
        outline: none;
    }
    .topicItem:hover .key{
        color: #2a88bd;
    }
    .topicItem .rank{
        display: inline-block;
    }
    .topicItem .rank-box{
        text-align: center;
        width: 18px;
        height: 18px;
        background: #ccc;
        text-align-last: center;
        line-height: 18px;
        color: #fff;
    }
    .topicItem:nth-child(1) .rank-box,.topicItem:nth-child(2) .rank-box,.topicItem:nth-child(3) .rank-box{
        background: #ff9900;
    }
    .topicItem .key{
        display: inline-block;
        color: #333;
        box-sizing: border-box;
    }
    .topicItem .index{
        display: inline-block;
    }
    .topicItem .bd_index{
        color: #6699FF;
    }
    .topicItem .wb_index{
        color: #cccccc;
    }
    .topicList-main .readMore{
        text-align: center;
        letter-spacing: 3px;
        text-indent: 3px;
        color: #666;
        margin-top: 20px;
        text-align-last: center;
    }
    .topicList-main .readMore a{
        text-decoration: none;
        color: #666;
    }
    .topicList-main .readMore a:focus{
        outline: none;
    }
</style>
<style>
    .censng{
        text-align: center;
        height: 186px;
        margin-top: 70px;
        background: url("/img/mingyan_658x186.png") no-repeat center;
    }
    .censng img{
        position: relative;
        top: 50px;
        width: 288px;
    }
    .censng:hover img{
        width: 305px;
        cursor: pointer;
    }
</style>
<style>
    .loadCensng{
        border: 2px solid #d2d2d2;
        width: 218px;
        margin: 0 auto;
        margin-top: 0px;
        margin-bottom: 0px;
        text-align: center;
        line-height: 38px;
        color: #aeaeae;
        letter-spacing: 4px;
        text-indent: 4px;
        margin-top: 20px;
        margin-bottom: 88px;
        cursor: pointer;
    }
    .loadCensng:hover{
        border: 2px solid #cd1212;
        color: #cd1212;
    }
</style>
<style>
    .censngSite{
        min-height: 506px;
        width: 100%;
        margin-bottom: 128px;
    }
    .censngSite-main{
        width: 910px;
        margin:0 auto;
    }
    .censngApp{
        margin-top: 40px;
        text-align-last: justify;
    }
    .censngApp .appShow{
        width: 108px;
        height: 115px;
        display: inline-block;
        vertical-align: top;
    }
    .censngApp .appShow .appIcon{
        width: 84px;
        height: 84px;
        /*background: #fff;*/
        margin: 0 auto;
        margin-top: 10px;
        box-shadow: 0 0 5px #d5d5d5;
        border-radius: 5px;
    }
    .censngApp .appShow .appIconBox{
    }
    .censngApp .appShow .appIconBox img{
    }
    .censngApp .appShow .appTitle{
        color: #666;
        font-size: 14px;
        text-align: center;
        margin-top: 15px;
        text-align-last: center;
        letter-spacing: 3px;
        text-indent: 3px;
    }
    .censngApp .showBrand{
        display: inline-block;
        width: 770px;
        height: 126px;
        background: #fff;
        vertical-align: top;
        box-shadow: 0 0 5px #e5e5e5;
        border-radius: 5px;
        text-align-last: auto;
        font-size: 14px;
    }
    .censngApp .contactIcon{
        border-radius: 100px !important;
        box-shadow: none!important;
    }
    .censngPay{
    }
    .censngPay .left{
        display: inline-block;
        line-height: 126px;
        width: 350px;
        text-align: center;
        color: #ccc;
    }
    .censngPay .right{
        width: 420px;
        height: 126px;
        float: right;
    }
    .censngPay .right-text{
        display: table-cell;
        width: 420px;
        /*height: 126px;*/
        vertical-align: middle;
        height: 90px;
        position: relative;
        top: 18px;
        border-left: 1px solid #e5e5e5;
        padding: 0 20px;
        font-size: 14px;
        font-size: 90%;
        color: #888;
        /*letter-spacing: 2px;*/
    }
    .censngPay .right-text span{
        display: inline-block;
        line-height: 2.5em;
    }
    .censngContact{
        height: 155px!important;
    }
    .censngContactShow{
        position: relative;
        top: 10px;
    }

</style>
<style>
    .footer{
        width: 100%;
        height: 246px;
        background: #1a1a1a;
        margin-top: 30px;
        text-align: center;
        padding: 70px 0 0 0;
        box-sizing: border-box;
        color: #fff;
        font-size: 14px;
    }
    .footer-banner{
        margin-bottom: 45px;
    }
    .footer p{

    }
</style>
<script>
//    $(".censng").css({"display":"none"});
    $(".censngSite").css({"display":"none"});
//    $(".loadCensng").css({"display":"none"});
//    function showCensng() {
//        var bottom = $(document).scrollTop();
//        if(bottom > 1100){
//////            alert($(".censngSite").is(':visible'))
////            if($(".censngSite").is(':visible') == 'false'){
////                $(".censng").show(0);
////                $(".loadCensng").show(0);
////            }
//        }
//        else{
////            $(".censng").hide(500);
////            $(".loadCensng").hide(500);
//        }
////        window.onscroll=function () {
//            return false;
////        };
//    }
//    window.onscroll=function(){
////        showCensng();
//    };
    function showCensngApp(type) {
        if(type == 'open'){
            $(".loadCensng").hide(0,function () {
                $(".censngSite").show(300);
            });
        }
    }
    function jiguan() {
        if(!$(".censngSite").is(':visible')){
            $(".censngSite").show(300);
            $(".censng:hover img").css({"width":"305px"})
        }else{
            $(".censngSite").hide(300);
            $(".censng:hover img").css({"width":"288px"})
        }
    }
</script>