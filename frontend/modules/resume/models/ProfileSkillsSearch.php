<?php

namespace frontend\modules\resume\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\ProfileSkills;

/**
 * ProfileSkillsSearch represents the model behind the search form about `common\models\ProfileSkills`.
 */
class ProfileSkillsSearch extends ProfileSkills
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user__id', 'level'], 'integer'],
            [['skill'], 'safe'],
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
        $query = ProfileSkills::find();

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
            'level' => $this->level,
        ]);

        $query->andFilterWhere(['like', 'skill', $this->skill]);

        return $dataProvider;
    }
}
