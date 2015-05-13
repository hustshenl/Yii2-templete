<?php
use yii\helpers\Html;
use hustshenl\metronic\widgets\ActiveForm;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

$this->title = 'Success.';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-request-password-reset">
    <h3><?= Html::encode($this->title) ?></h3>

    <p>Check your email for further instructions.</p>

    <p><?= Html::a('Back Home', Url::home(), ['class' => 'btn btn-success pull-right',] ) ?></p>
<!--    <div class="form-actions">
        <?/*= Html::button('Close', ['class' => 'btn btn-success pull-right', 'onclick' => 'window.open(\'about:blank\',\'_self\');window.close();',] ) */?>
    </div>-->


</div>
