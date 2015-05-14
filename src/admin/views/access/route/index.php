<?php

use yii\helpers\Html;

/**
 * @var yii\web\View $this
 */
$this->title = Yii::t('rbac-admin', 'Routes');
$this->params['subTitle'] = $this->title;
$this->params['breadcrumbs']['links'] = [
    $this->params['subTitle']
];
?>
    <div class="row role-index">
        <div class="col-md-12">
            <div class="portlet light">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-user"></i><span
                            class="caption-subject bold uppercase"><?= Html::encode($this->title) ?></span>
                    </div>
                    <div class="actions">
                        <?= Html::a(Yii::t('rbac-admin', 'Create route'), ['create'], ['class' => 'btn btn-success']) ?>
                    </div>
                </div>
                <div class="portlet-body row">
                    <div class="col-sm-5">
                        <?= Yii::t('rbac-admin', 'Avaliable') ?>:
                        <?php
                        echo Html::textInput('search_av', '', ['class' => 'role-search', 'data-target' => 'new']).' ';
                        echo Html::a('<span class="glyphicon glyphicon-refresh"></span>', '', ['id'=>'btn-refresh']);
                        echo '<br>';
                        echo Html::listBox('routes', '', $new, [
                            'id' => 'new',
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
                        echo Html::textInput('search_asgn', '', ['class' => 'role-search', 'data-target' => 'exists']) . '<br>';
                        echo Html::listBox('routes', '', $exists, [
                            'id' => 'exists',
                            'multiple' => true,
                            'size' => 20,
                            'style' => 'width:100%',
                            'options' => $existsOptions]);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
$this->render('_script');
