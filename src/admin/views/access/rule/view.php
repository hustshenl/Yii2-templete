<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var mdm\admin\models\AuthItem $model
 */
$this->title = Yii::t('rbac-admin', 'View Rule') . ': ' . $model->name;
$this->params['subTitle'] = Yii::t('rbac-admin', 'View Rule');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Rules'), 'url' => ['index']],
    ['label' => $model->name, 'url' => ['view', 'id' => $model->name]],
    $this->params['subTitle']
];
?>
<div class="row role-view">
    <div class="col-md-12">
        <div class="portlet ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i><span
                        class="caption-subject bold uppercase"><?= Html::encode($this->title) ?></span>
                </div>
                <div class="actions">
                    <?= Html::a(Yii::t('rbac-admin', 'Update'), ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
                    <?php
                    echo Html::a(Yii::t('rbac-admin', 'Delete'), ['delete', 'id' => $model->name], [
                        'class' => 'btn btn-danger',
                        'data-confirm' => Yii::t('rbac-admin', 'Are you sure to delete this item?'),
                        'data-method' => 'post',
                    ]);
                    ?>
                </div>

            </div>
            <div class="portlet-body">


                <?php
                echo DetailView::widget([
                    'model' => $model,
                    'attributes' => [
                        'name',
                        'className',
                    ],
                ]);
                ?>
            </div>
        </div>
    </div>
</div>
