<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Signup;

/**
 * SignupSearch represents the model behind the search form of `backend\models\Signup`.
 */
class SignupSearch extends Signup
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'member_id', 'academy_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['avatar', 'real_name', 'card', 'phone', 'email', 'province', 'city', 'area', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'education', 'education_start_time', 'education_end_time', 'university', 'university_category', 'university_style', 'academic_degree', 'question_1', 'answer_1', 'question_2', 'answer_2', 'question_3', 'answer_3', 'card_front', 'card_back', 'diploma_scan', 'academic_scan', 'postgraduate_diploma_scan', 'postgraduate_academic_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'interview_batch', 'status_reason'], 'safe'],
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
        $query = Signup::find();

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
            'member_id' => $this->member_id,
            'academy_id' => $this->academy_id,
            'education_start_time' => $this->education_start_time,
            'education_end_time' => $this->education_end_time,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'real_name', $this->real_name])
            ->andFilterWhere(['like', 'card', $this->card])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'province', $this->province])
            ->andFilterWhere(['like', 'city', $this->city])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'birthday', $this->birthday])
            ->andFilterWhere(['like', 'marital', $this->marital])
            ->andFilterWhere(['like', 'emergency_name', $this->emergency_name])
            ->andFilterWhere(['like', 'emergency_phone', $this->emergency_phone])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'university', $this->university])
            ->andFilterWhere(['like', 'university_category', $this->university_category])
            ->andFilterWhere(['like', 'university_style', $this->university_style])
            ->andFilterWhere(['like', 'academic_degree', $this->academic_degree])
            ->andFilterWhere(['like', 'question_1', $this->question_1])
            ->andFilterWhere(['like', 'answer_1', $this->answer_1])
            ->andFilterWhere(['like', 'question_2', $this->question_2])
            ->andFilterWhere(['like', 'answer_2', $this->answer_2])
            ->andFilterWhere(['like', 'question_3', $this->question_3])
            ->andFilterWhere(['like', 'answer_3', $this->answer_3])
            ->andFilterWhere(['like', 'card_front', $this->card_front])
            ->andFilterWhere(['like', 'card_back', $this->card_back])
            ->andFilterWhere(['like', 'diploma_scan', $this->diploma_scan])
            ->andFilterWhere(['like', 'academic_scan', $this->academic_scan])
            ->andFilterWhere(['like', 'postgraduate_diploma_scan', $this->postgraduate_diploma_scan])
            ->andFilterWhere(['like', 'postgraduate_academic_scan', $this->postgraduate_academic_scan])
            ->andFilterWhere(['like', 'report_card', $this->report_card])
            ->andFilterWhere(['like', 'postgraduate_report_card', $this->postgraduate_report_card])
            ->andFilterWhere(['like', 'resume_chinese', $this->resume_chinese])
            ->andFilterWhere(['like', 'company_organization_chart', $this->company_organization_chart])
            ->andFilterWhere(['like', 'resume_english', $this->resume_english])
            ->andFilterWhere(['like', 'english_essays', $this->english_essays])
            ->andFilterWhere(['like', 'additional_material', $this->additional_material])
            ->andFilterWhere(['like', 'interview_batch', $this->interview_batch])
            ->andFilterWhere(['like', 'status_reason', $this->status_reason]);

        return $dataProvider;
    }
}
