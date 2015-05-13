<?php
/**
 * @Author shen@shenl.com
 * @Create Time: 2015/2/17 17:37
 * @Description:
 */
use yii\helpers\Html;
use hustshenl\metronic\widgets\Button;
use hustshenl\metronic\widgets\ActiveForm;

$this->title = \Yii::t('admin', 'System Config');
$this->params['subTitle'] = \Yii::t('admin', 'Base Config');
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
                    <div class="actions btn-set">
                        <?/*= Button::widget(
                            ['label' => Yii::t('app', 'Back'), 'options' => ['class' => 'btn default control-back'], 'icon' => 'fa fa-angle-left']
                        ) */?><!--
                        <?/*= Button::widget(
                            ['label' => Yii::t('app', 'Reset'), 'options' => ['class' => 'btn default'], 'icon' => 'fa fa-reply']
                        ) */?>
                        --><?/*= Button::widget(
                            ['label' => Yii::t('app', 'Save'), 'options' => ['class' => 'btn green'], 'icon' => 'fa fa-check']
                        ) */?>
                        <!--<div class="btn-group">
                            <a class="btn yellow dropdown-toggle" href="#" data-toggle="dropdown">
                                <i class="fa fa-share"></i> More <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li>
                                    <a href="#">
                                        Duplicate </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Delete </a>
                                </li>
                                <li class="divider">
                                </li>
                                <li>
                                    <a href="#">
                                        Print </a>
                                </li>
                            </ul>
                        </div>-->
                    </div>

                </div>
                <div class="portlet-body form">
                    <!-- BEGIN FORM-->
                    <?php $form = ActiveForm::begin([
                        'type' => ActiveForm::TYPE_HORIZONTAL,
                        //'tagOptions' => ['class'  =>  'col-md-4',],
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
                    <?= $form->field($model, 'siteName') ?>
                    <?= $form->field($model, 'siteUrl') ?>
                    <?/*= $form->field($model, 'apiUrl') */?><!--
                    --><?/*= $form->field($model, 'interfaceUrl') */?>
                    <?= $form->field($model, 'siteTitle') ?>
                    <?= $form->field($model, 'siteKeywords') ?>
                    <?= $form->field($model, 'siteDescription')->textArea(['rows' => 3]) ?>
                    <?= $form->field($model, 'adminEmail') ?>
                    <?= $form->field($model, 'adminQQ') ?>
                    <?= $form->field($model, 'icpSN') ?>
                    <?= $form->field($model, 'siteCode')->textArea(['rows' => 3]) ?>
                    <?= $form->field($model, 'siteCopyright')->textArea(['rows' => 3]) ?>

                    <?/*= $form->field($model, 'closed')->radioList([1 => Yii::t('app', 'Yes'), 0 => Yii::t('app', 'No')],
                        ['class' => 'radio-list',
                            'itemOptions' => [
                                'labelOptions' =>
                                [
                                    'class' => 'radio-inline',
                                ]
                            ]
                        ]) */?><!--
                    --><?/*= $form->field($model, 'message')->textArea(['rows' => 3]) */?>
                    <?php ActiveForm::end(); ?>
                    <!-- END FORM-->
                </div>
            </div>
        </div>
    </div>

