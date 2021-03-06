<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ItemSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="item-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'material') ?>

    <?= $form->field($model, 'mstandart') ?>

    <?= $form->field($model, 'insert') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'price') ?>

    <?php // echo $form->field($model, 'content') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'img') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
