<?php
namespace app\action;

use Yii;
use yii\base\Action;
use yii\helpers\ArrayHelper;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;

class UploadAction extends Action
{
    /**
     * @var array
     */
    /**
     * 上传
     * @return string
     */
    public $config;
    public function run()
    {
        if (Yii::$app->request->isPost) {
            $upload = UploadedFile::getInstanceByName('thumb');
            $user_id = Yii::$app->user->getId();
            $filename= $user_id . '_' . time() .'.'.$upload->getExtension();

            if ($upload) {
                $path = $this->config['uploadpath'][0]=='/'?'.'.$this->config['uploadpath']:$this->config['uploadpath'];
                if(!is_dir($path)){
                    FileHelper::createDirectory($path);
                }
                $upload->saveAs($path.$filename);
                echo $this->config['uploadpath'][0]=='/'?$this->config['uploadpath'].$filename:$path.$filename;

            }
            else
            {
                echo 'error';
            }

        }

    }




}