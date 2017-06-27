<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Switchport;

/**
 * SwitchportSearch represents the model behind the search form about `app\models\Switchport`.
 */
class SwitchportSearch extends Switchport
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['switchPort_id', 'switchPort_switchId', 'switchPort_speed'], 'integer'],
            [['switchPort_description'], 'safe'],
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
        $query = Switchport::find();

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
            'switchPort_id' => $this->switchPort_id,
            'switchPort_switchId' => $this->switchPort_switchId,
            'switchPort_speed' => $this->switchPort_speed,
        ]);

        $query->andFilterWhere(['like', 'switchPort_description', $this->switchPort_description]);

        return $dataProvider;
    }
}
