<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/2/17 17:37
 * @Description:
 */
use yii\helpers\Html;
use metronic\widgets\Button;
use metronic\widgets\ActiveForm;

$this->title = \Yii::t('admin', 'System Config');
$this->params['subTitle'] = \Yii::t('admin', 'Operation Config');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('admin', 'System Config'),
    'url' => ['config/index']],
    $this->params['subTitle']
];
//注册控制JS
$this->registerJs('$(".control-back").click(function(){
window.history.back();
});');

?>

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-settings"></i><?= $this->params['subTitle'] ?>
                    </div>


                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <?php $form = ActiveForm::begin([
                        'type' => ActiveForm::TYPE_HORIZONTAL,
                        'tagOptions' => ['class'  =>  'col-md-4',],
                        'buttons' => [
                            'items' => [
                                Button::widget(
                                    ['label' => Yii::t('app', 'Save'), 'options' => ['type' => 'submit', 'class' => 'btn btn-primary']]
                                ),
                                Button::widget(
                                    ['label' => Yii::t('app', 'Back'), 'options' => ['class' => 'btn default control-back']]),
                            ]
                        ]
                    ]); ?>
                    <?= $form->field($model, 'publishComment')->radioList([1 => Yii::t('admin/config', 'Publish First'), 0 => Yii::t('admin/config', 'Check First')],
                        ['class' => 'radio-list',
                            'itemOptions' => [
                                'labelOptions' => ['class' => 'radio-inline',]
                            ]
                        ]) ?>
                    <?= $form->field($model, 'publishRental')->radioList([1 => Yii::t('admin/config', 'Publish First'), 0 => Yii::t('admin/config', 'Check First')],
                        ['class' => 'radio-list',
                            'itemOptions' => [
                                'labelOptions' => ['class' => 'radio-inline',]
                            ]
                        ]) ?>
                    <?= $form->field($model, 'scoresPerConsume')->hint('每消费100元获取积分数') ?>
                    <?= $form->field($model, 'scoresPerComment')->hint('每次评论获取积分数') ?>
                    <?= $form->field($model, 'maxGoodsPerMerchant') ?>
                    <?/*= $form->field($model, 'orderApproveTimeout')->hint('单位：秒') */?><!--
                    <?/*= $form->field($model, 'orderDeliverTimeout')->hint('单位：秒') */?>
                    --><?/*= $form->field($model, 'reservationDeliveryTimeout')->hint('单位：秒') */?>
                    <?/*= $form->field($model, 'orderAutoComplete')->hint('单位：秒') */?><!--
                    --><?/*= $form->field($model, 'orderAutoCancel')->hint('单位：秒') */?>
                    <?= $form->field($model, 'remindBeforeMerchantExpires')->hint('单位：天') ?>
                    <?php ActiveForm::end(); ?>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>

