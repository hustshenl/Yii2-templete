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
<div class="assignment-index">

	<h1><?= Html::encode($this->title) ?></h1>
    <!--<p>
        <?/*= Html::a(Yii::t('rbac-admin', 'Create Admin'), ['create'], ['class' => 'btn btn-success']) */?>
    </p>-->
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
