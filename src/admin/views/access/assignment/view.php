<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model yii\web\IdentityInterface */

$this->title = Yii::t('rbac-admin', 'Assignment') . ': ' . $model->{$usernameField};
$this->params['subTitle'] = Yii::t('rbac-admin', 'Assignment');
$this->params['breadcrumbs']['links'] = [
    ['label' => \Yii::t('rbac-admin', 'Users'),
        'url' => ['index']],
    $this->params['subTitle']
];

?>
    <div class="row assignment-view">
        <div class="col-md-12">
            <div class="portlet ">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i><span
                            class="caption-subject bold uppercase"><?= Html::encode($this->title) ?></span>
                    </div>
                    <div class="actions">
                        <?= Html::a(Yii::t('rbac-admin', 'Users'), ['index'], ['class' => 'btn btn-success']) ?>
                    </div>

                </div>
                <div class="portlet-body">
                    <div class="row">
                        <div class="col-sm-5">
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
                        <div class="col-sm-1">
                            &nbsp;<br><br>
                            <?php
                            echo Html::a('>>', '#', ['class' => 'btn btn-success', 'data-action' => 'assign']) . '<br>';
                            echo Html::a('<<', '#', ['class' => 'btn btn-success', 'data-action' => 'delete']) . '<br>';
                            ?>
                        </div>
                        <div class="col-sm-5">
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
$this->render('_script', ['id' => $model->{$idField}]);
