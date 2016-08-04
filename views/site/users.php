<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use app\components\BreadcrumbWidget;
//'/' => 'Главная', '/catalog' => 'Каталог', '/catalog/el1' => 'Товар 1'
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
        <?= BreadcrumbWidget::widget(['bread' => ['/' => 'Главная', '/catalog' => 'Каталог', '/catalog/el1' => 'Товар 1']]);?>
    </p>


</div>
