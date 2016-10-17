<?php

namespace app\modules\config\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "config".
 *
 * @property integer $id
 * @property string $show_text
 * @property string $type
 * @property integer $created_at
 * @property integer $updated_at
 */
class Config extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'config';
    }

    public function actions()
    {
        return [
            'upload' => [
                'class' => 'app\action\UploadAction',
                'config'=>['uploadpath'=>sprintf('uploads/_config/%s/',date('Y/m/d'))],
            ]
        ];
    }


    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['show_text', 'type'], 'required'],
            [['created_at', 'updated_at'], 'integer'],
            [['show_text', 'type','show_url','describe'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '配置编号',
            'show_text' => '展示文本',
            'show_url' => '图片地址',
            'type' => '配置标识',
            'describe'=> '说明',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
