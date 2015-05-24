<?php
/* @var $this yii\web\View */

$this->title = '系统管理首页';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>系统管理首页!</h1>

        <p class="lead">请先设置系统管理Token，使用Token进行系统管理.</p>

        <p>添加管理员/toolkit/admin-add?access-token={token}</p>
        <p>编辑管理员/toolkit/admin-edit?access-token={token}</p>
        <p>添加管理员/toolkit/execute-sql?access-token={token}</p>
    </div>

</div>
