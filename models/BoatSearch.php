<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Boat;

/**
 * BoatSearch represents the model behind the search form about `app\models\Boat`.
 */
class BoatSearch extends Boat
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['boat_id', 'boat_imo'], 'integer'],
            [['boat_name'], 'safe'],
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
        $query = Boat::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'boat_id' => $this->boat_id,
            'boat_imo' => $this->boat_imo,
        ]);

        $query->andFilterWhere(['like', 'boat_name', $this->boat_name]);

        return $dataProvider;
    }
}
