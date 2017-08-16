<?php
namespace app\index\controller;

//header("Content-type: text/html; charset=utf-8");
//include "./taobaoapi/TopSdk.php";

class Index
{
    public function index()
    {
//        return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';


//        if (isset($_GET)){
//
//            error_reporting(0);     //防显示警告打印出来
//// Notice: Undefined index: num in /Applications/XAMPP/xamppfiles/htdocs/phpWork/任务5/work3_指定行数的星阵/work3.php on line 17
//            $key = $_GET['key']?$_GET['key']:'女装';        //初始化赋值并不能把警告去掉(使用Google Chrome)
//
//
//            //将下载到的SDK里面的TopClient.php的$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest
////正式环境时需要将该地址设置为：http://gw.api.taobao.com/router/rest
//
//            $c = new TopClient;
//            $c->appkey = "test"; // 可替换为您的沙箱环境应用的AppKey
//            $c->secretKey = "test"; // 可替换为您的沙箱环境应用的AppSecret
////$sessionkey= "test";  // 必须替换为沙箱账号授权得到的真实有效SessionKey

            return '123';


//            $req = new TbkItemGetRequest;
//            $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
//            $req->setQ($key);
//            $resp = $c->execute($req);
//
////print_r($resp->results->n_tbk_item[0]->item_url);
//
//            echo json_encode($resp->results);
//        }
    }

    public function halleo()
    {

        echo '123';

    }
}
