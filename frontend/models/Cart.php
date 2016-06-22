<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property integer $cart_id
 * @property string $cart_size
 * @property string $cart_color
 * @property string $cart_goodsprice
 * @property integer $cart_num
 * @property string $cart_total
 * @property string $add_time
 * @property string $user_name
 * @property integer $sku_id
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cart_num', 'sku_id'], 'integer'],
            [['cart_size', 'cart_color'], 'string', 'max' => 200],
            [['cart_goodsprice', 'cart_total'], 'string', 'max' => 100],
            [['add_time', 'user_name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cart_id' => 'Cart ID',
            'cart_size' => 'Cart Size',
            'cart_color' => 'Cart Color',
            'cart_goodsprice' => 'Cart Goodsprice',
            'cart_num' => 'Cart Num',
            'cart_total' => 'Cart Total',
            'add_time' => 'Add Time',
            'user_name' => 'User Name',
            'sku_id' => 'Sku ID',
        ];
    }
    /**
     * 购物车查询
     * @return [type] [description]
     */
    public function sel_cart(){
        $connection = Yii::$app->db;
        $session = Yii::$app->session;
        $username = $session->get('name');
        $command = $connection->createCommand("SELECT * FROM cart left join sku on sku.sku_id=cart.sku_id left join goods on goods.goods_id=sku.goods_id WHERE user_name='$username'");
        $cartinfos['info'] = $command->queryAll();
        $cart_count =$connection->createCommand("SELECT count(*) as counts FROM cart WHERE user_name='$username'");
        $cartinfos['count'] = $cart_count->queryOne();
        return $cartinfos;
    }
    /**
     * 购物车单删商品
     */
    function del_cart($cart_id){
        $session = Yii::$app->session;
        $username = $session->get('name');        
        //如果cookie中有值时
        if($username==''&&isset($_COOKIE['cartinfo'])){
            $cartinfo=unserialize($_COOKIE['cartinfo']);
            unset($cartinfo[$cart_id]);
            if(count($cartinfo)!=0){
                setcookie('cartinfo',serialize($cartinfo),time()+1200);
            }else{
                 setcookie('cartinfo','',time()-1); 
            }                       
            return 1;
        }else{
            $connection = Yii::$app->db;
            $del_com = $connection->createCommand("delete from cart WHERE sku_id in ($cart_id)")->execute();
            if($del_com){
                return 1;
            }else{
                return 0;
            }
        }
        
        //$max_com = $connection->createCommand("select max(cart_id) from cart")->queryAll();        
    }

}
