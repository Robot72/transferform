<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Directions;

/**
 * SearchDirections represents the model behind the search form about `app\models\Directions`.
 */
class SearchDirections extends Directions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_type_country', 'id_type_car', 'max_passengers'], 'integer'],
            [['name', 'country'], 'safe'],
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
        $query = Directions::find();

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
            'id_type_country' => $this->id_type_country,
            'id_type_car' => $this->id_type_car,
            'max_passengers' => $this->max_passengers,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'country', $this->country]);

        return $dataProvider;
    }
}
