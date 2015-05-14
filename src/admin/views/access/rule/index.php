<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var mdm\admin\models\AuthItemSearch $searchModel
 */
$this->title = Yii::t('rbac-admin', 'Rules');
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    $this->params['subTitle']
];
?>
<div class="row rule-index">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i><span
                        class="caption-subject bold uppercase"><?= Html::encode($this->title) ?></span>
                </div>
                <div class="actions">
                    <?= Html::a(Yii::t('rbac-admin', 'Create Rule'), ['create'], ['class' => 'btn btn-success']) ?>
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
                        ['class' => 'yii\grid\ActionColumn',],
                    ],
                ]);
                Pjax::end();
                ?>
            </div>
        </div>
    </div>
</div>