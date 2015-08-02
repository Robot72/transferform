<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dependency */

$this->title = 'Изменить зависимость "Откуда -> Куда": ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = ['label' => 'Откуда -> Куда (параметы)', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Изменение';
?>
<div class="dependency-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
