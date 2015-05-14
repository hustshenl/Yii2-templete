<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model mdm\admin\models\AuthItem */

$this->title = Yii::t('rbac-admin', 'View Permission') . ': ' . $model->name;
$this->params['subTitle'] = Yii::t('rbac-admin', 'View Permission');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Permission'), 'url' => ['index']],
    ['label' => $model->name, 'url' => ['view', 'id' => $model->name]],
    $this->params['subTitle']
];
?>
    <div class="row permission-view">
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
                            'description:ntext',
                            'ruleName',
                            'data:ntext',
                        ],
                    ]);
                    ?>
                    <div class="row">
                        <div class="col-lg-5">
                            <?= Yii::t('rbac-admin', 'Avaliable') ?>:
                            <?php
                            echo Html::textInput('search_av', '', ['class' => 'role-search', 'data-target' => 'avaliable']) . '<br>';
                            echo Html::listBox('roles', '', $avaliable, [
                                'id' => 'avaliable',
                                'multiple' => true,
                                'size' => 20,
                                'style' => 'width:100%']);
                            ?>
                        </div>
                        <div class="col-lg-1">
                            &nbsp;<br><br>
                            <?php
                            echo Html::a('>>', '#', ['class' => 'btn btn-success', 'data-action' => 'assign']) . '<br>';
                            echo Html::a('<<', '#', ['class' => 'btn btn-success', 'data-action' => 'delete']) . '<br>';
                            ?>
                        </div>
                        <div class="col-lg-5">
                            <?= Yii::t('rbac-admin', 'Assigned') ?>:
                            <?php
                            echo Html::textInput('search_asgn', '', ['class' => 'role-search', 'data-target' => 'assigned']) . '<br>';
                            echo Html::listBox('roles', '', $assigned, [
                                'id' => 'assigned',
                                'multiple' => true,
                                'size' => 20,
                                'style' => 'width:100%']);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
$this->render('_script', ['name' => $model->name]);
