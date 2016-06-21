<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $order_id
 * @property integer $order_num
 * @property integer $sku_id
 * @property string $sku_addtime
 * @property integer $user_id
 * @property string $order_state
 * @property string $order_ways
 * @property string $order_payname
 * @property integer $order_numbers
 * @property string $order_total
 * @property string $order_money
 * @property string $order_status
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_num', 'sku_id', 'user_id', 'order_numbers'], 'integer'],
            [['sku_addtime'], 'safe'],
            [['order_state', 'order_payname', 'order_total', 'order_money'], 'string', 'max' => 100],
            [['order_ways'], 'string', 'max' => 150],
            [['order_status'], 'string', 'max' => 11]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_num' => 'Order Num',
            'sku_id' => 'Sku ID',
            'sku_addtime' => 'Sku Addtime',
            'user_id' => 'User ID',
            'order_state' => 'Order State',
            'order_ways' => 'Order Ways',
            'order_payname' => 'Order Payname',
            'order_numbers' => 'Order Numbers',
            'order_total' => 'Order Total',
            'order_money' => 'Order Money',
            'order_status' => 'Order Status',
        ];
    }
    public function sel_order($id){
        $res=yii::$app->db->createCommand("select * from `order` inner join sku on order.sku_id=sku.sku_id inner join goods on sku.sku_id=goods.sku_id where `order`.user_id='$id'")->queryAll();
        return $res;

    }
}
