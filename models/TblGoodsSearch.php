<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TblGoods;

/**
 * TblGoodsSearch represents the model behind the search form about `app\models\TblGoods`.
 */
class TblGoodsSearch extends TblGoods
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'count'], 'integer'],
            [['name', 'email_provider', 'create_date'], 'safe'],
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
        $query = TblGoods::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id,
            'count' => $this->count,
            'create_date' => $this->create_date,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email_provider', $this->email_provider]);

        return $dataProvider;
    }
}
