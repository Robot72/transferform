<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dependency;

/**
 * SearchDependency represents the model behind the search form about `app\models\Dependency`.
 */
class SearchDependency extends Dependency
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'from', 'to', 'price', 'require_from', 'require_to', 'require_name', 'require_phone', 'require_email', 'require_date', 'require_time'], 'integer'],
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
        $query = Dependency::find();

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
            'from' => $this->from,
            'to' => $this->to,
            'price' => $this->price,
            'require_from' => $this->require_from,
            'require_to' => $this->require_to,
            'require_name' => $this->require_name,
            'require_phone' => $this->require_phone,
            'require_email' => $this->require_email,
            'require_date' => $this->require_date,
            'require_time' => $this->require_time,
        ]);

        return $dataProvider;
    }
}
