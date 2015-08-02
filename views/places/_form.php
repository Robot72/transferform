<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Directions;

/* @var $this yii\web\View */
/* @var $model app\models\PlaceDestination */
/* @var $form yii\widgets\ActiveForm */
$itemsDirection = ArrayHelper::map(Directions::find()->all(), 'id', 'name');
?>

<div class="place-destination-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => 255]) ?>

    <?= $form->field($model, 'id_direction')->dropDownList($itemsDirection) ?>

    <?= $form->field($model, 'attribute')->dropDownList($model->getArrayAttributes()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Создать' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
