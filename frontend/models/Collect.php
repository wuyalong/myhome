<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "collect".
 *
 * @property integer $collect_id
 * @property integer $sku_id
 * @property integer $user_id
 * @property string $user_data
 */
class Collect extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'collect';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sku_id', 'user_id'], 'integer'],
            [['user_data'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'collect_id' => 'Collect ID',
            'sku_id' => 'Sku ID',
            'user_id' => 'User ID',
            'user_data' => 'User Data',
        ];
    }
    public function sel_select($id){
        $sql=yii::$app->db->createCommand("select * from collect as c inner join goods as g on c.sku_id=g.sku_id where c.user_id='$id'")->queryAll();

        return $sql;


    }
    public function sel_collect($id){
        $sql=yii::$app->db->createCommand("select * from collect as c inner join sku as s on c.sku_id=s.sku_id inner join goods as g on s.sku_id=g.sku_id where c.user_id='$id' ")->queryAll();
        return $sql;
    }
}

