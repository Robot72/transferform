<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchTypeCar */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Тип авто';
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="type-car-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить тип авто', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            'name' => [
                'label' => 'Марка или категория авто)',
                'attribute' => 'name',
            ],
            'max_passengers' => [
                'label' => 'Макс. кол-во пасс-ов',
                'attribute' => 'max_passengers',
            ],
            'price' => [
                'label' => 'Стоимость?',
                'attribute' => 'price',
            ],
            'price_is_for_one' => [
                'label' => 'Стоимость за одного пас-а?',
                'attribute' => 'price_is_for_one',
            ],
            'coefficient' => [
                'label' => 'Коэффициент?',
                'attribute' => 'coefficient',
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
