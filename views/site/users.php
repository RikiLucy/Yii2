<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-user">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Tut budut users!
        <br>
        <? foreach ($user as $user): ?>
        <b> LOGIN: <?=$user->login ?></b><br>
        <i> PASSWORD: <?=$user->password ?></i><br><br>
        <? endforeach; ?>
    </p>


</div>
