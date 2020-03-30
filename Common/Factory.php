<?php
namespace Common;
//青铜会员的打折商品
class BronzeRebateCommodity {
    //描述
    public $desc = '青铜会员的打折商品';
}

//白银会员的打折商品
class SilverRebateCommodity {
    public $desc = '白银会员的打折商品';
}

//青铜会员的推荐商品
class BronzeCommendatoryCommodity {
    public $desc = '青铜会员的推荐商品';
}

//白银会员的推荐商品
class SilverCommendatoryCommodity {
    public $desc = '白银会员的推荐商品';
}

//各个工厂的接口
interface ConcreteFactory {
    //生产对象的方法
    public function create($what);
}

//青铜工厂
class BronzeFactory implements ConcreteFactory {

    //生产对象的方法
    public function create($what){
        $productName = 'Bronze'.$what.'Commodity';
        return new $productName;
    }

}

//白银工厂
class SilverFactory implements ConcreteFactory {

    //生产对象的方法
    public function create($what){
        $productName = 'Silver'.$what.'Commodity';
        return new $productName;
    }

}

//调度中心
class CenterFactory {

    //获取工厂的方法
    public function getFactory($what){
        $factoryName = $what.'Factory';
        return new $factoryName;
    }

    //获取工厂的静态方法
    public static function getFactory2($what){
        $factoryName = $what.'Factory';
        return new $factoryName;
    }

}

//实例化调度中心
$center  = new CenterFactory();
//获得一个白银工厂
$factory = $center->getFactory('Silver');
//让白银工厂制造一个推荐商品
$product = $factory->create('Commendatory');
//得到白银会员的推荐商品
echo $product->desc.'
';

//获得一个青铜工厂
$factory2 = CenterFactory::getFactory2('Bronze');
//让青铜工厂制造一个打折商品
$product2 = $factory2->create('Rebate');
//得到青铜会员的推荐商品
echo $product2->desc;
