<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/3/24 14:15
 * @Description:
 */

namespace common\helpers;


class Formatter extends \yii\i18n\Formatter
{
    private static $_items = [];

    public function asImage($value, $options = [])
    {
        if ($value === null) {
            return $this->nullDisplay;
        }
        if(empty($value)){
            if(isset($options['default'])){
                $value = \Yii::$app->params['domain']['data'].$options['default'];
                unset($options['default']);
            }else{
                $value = \Yii::$app->params['domain']['data'].\Yii::$app->params['image']['default']['common'];
            }
        }
        if(!preg_match('/\b(([\w-]+:\/\/?|www[.])[^\s()<>]+(?:\([\w\d]+\)|([^[:punct:]\s]|\/)))/i',$value))
        {
            $value = \Yii::$app->params['domain']['data'].$value;
        }
        return parent::asImage($value, $options);
    }
    public function asDate($value, $format = null)
    {
        if($value == 0) return '-';
        return parent::asDate($value, $format);
    }
    public function asPrice($value, $decimals = 2, $unit = '元', $dec_point = '.' , $thousands_sep = '')
    {
        if ($value === null) {
            return $this->nullDisplay;
        }
        return  number_format($value/100,$decimals, $dec_point, $thousands_sep).$unit;
    }
    public function asLookup($value, $type)
    {
        if ($value === null) {
            return $this->nullDisplay;
        }
        if(!isset(self::$_items[$type]))
            self::loadItems($type);
        return isset(self::$_items[$type][$value]) ? self::$_items[$type][$value] : false;
    }


    public function GoodsStatusDescribe($status){
        switch($status){
            case 0:
                return "待编辑";
            case 1:
                return "下架";
            case 2:
                return "上架";
        }
        return NULL;
    }

    protected static function loadItems()
    {
        self::$_items = \Yii::$app->params['lookup'];
    }
}