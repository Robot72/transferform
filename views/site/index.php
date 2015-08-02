<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */

$this->title = 'Transfer form';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Форма заказа трансфера!</h1>

        <p class="lead">Выберите точку отправления и точку назначения. Также не забудьте заполнить другие поля.</p>

    </div>

    <div class="body-content">
    <?php $form = ActiveForm::begin(['id' => 'transfer-form']); ?>
        <div class="row">
            <div class="col-lg-6">
                <?= $form->field($transfer, 'from')->dropDownList(ArrayHelper::map($directions, 'id', 'name')); ?>
            </div>
            <div class="col-lg-6">
                <?= $form->field($transfer, 'to')->dropDownList(ArrayHelper::map($directions, 'id', 'name')); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <?= $form->field($transfer, 'date') ?>
                <?= $form->field($transfer, 'countPassengers')->label('Passenger number') ?>
                <?= $form->field($transfer, 'name'); ?>
            </div>
            <div class="col-lg-4">
                <?= $form->field($transfer, 'time') ?>
                <?= Html::activeCheckbox($transfer, 'childChair') ?>
                <?= $form->field($transfer, 'phone'); ?>
            </div>
            <div class="col-lg-4">
                <?= $form->field($transfer, 'loyalty')->dropDownList(ArrayHelper::map($cards, 'id', 'name')); ?>
                <?= $form->field($transfer, 'cardNumber'); ?>
                <?= $form->field($transfer, 'email'); ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                
                <p class="alert alert-success">Price: </p>
                <?= Html::submitButton('Submit', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    <?php ActiveForm::end(); ?>
    </div>
</div>
