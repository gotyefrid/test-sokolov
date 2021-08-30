<?php

use yii\helpers\Url;

?>
<div class="container">
    <h3 class="text-center my-4">Similar Posts</h3>
    <div class="row justify-content-center">
        <?php foreach ($model as $item) : ?>
            <div class="col-md-6 shadow-sm article-box border">
                <a href="<?= Url::to(['article/view', 'id' => $item->id]) ?>">
                    <h3><?= $item->title ?></h3>
                </a>
                <p><?= "$item->material $item->mstandart пробы" ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</div>