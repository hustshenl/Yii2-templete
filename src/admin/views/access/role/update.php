<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\AuthItem $model
 */
$this->title = Yii::t('rbac-admin', 'Update Role').': ' . $model->name;
$this->params['subTitle'] = Yii::t('rbac-admin', 'Update Role');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Roles'),
        'url' => ['role/index']],
    ['label' => $model->name,
        'url' => ['role/view', 'id' => $model->name]],
    $this->params['subTitle']
];
?>
<div class="auth-item-update">

	<h1><?= Html::encode($this->title) ?></h1>
	<?php
    echo $this->render('_form', [
        'model' => $model,
    ]);
    ?>
</div>
