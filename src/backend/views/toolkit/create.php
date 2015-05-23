<?php
use yii\helpers\Html;
use hustshenl\metronic\widgets\Button;
use hustshenl\metronic\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \backend\models\AdminForm */

$this->title = \Yii::t('rbac-admin', 'Create Admin');;
$this->params['subTitle'] = \Yii::t('rbac-admin', 'Create Admin');
$this->params['breadcrumbs'] = [
    $this->params['subTitle']
];
?>

<div class="row">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings"></i><?/*= $this->title */?>
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
                                ['label' => Yii::t('app', 'Save'), 'options' => ['type' => 'submit', 'class' => 'btn btn-primary']]
                            ),
                            Button::widget(
                                ['label' => Yii::t('app', 'Back'), 'options' => ['class' => 'btn default control-back']]),
                        ]
                    ]
                ]); ?>
                <?= $form->field($model, 'username',['inputOptions'=>['class' => 'form-control','disabled'=>true]]) ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'nickname') ?>
                <?= $form->field($model, 'phone') ?>
                <?php ActiveForm::end(); ?>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
