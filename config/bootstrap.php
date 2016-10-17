<?php
/**
 * Created by PhpStorm.
 * User: victorruan
 * Date: 16/10/12
 * Time: 下午4:38
 */
function deldir($dir) {
    if(!is_dir($dir)){
        return false;
    };
    //先删除目录下的文件：
    $dh=opendir($dir);
    while ($file=readdir($dh)) {
        if($file!="." && $file!="..") {
            $fullpath=$dir."/".$file;
            if(!is_dir($fullpath)) {
                unlink($fullpath);
            } else {
                deldir($fullpath);
            }
        }
    }

    closedir($dh);
    //删除当前文件夹：
    if(rmdir($dir)) {
        return true;
    } else {
        return false;
    }
}
function powered()
{
    return 'Powered by <a href="http://www.fanfantec.com" target="_blank">凡凡科技</a>';
}

function companyName(){
    return config('companyName')->show_text;
}
function logo(){
    return show_img(config('companyName')->show_url);
}
function config($type){
    return \app\modules\config\models\Config::findOne(['type'=>$type]);
}

function configAll($type){
    return \app\modules\config\models\Config::findAll(['type'=>$type]);
}
function show_img($url){
    if(!isset($url) or $url=='/' or empty($url)) return 'http://pic1.win4000.com/pic/0/8f/b6a7909290.jpg';
    if(strpos($url,"http")===0){
        return $url;
    }
    if(strpos($url,"/")===0){
        return Yii::$app->request->hostInfo.$url;
    }else{
        return Yii::$app->request->hostInfo.'/'.$url;
    }
}
