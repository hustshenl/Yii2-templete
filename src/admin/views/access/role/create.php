<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\AuthItem $model
 */

$this->title = \Yii::t('rbac-admin', 'Create Role');
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Roles'), 'url' => ['index']],
    $this->params['subTitle']
];
?>
<div class="row role-create">
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
