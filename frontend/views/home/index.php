<?php

use yii\helpers\Url;
use yii\helpers\Html;

$this->title = 'Favorites';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <h1 class="text-center my-4"><?= Html::encode($this->title) ?></h1>
    <div class="row justify-content-center">
        <?php foreach ($items as $item) : ?>
            <div class="col-md-6 shadow-sm article-box border">
                <a href="<?= Url::to(['article/view', 'id' => $item->id]) ?>">
                    <h3><?= $item->title ?></h3>
                </a>
                <p><?= "$item->material $item->mstandart пробы" ?></p>
                <?= Html::a('Delete from favorites', url::to(['home/delete-from-favorites', 'itemId' => $item->id])) ?>
            </div>
        <?php endforeach; ?>
    </div>
</div>