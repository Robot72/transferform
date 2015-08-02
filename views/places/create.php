<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PlaceDestination */

$this->title = 'Добавление пункта назначения';
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = ['label' => 'Пункты назначения', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="place-destination-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
