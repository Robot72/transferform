<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Dependency */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = ['label' => 'Откуда -> Куда (параметы)', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependency-view">

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
            'from',
            'to',
            'price',
            //'require_from',
            //'require_to',
            //'require_name',
            //'require_phone',
            //'require_email:email',
            //'require_date',
            //'require_time:datetime',
        ],
    ]) ?>

</div>
