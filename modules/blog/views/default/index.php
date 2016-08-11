<?php


use yii\helpers\Html;
use app\components\ArticleWidget;
use yii\widgets\LinkPager;
//'/' => 'Главная', '/catalog' => 'Каталог', '/catalog/el1' => 'Товар 1'
$this->title = 'Blog';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blog-default-index">
    <h1>Блог со статьями</h1>
    <?= Html::a('Admin Panel', 'http://yii2/blog/articles') ?>


    <? foreach ($articles as $article): ?>
    <?= ArticleWidget::widget(['articles' => $article]); ?>

    <? endforeach;
    echo LinkPager::widget(['pagination' => $pages]);
    ?>


</div>
