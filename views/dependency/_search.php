<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SearchDependency */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="dependency-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'from') ?>

    <?= $form->field($model, 'to') ?>

    <?= $form->field($model, 'price') ?>

    <?= $form->field($model, 'require_from') ?>

    <?php // echo $form->field($model, 'require_to') ?>

    <?php // echo $form->field($model, 'require_name') ?>

    <?php // echo $form->field($model, 'require_phone') ?>

    <?php // echo $form->field($model, 'require_email') ?>

    <?php // echo $form->field($model, 'require_date') ?>

    <?php // echo $form->field($model, 'require_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
