<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Keluarga;

/**
 * KeluargaSearch represents the model behind the search form of `common\models\Keluarga`.
 */
class KeluargaSearch extends Keluarga
{
    /**
     * @inheritdoc
     */
	
	public $nik, $nama_karyawan;
	
    public function rules()
    {
        return [
            [['nik','contact_person_id', 'employee_person_id'], 'integer'],
            [['nama_karyawan', 'nama', 'tgl_lahir', 'hubungan', 'tgl_hubungan', 'gender', 'town_or_birth', 'dependent', 'status'], 'safe'],
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
        $query = Keluarga::find();
		$query->joinWith([
			'karyawan' => function($q)
			{
				$q->alias('k');
			}
		
		]);

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
            'contact_person_id' => $this->contact_person_id,
            'employee_person_id' => $this->employee_person_id,
            'tgl_lahir' => $this->tgl_lahir,
            'tgl_hubungan' => $this->tgl_hubungan,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'hubungan', $this->hubungan])
            ->andFilterWhere(['like', 'k.nama', $this->nama_karyawan])
            ->andFilterWhere(['like', 'k.nik', $this->nik])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'town_or_birth', $this->town_or_birth])
            ->andFilterWhere(['like', 'dependent', $this->dependent])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
