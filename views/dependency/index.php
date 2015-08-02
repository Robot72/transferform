<?php

use yii\helpers\Html;
use yii\grid\GridView;
use app\models\PlaceDestination;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchDependency */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Откуда -> Куда (параметы)';
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dependency-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить зависимость: "Откуда -> Куда"', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'from' => [
                'label' => 'Пункт отправления',
                'attribute' => 'from',
                'content' => function($model, $key, $index, $column) {
                    return PlaceDestination::findOne(['id' => $model->from])
                            ->name;
                }
            ],
            'to' => [
                'label' => 'Пункт назначения',
                'attribute' => 'to',
                'content' => function($model, $key, $index, $column) {
                    return PlaceDestination::findOne(['id' => $model->to])
                            ->name;
                }
            ],
            'price',
            //'require_from',
            // 'require_to',
            // 'require_name',
            // 'require_phone',
            // 'require_email:email',
            // 'require_date',
            // 'require_time:datetime',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
