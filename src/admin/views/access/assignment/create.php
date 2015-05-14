<?php
use yii\helpers\Html;
use hustshenl\metronic\widgets\Button;
use hustshenl\metronic\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\user\SignupForm */

$this->title = \Yii::t('rbac-admin', 'Create Admin');;
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Assignments'), 'url' => ['index']],
    $this->params['subTitle']
];
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
                <?= $form->field($model, 'username') ?>
                <?= $form->field($model, 'email') ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'nickname') ?>
                <?= $form->field($model, 'phone') ?>
                <?= $form->field($model, 'remark')->textArea(['rows' => 3]) ?>

                <?php ActiveForm::end(); ?>
                <!-- END FORM-->
            </div>
        </div>
    </div>
</div>
