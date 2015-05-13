<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/2/19 13:09
 * @Description:
 */

namespace admin\models\configs;

use Yii;
use yii\base\Model;

/**
 * Signup form
 */
class OperationForm extends Model
{
    public $publishComment;
    public $publishRental;
    public $scoresPerConsume;
    public $scoresPerComment;
    public $maxGoodsPerMerchant;
    public $orderApproveTimeout;
    public $orderDeliverTimeout;
    public $reservationDeliveryTimeout;
    public $orderAutoCancel;
    public $orderAutoComplete;
    public $remindBeforeMerchantExpires;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['publishComment','publishRental','scoresPerConsume','scoresPerComment','maxGoodsPerMerchant',/*''orderApproveTimeout','orderDeliverTimeout','reservationDeliveryTimeout',orderAutoCancel','orderAutoComplete',*/'remindBeforeMerchantExpires'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'publishComment' => Yii::t('admin/config', 'Publish comment'),
            'publishRental' => Yii::t('admin/config', 'Publish rental'),
            'scoresPerConsume' => Yii::t('admin/config', 'Scores per consume'),
            'scoresPerComment' => Yii::t('admin/config', 'Scores per comment'),
            'maxGoodsPerMerchant' => Yii::t('admin/config', 'Max goods per merchant'),
            'orderApproveTimeout' => Yii::t('admin/config', 'Order approve timeout'),
            'orderDeliverTimeout' => Yii::t('admin/config', 'Order delivery timeout'),
            'orderAutoCancel' => Yii::t('admin/config', 'Order auto cancel'),
            'orderAutoComplete' => Yii::t('admin/config', 'Order auto complete'),
            'reservationDeliveryTimeout' => Yii::t('admin/config', 'Reservation order delivery timeout'),
            'remindBeforeMerchantExpires' => Yii::t('admin/config', 'Remind before merchant expires'),

        ];
    }

}
