<?php

use yii\helpers\Html;
use common\components\SimilarArticle;

/* @var $this yii\web\View */
/* @var $model common\models\Article */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Items', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>

<div class="item-view">
    <div class="container text-center">
        <h1><?= Html::encode($this->title) ?></h1>
        <img src="<?= $model->img ?>" alt="">
        <h4 class="my-3"><?= $model->mstandart ?></h4>
        <p class="my-3"><?= $model->content ?></p>
    </div>
    <?= SimilarArticle::widget() ?>
</div>