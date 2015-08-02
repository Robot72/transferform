<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LoyaltyCard */

$this->title = 'Create Loyalty Card';
$this->params['breadcrumbs'][] = ['label' => 'Loyalty Cards', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="loyalty-card-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
