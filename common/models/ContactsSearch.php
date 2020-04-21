<?php

namespace common\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Contacts;

/**
 * ContactsSearch represents the model behind the search form of `common\models\Contacts`.
 */
class ContactsSearch extends Contacts
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contact_id', 'contact_user'], 'integer'],
            [['contact_name', 'contact_surname', 'all_phones'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Contacts::find();

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
            'contact_id' => $this->contact_id,
            'contact_user' => $this->contact_user,
        ]);

        $query->andFilterWhere(['like', 'contact_name', $this->contact_name])
            ->andFilterWhere(['like', 'contact_surname', $this->contact_surname])
            ->andFilterWhere(['like', 'all_phones', $this->all_phones]);

        return $dataProvider;
    }
}
