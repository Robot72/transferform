<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TypeCar */

$this->title = 'Create Type Car';
$this->params['breadcrumbs'][] = ['label' => 'Type Cars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-car-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
