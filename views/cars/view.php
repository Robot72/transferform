<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TypeCar */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = ['label' => 'Типы авто', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-car-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'name',
            'max_passengers',
            'price',
            'price_is_for_one',
            'coefficient',
        ],
    ]) ?>

</div>
