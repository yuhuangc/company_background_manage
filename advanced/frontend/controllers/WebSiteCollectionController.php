<?php
/**
 * Created by PhpStorm.
 * User: huangy02
 * Date: 2016-12-6
 * Time: 15:22
 */

namespace frontend\controllers;

require('../../vendor/phpQuery/phpQuery.php');

use phpQuery;
use Yii;
use yii\web\Controller;

class WebSiteCollectionController extends Controller{

    /**
     * 网易新闻
     */
    public function actionGet163News()
    {
        phpQuery::newDocumentFile('http://news.163.com');
        $title = pq(".mod_important_news.none h5")->text();
        $list = pq(".mod_important_news.none");
        $list = $list->find('ul>li');
        $content = '<h1>标题：'.$title."<br/></h1>";
        foreach($list as $item){
            $content .= $item->textContent.'<br/>';
            $content .= pq($item)->find('a')->attr('href')."<br>";
            $content .= "------------------------------------------------------"."<br>";
        }
        /*$date = date('Y-m-d',time());
        $p = fopen($date.'.html', 'a');
        fwrite($p, $content);
        fclose($p);*/

        /*$mail= Yii::$app->mailer->compose();
        $mail->setTo('443663695@qq.com');
        $mail->setSubject("邮件测试");
        //$mail->setTextBody('zheshisha ');   //发布纯文字文本
        $mail->setHtmlBody($content);    //发布可以带html标签的文本
        if($mail->send())
            echo "success";
        else
            echo "failse";
        die();*/
    }

    /**
     * 新浪新闻
     */
    public function actionGetSinaNews()
    {
        phpQuery::newDocumentFile('https://sina.cn/');
        $content = pq("#j_yaowen_scroll");
        pq($content)->find("dl")->each(function($item){
            echo $item->textContent."<br>";
        });
        pq($content)->find("a")->each(function($item){
            echo pq($item)->attr('href')."<br>";
        });
        //echo $content;
    }
}