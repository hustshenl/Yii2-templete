<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\Route $model
 * @var ActiveForm $form
 */

$this->title = Yii::t('rbac-admin', 'Create Route');
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Routes'),
        'url' => ['index']],
    $this->params['subTitle']
];
?>
<div class="row route-create">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="icon-settings"></i><?= Html::encode($this->title) ?>
                </div>
                <div class="actions btn-set">
                </div>
            </div>
	<?php $form = ActiveForm::begin(); ?>
		<?= $form->field($model, 'route') ?>
		<div class="form-group">
			<?= Html::submitButton(Yii::t('rbac-admin', 'Create'), ['class' => 'btn btn-primary']) ?>
		</div>
	<?php ActiveForm::end(); ?>

</div>
</div>
</div>
