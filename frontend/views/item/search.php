<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap4\LinkPager;

/* @var $this yii\web\View */
/* @var $searchModel common\ArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Search: ' . $searchStr;
$this->params['breadcrumbs'][] = "Search";
?>

<div class="item-index">
    <div class="container">
        <h1 class="text-center my-4"><?= Html::encode($this->title) ?></h1>
        <form action="<?= Url::to(['item/search']) ?>" method="get">
            <div class="input-group mb-3">
                <input type="text" class="form-control" name='search' placeholder="Search..." aria-label="Search..." aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
            </div>
        </form>
        <?php if ($pages->totalCount > 0) : ?>
            <div class="row justify-content-center">
                <?php foreach ($items as $item) : ?>
                    <div class="col-md-6 shadow-sm article-box border">
                        <a href="<?= Url::to(['item/view', 'id' => $item->id]) ?>">
                            <h3><?= $item->title ?></h3>
                        </a>
                        <p><?= "$item->material $item->mstandart пробы" ?></p>
                        <?= Html::a('Add to favorites', url::to(['home/index'])) ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <h3>Nothing found</h3>
        <?php endif; ?>
        <div class="d-flex justify-content-center my-4">
            <?= LinkPager::widget([
                'pagination' => $pages,
            ]) ?>
        </div>
    </div>
</div>