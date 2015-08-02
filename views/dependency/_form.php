<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Dependency */
/* @var $form yii\widgets\ActiveForm */
$places = ArrayHelper::map(app\models\PlaceDestination::find()->all(), 'id', 'name');
$isRequire = [
    0 => 'Не обязателен',
    1 => 'Обязателен',
]
?>

<div class="dependency-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'from')->dropDownList($places) ?>

    <?= $form->field($model, 'to')->dropDownList($places) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'require_from')->dropDownList($isRequire) ?>

    <?= $form->field($model, 'require_to')->dropDownList($isRequire) ?>

    <?= $form->field($model, 'require_name')->dropDownList($isRequire) ?>

    <?= $form->field($model, 'require_phone')->dropDownList($isRequire) ?>

    <?= $form->field($model, 'require_email')->dropDownList($isRequire) ?>

    <?= $form->field($model, 'require_date')->dropDownList($isRequire) ?>

    <?= $form->field($model, 'require_time')->dropDownList($isRequire) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
