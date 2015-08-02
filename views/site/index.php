<?php
use yii\helpers\Html;
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
                
            </div>
            <div class="col-lg-6">

            </div>

        </div>
    <?php ActiveForm::end(); ?>
    </div>
</div>
