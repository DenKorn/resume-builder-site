<?php

namespace frontend\modules\resume\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProfileLanguages;

/**
 * ProfileLanguagesSearch represents the model behind the search form about `common\models\ProfileLanguages`.
 */
class ProfileLanguagesSearch extends ProfileLanguages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user__id', 'language_skill__id'], 'integer'],
            [['desired_fee'], 'number'],
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
        $query = ProfileLanguages::find();

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
            'id' => $this->id,
            'user__id' => $this->user__id,
            'language_skill__id' => $this->language_skill__id,
            'desired_fee' => $this->desired_fee,
        ]);

        return $dataProvider;
    }
}
