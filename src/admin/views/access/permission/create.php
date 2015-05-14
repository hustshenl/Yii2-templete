<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */

$this->title = \Yii::t('rbac-admin', 'Create Permission');
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Permissions'), 'url' => ['index']],
    $this->params['subTitle']
];
?>
<div class="row permission-create">
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
