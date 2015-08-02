<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\SearchPlaceDestination */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пункты назначения';
$this->params['breadcrumbs'][] = ['label' => 'Форма заказа трансфера', 'url' => ['/managecontent/order-form']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="place-destination-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить пункт назначения', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'id_direction' => [
                'label' => 'Направление',
                'attribute' => 'id_direction',
                'content'   => function($model, $key, $index, $column){
                    return \app\models\Directions::find()
                            ->where(['id' => $model->id_direction])
                            ->one()
                            ->name;
                }
            ],
            'name' => [
                'label' => 'Пункт назначения',
                'attribute' => 'name',
            ],
            'attribute' => [
                'label' => 'Атрибут',
                'attribute' => 'attribute',
                'content' => function($model, $key, $index, $column) {
                    return $model->getAttributeName();
                }
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
