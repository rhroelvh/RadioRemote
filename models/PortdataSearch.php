<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Portdata;

/**
 * PortdataSearch represents the model behind the search form about `app\models\Portdata`.
 */
class PortdataSearch extends Portdata
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['portData_id', 'portData_switchPortId', 'portData_troughput', 'portData_connected', 'portData_error'], 'integer'],
            [['portData_timeStamp'], 'safe'],
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
        $query = Portdata::find();

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
            'portData_id' => $this->portData_id,
            'portData_switchPortId' => $this->portData_switchPortId,
            'portData_troughput' => $this->portData_troughput,
            'portData_connected' => $this->portData_connected,
            'portData_error' => $this->portData_error,
            'portData_timeStamp' => $this->portData_timeStamp,
        ]);

        return $dataProvider;
    }
}
