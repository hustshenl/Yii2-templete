<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\base\Menu */

$this->title = \Yii::t('admin', 'Create Menu');
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('admin', 'Menus'), 'url' => ['index']],
    $this->params['subTitle']
];
?>

<div class="row menu-create">
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

