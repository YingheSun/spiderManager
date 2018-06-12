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
            [['id', 'member_id', 'academy_id', 'fulltime_work_life', 'management_work_life', 'signup_step', 'signup_at', 'status', 'created_at', 'updated_at'], 'integer'],
            [['avatar', 'real_name', 'card', 'phone', 'email', 'homeplace', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'education', 'education_start_time', 'education_end_time', 'university', 'university_category', 'university_style', 'education2', 'academy2', 'university_style2', 'university_degree2', 'university_category2', 'degree2', 'category2', 'education_number2', 'education_major2', 'major_category2', 'professional_ranking2', 'educations_number2', 'education_start_time2', 'education_end_time2', 'education_content2', 'education3', 'academy3', 'university_style3', 'university_degree3', 'university_category3', 'education_number3', 'education_major3', 'major_category3', 'professional_ranking3', 'educations_number3', 'education_start_time3', 'education_end_time3', 'education_content3', 'chinese_company_name', 'english_company_name', 'turnover_year', 'company_size', 'main_business', 'Industry_category', 'company_nature', 'post_type', 'work_department', 'work_position', 'work_function1', 'work_function2', 'scale_responsible', 'work_starttime', 'annual_income', 'annual_income_start', 'management_number', 'position_situation', 'superior_name', 'superior_post', 'superior_phone', 'agree_contact_suoerior', 'other_work_experience', 'question_1', 'answer_1', 'question_2', 'answer_2', 'question_3', 'answer_3', 'card_front', 'card_back', 'diploma_scan', 'postgraduate_diploma_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'interview_batch', 'status_reason'], 'safe'],
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
        $query = Signup::find()->where("status_reason=''");

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
            'education_start_time2' => $this->education_start_time2,
            'education_end_time2' => $this->education_end_time2,
            'education_start_time3' => $this->education_start_time3,
            'education_end_time3' => $this->education_end_time3,
            'fulltime_work_life' => $this->fulltime_work_life,
            'management_work_life' => $this->management_work_life,
            'work_starttime' => $this->work_starttime,
            'signup_step' => $this->signup_step,
            'signup_at' => $this->signup_at,
            'status' => $this->status,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'avatar', $this->avatar])
            ->andFilterWhere(['like', 'real_name', $this->real_name])
            ->andFilterWhere(['like', 'card', $this->card])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'homeplace', $this->homeplace])
            ->andFilterWhere(['like', 'sex', $this->sex])
            ->andFilterWhere(['like', 'birthday', $this->birthday])
            ->andFilterWhere(['like', 'marital', $this->marital])
            ->andFilterWhere(['like', 'emergency_name', $this->emergency_name])
            ->andFilterWhere(['like', 'emergency_phone', $this->emergency_phone])
            ->andFilterWhere(['like', 'education', $this->education])
            ->andFilterWhere(['like', 'university', $this->university])
            ->andFilterWhere(['like', 'university_category', $this->university_category])
            ->andFilterWhere(['like', 'university_style', $this->university_style])
            ->andFilterWhere(['like', 'education2', $this->education2])
            ->andFilterWhere(['like', 'academy2', $this->academy2])
            ->andFilterWhere(['like', 'university_style2', $this->university_style2])
            ->andFilterWhere(['like', 'university_degree2', $this->university_degree2])
            ->andFilterWhere(['like', 'university_category2', $this->university_category2])
            ->andFilterWhere(['like', 'degree2', $this->degree2])
            ->andFilterWhere(['like', 'category2', $this->category2])
            ->andFilterWhere(['like', 'education_number2', $this->education_number2])
            ->andFilterWhere(['like', 'education_major2', $this->education_major2])
            ->andFilterWhere(['like', 'major_category2', $this->major_category2])
            ->andFilterWhere(['like', 'professional_ranking2', $this->professional_ranking2])
            ->andFilterWhere(['like', 'educations_number2', $this->educations_number2])
            ->andFilterWhere(['like', 'education_content2', $this->education_content2])
            ->andFilterWhere(['like', 'education3', $this->education3])
            ->andFilterWhere(['like', 'academy3', $this->academy3])
            ->andFilterWhere(['like', 'university_style3', $this->university_style3])
            ->andFilterWhere(['like', 'university_degree3', $this->university_degree3])
            ->andFilterWhere(['like', 'university_category3', $this->university_category3])
            ->andFilterWhere(['like', 'education_number3', $this->education_number3])
            ->andFilterWhere(['like', 'education_major3', $this->education_major3])
            ->andFilterWhere(['like', 'major_category3', $this->major_category3])
            ->andFilterWhere(['like', 'professional_ranking3', $this->professional_ranking3])
            ->andFilterWhere(['like', 'educations_number3', $this->educations_number3])
            ->andFilterWhere(['like', 'education_content3', $this->education_content3])
            ->andFilterWhere(['like', 'chinese_company_name', $this->chinese_company_name])
            ->andFilterWhere(['like', 'english_company_name', $this->english_company_name])
            ->andFilterWhere(['like', 'turnover_year', $this->turnover_year])
            ->andFilterWhere(['like', 'company_size', $this->company_size])
            ->andFilterWhere(['like', 'main_business', $this->main_business])
            ->andFilterWhere(['like', 'Industry_category', $this->Industry_category])
            ->andFilterWhere(['like', 'company_nature', $this->company_nature])
            ->andFilterWhere(['like', 'post_type', $this->post_type])
            ->andFilterWhere(['like', 'work_department', $this->work_department])
            ->andFilterWhere(['like', 'work_position', $this->work_position])
            ->andFilterWhere(['like', 'work_function1', $this->work_function1])
            ->andFilterWhere(['like', 'work_function2', $this->work_function2])
            ->andFilterWhere(['like', 'scale_responsible', $this->scale_responsible])
            ->andFilterWhere(['like', 'annual_income', $this->annual_income])
            ->andFilterWhere(['like', 'annual_income_start', $this->annual_income_start])
            ->andFilterWhere(['like', 'management_number', $this->management_number])
            ->andFilterWhere(['like', 'position_situation', $this->position_situation])
            ->andFilterWhere(['like', 'superior_name', $this->superior_name])
            ->andFilterWhere(['like', 'superior_post', $this->superior_post])
            ->andFilterWhere(['like', 'superior_phone', $this->superior_phone])
            ->andFilterWhere(['like', 'agree_contact_suoerior', $this->agree_contact_suoerior])
            ->andFilterWhere(['like', 'other_work_experience', $this->other_work_experience])
            ->andFilterWhere(['like', 'question_1', $this->question_1])
            ->andFilterWhere(['like', 'answer_1', $this->answer_1])
            ->andFilterWhere(['like', 'question_2', $this->question_2])
            ->andFilterWhere(['like', 'answer_2', $this->answer_2])
            ->andFilterWhere(['like', 'question_3', $this->question_3])
            ->andFilterWhere(['like', 'answer_3', $this->answer_3])
            ->andFilterWhere(['like', 'card_front', $this->card_front])
            ->andFilterWhere(['like', 'card_back', $this->card_back])
            ->andFilterWhere(['like', 'diploma_scan', $this->diploma_scan])
            ->andFilterWhere(['like', 'postgraduate_diploma_scan', $this->postgraduate_diploma_scan])
            ->andFilterWhere(['like', 'report_card', $this->report_card])
            ->andFilterWhere(['like', 'postgraduate_report_card', $this->postgraduate_report_card])
            ->andFilterWhere(['like', 'resume_chinese', $this->resume_chinese])
            ->andFilterWhere(['like', 'company_organization_chart', $this->company_organization_chart])
            ->andFilterWhere(['like', 'resume_english', $this->resume_english])
            ->andFilterWhere(['like', 'english_essays', $this->english_essays])
            ->andFilterWhere(['like', 'additional_material', $this->additional_material])
            ->andFilterWhere(['like', 'interview_batch', $this->interview_batch]);
//            ->andFilterWhere(['like', 'status_reason', $this->status_reason]);

        return $dataProvider;
    }
}
