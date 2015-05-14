<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\AuthItem $model
 */
$this->title = Yii::t('rbac-admin', 'Update Rule') . ': ' . $model->name;
$this->params['subTitle'] = Yii::t('rbac-admin', 'Update Rule');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Rules'), 'url' => ['index']],
    ['label' => $model->name, 'url' => ['view', 'id' => $model->name]],
    $this->params['subTitle']
];
?>
<div class="row rule-update">
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
