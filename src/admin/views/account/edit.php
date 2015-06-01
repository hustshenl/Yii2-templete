<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/2/17 17:37
 * @Description:
 */
use yii\helpers\Html;
use hustshenl\metronic\widgets\Button;
use hustshenl\metronic\widgets\ActiveForm;

$this->title = \Yii::t('admin', '修改资料');
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('admin', '个人资料'),
    'url' => ['account/index']],
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
                    <div class="actions btn-set">

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
                                    ['label' => Yii::t('common', 'Save'), 'options' => ['type' => 'submit', 'class' => 'btn btn-primary']]
                                ),
                                Button::widget(
                                    ['label' => Yii::t('common', 'Back'), 'options' => ['class' => 'btn default control-back']]),
                            ]
                        ]
                    ]); ?>
                    <?= $form->field($model, 'username',['inputOptions'=>['class' => 'form-control','disabled'=>true]]) ?>
                    <?= $form->field($model, 'email',['inputOptions'=>['class' => 'form-control','disabled'=>true]]) ?>
                    <?= $form->field($model, 'nickname') ?>
                    <?= $form->field($model, 'password')->passwordInput() ?>
                    <?= $form->field($model, 'newPassword')->passwordInput() ?>
                    <?= $form->field($model, 'password2')->passwordInput() ?>
                    <?= $form->field($model, 'phone') ?>
                    <?php ActiveForm::end(); ?>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>

