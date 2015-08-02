<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Directions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="directions-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php // $form->field($model, 'id_type_country')->textInput() ?>

    <?php // $form->field($model, 'id_type_car')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255])->label('Направление') ?>

    <?php // $form->field($model, 'country')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'max_passengers')->textInput()->label('Максимальное количество пассажиров для направления') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Изменить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
