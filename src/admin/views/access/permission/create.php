<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */

$this->title = \Yii::t('rbac-admin', 'Create Permission');
$this->params['subTitle'] = \Yii::t('rbac-admin', 'Create Permission');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Permission'),
        'url' => ['permission/index']],
    $this->params['subTitle']
];
?>
<div class="auth-item-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
