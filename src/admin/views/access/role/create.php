<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\AuthItem $model
 */

$this->title = \Yii::t('rbac-admin', 'Create Role');
$this->params['subTitle'] = \Yii::t('rbac-admin', 'Create Role');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Roles'),
        'url' => ['role/index']],
    $this->params['subTitle']
];
?>
<div class="auth-item-create">

	<h1><?= Html::encode($this->title) ?></h1>

	<?php echo $this->render('_form', [
        'model' => $model,
    ]); ?>

</div>
