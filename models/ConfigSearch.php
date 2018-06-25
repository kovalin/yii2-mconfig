<?php
/**
 * @author Anton Kovalin <9820498@gmail.com>
 */

namespace app\modules\mconfig\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\mconfig\models\Config;

/**
 * ConfigSearch represents the model behind the search form of `app\models\Config`.
 */
class ConfigSearch extends Config
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['param', 'val', 'default', 'label', 'type'], 'safe'],
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
        $query = Config::find();

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
        ]);

        $query->andFilterWhere(['like', 'param', $this->param])
            ->andFilterWhere(['like', 'val', $this->val])
            ->andFilterWhere(['like', 'default', $this->default])
            ->andFilterWhere(['like', 'label', $this->label])
            ->andFilterWhere(['like', 'type', $this->type]);

        return $dataProvider;
    }
}
