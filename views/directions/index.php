<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchDirections */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Направления';
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="directions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить направление', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            
            'name' => [
                'label' => 'Наименование направлений',
                'attribute' => 'name',
            ],
            'max_passengers' => [
                'label' => 'Максимальное количество пассажиров',
                'attribute' => 'max_passengers',
            ],
            // 'max_passengers',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
