<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sku".
 *
 * @property integer $sku_id
 * @property string $sku_img
 * @property string $sku_color
 * @property string $sku_size
 * @property string $sku_price
 * @property string $sku_marketprice
 * @property integer $sku_num
 * @property integer $goods_id
 */
class Sku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sku_price', 'sku_marketprice'], 'number'],
            [['sku_num', 'goods_id'], 'integer'],
            [['sku_img', 'sku_color', 'sku_size'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sku_id' => 'Sku ID',
            'sku_img' => 'Sku Img',
            'sku_color' => 'Sku Color',
            'sku_size' => 'Sku Size',
            'sku_price' => 'Sku Price',
            'sku_marketprice' => 'Sku Marketprice',
            'sku_num' => 'Sku Num',
            'goods_id' => 'Goods ID',
        ];
    }
    public function sel_select(){
        $sql=yii::$app->db->createCommand("select * from sku as s inner join as goods g on s.sku_id")->queryAll();

    }
}
