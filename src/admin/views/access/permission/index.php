<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\AuthItem */

$this->title = Yii::t('rbac-admin', 'Permission');
$this->params['subTitle'] = \Yii::t('rbac-admin', 'Permission');
$this->params['breadcrumbs']['links'] = [
    $this->params['subTitle']
];
?>
<div class="row permission-index">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i><span
                        class="caption-subject bold uppercase"><?= Html::encode($this->title) ?></span>
                </div>
                <div class="actions">
                    <?= Html::a(Yii::t('rbac-admin', 'Create Permission'), ['create'], ['class' => 'btn btn-success']) ?>
                </div>
            </div>
            <div class="portlet-body form">
                <?php
                Pjax::begin([
                    'enablePushState'=>false,
                ]);
                echo GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'columns' => [
                        ['class' => 'yii\grid\SerialColumn'],
                        [
                            'attribute' => 'name',
                            'label' => Yii::t('rbac-admin', 'Name'),
                        ],
                        [
                            'attribute' => 'description',
                            'label' => Yii::t('rbac-admin', 'Description'),
                        ],
                        ['class' => 'yii\grid\ActionColumn',],
                    ],
                ]);
                Pjax::end();
                ?>
            </div>
        </div>
    </div>
</div>
