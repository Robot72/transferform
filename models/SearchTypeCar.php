<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TypeCar;

/**
 * SearchTypeCar represents the model behind the search form about `app\models\TypeCar`.
 */
class SearchTypeCar extends TypeCar
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'max_passengers', 'price', 'price_is_for_one', 'coefficient'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TypeCar::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'max_passengers' => $this->max_passengers,
            'price' => $this->price,
            'price_is_for_one' => $this->price_is_for_one,
            'coefficient' => $this->coefficient,
        ]);

        return $dataProvider;
    }
}
