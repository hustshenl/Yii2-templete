<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Assignment */

$this->title = Yii::t('rbac-admin', 'Assignments');
$this->params['subTitle'] = \Yii::t('rbac-admin', 'Assignments');
$this->params['breadcrumbs']['links'] = [
    $this->params['subTitle']
];
?>

<div class="row assignment-index">
    <div class="col-md-12">
        <div class="portlet light">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-user"></i><span
                        class="caption-subject bold uppercase"><?= Html::encode($this->title) ?></span>
                </div>
                <div class="actions">
                    <?/*= Html::a(Yii::t('rbac-admin', 'Create Admin'), ['create'], ['class' => 'btn btn-success']) */?>
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
                        'username',
                        'nickname',
                        'email',

                        [
                            'class' => 'yii\grid\ActionColumn',
                            'template'=>'{view}'
                        ],
                    ],
                ]);
                Pjax::end();
                ?>
            </div>
        </div>
    </div>
</div>
