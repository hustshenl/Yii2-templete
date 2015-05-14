<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */

$this->title = Yii::t('rbac-admin', 'Update Permission') . ': ' . $model->name;
$this->params['subTitle'] = Yii::t('rbac-admin', 'Update Permission');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Permission'), 'url' => ['index']],
    ['label' => $model->name, 'url' => ['view', 'id' => $model->name]],
    $this->params['subTitle']
];
?>
<div class="row permission-update">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings"></i><?= Html::encode($this->title) ?>
                </div>
                <div class="actions btn-set">
                </div>
            </div>


            <?php echo $this->render('_form', [
                'model' => $model,
            ]); ?>

        </div>
    </div>
</div>
