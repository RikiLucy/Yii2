<?php


use yii\helpers\Html;
use app\components\ArticleWidget;
//'/' => 'Главная', '/catalog' => 'Каталог', '/catalog/el1' => 'Товар 1'
$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-default-index">
    <h1>Блог со статьями</h1>



    <? foreach ($article as $article): ?>
    <?= ArticleWidget::widget(['articles' => $article]); ?>

    <? endforeach; ?>
</div>
