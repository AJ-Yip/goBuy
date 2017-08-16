<?php
//    include "TopSdk.php";
//    date_default_timezone_set('Asia/Shanghai');
//	$content = @file_get_contents('/Users/xt/Downloads/json.txt');
//	var_dump(json_decode($content));
//	var_dump(urlencode(mb_convert_encoding('阿里发票商家答疑', 'gb2312', 'utf-8')));
namespace app\index\controller;

//header("Content-type: text/html; charset=utf-8");
//include "../taobaoapi/TopSdk.php";

use app\index\controller\TBapi\top\TopClient;
use app\index\controller\TBapi\top\request\TbkItemGetRequest;

class Share
{
    public function index()
    {

//        return '123';


        if (isset($_GET)){

            error_reporting(0);     //防显示警告打印出来
// Notice: Undefined index: num in /Applications/XAMPP/xamppfiles/htdocs/phpWork/任务5/work3_指定行数的星阵/work3.php on line 17
            $key = $_GET['key']?$_GET['key']:'女装';        //初始化赋值并不能把警告去掉(使用Google Chrome)


            //将下载到的SDK里面的TopClient.php的$gatewayUrl的值改为沙箱地址:http://gw.api.tbsandbox.com/router/rest
//正式环境时需要将该地址设置为：http://gw.api.taobao.com/router/rest

            $c = new TopClient();
            $c->appkey = "test"; // 可替换为您的沙箱环境应用的AppKey
            $c->secretKey = "test"; // 可替换为您的沙箱环境应用的AppSecret
//$sessionkey= "test";  // 必须替换为沙箱账号授权得到的真实有效SessionKey

            echo $key;


            $req = new TbkItemGetRequest;
            $req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url,seller_id,volume,nick");
            $req->setQ($key);
            $resp = $c->execute($req);

//print_r($resp->results->n_tbk_item[0]->item_url);

            echo json_encode($resp->results);
        }
    }
}

//$c = new TopClient;
//$c->appkey = '24579809';
//$c->secretKey = 'ee3fc3311d251383eaa867d374d42fab';
//
//$req = new TbkItemRecommendGetRequest;
//$req->setFields("num_iid,title,pict_url,small_images,reserve_price,zk_final_price,user_type,provcity,item_url");
//$req->setNumIid("123");
//$req->setCount("20");
//$req->setPlatform("1");
//$resp = $c->execute($req);
//
//var_dump($req);






?>