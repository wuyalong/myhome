<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sort".
 *
 * @property integer $sort_id
 * @property string $sort_name
 * @property string $sort_type
 */
class Sort extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sort';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sort_name', 'sort_type'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sort_id' => 'Sort ID',
            'sort_name' => 'Sort Name',
            'sort_type' => 'Sort Type',
        ];
    }
    public function sel_sort(){
        $sql=yii::$app->db->createCommand("select * from sort where sort_type=1")->queryAll();
        return $sql;
    }
    public function sel_sorts(){
        $sql1=yii::$app->db->createCommand("select * from sort where sort_type=0")->queryAll();
        return $sql1;


    }


}
