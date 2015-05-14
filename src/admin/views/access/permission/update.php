<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */

$this->title = Yii::t('rbac-admin', 'Update Permission') . ': ' . $model->name;
$this->params['subTitle'] = Yii::t('rbac-admin', 'Update Permission');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Permission'),
        'url' => ['permission/index']],
    ['label' => $model->name,
        'url' => ['permission/view', 'id' => $model->name]],
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
