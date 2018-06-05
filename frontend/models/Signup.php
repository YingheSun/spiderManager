<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "yii_signup".
 *
 * @property int $id ID
 * @property int $member_id 用户ID
 * @property int $academy_id 报名院校
 * @property string $avatar 用户照片
 * @property string $real_name 真实姓名
 * @property string $card 身份证号
 * @property string $phone 手机号
 * @property string $email 邮箱
 * @property string $province 省份
 * @property string $city 城市
 * @property string $area 地区
 * @property string $sex 性别
 * @property string $birthday 生日
 * @property string $marital 婚姻状况
 * @property string $emergency_name 紧急联系人
 * @property string $emergency_phone 紧急联系人手机号
 * @property string $education 最高学历
 * @property int $education_start_time 入学时间
 * @property int $education_end_time 毕业时间
 * @property string $university 毕业院校
 * @property string $university_category 院校分类
 * @property string $university_style 学习方式
 * @property string $academic_degree 最高学位
 * @property string $question_1 自述短文1
 * @property string $answer_1 自述短文答案1
 * @property string $question_2 自述短文2
 * @property string $answer_2 自述短文答案2
 * @property string $question_3 自述短文3
 * @property string $answer_3 自述短文答案3
 * @property string $card_front 身份证正面
 * @property string $card_back 身份证反面
 * @property string $diploma_scan 毕业证扫描件
 * @property string $academic_scan 学位证扫描件
 * @property string $postgraduate_diploma_scan 研究生毕业证扫描件
 * @property string $postgraduate_academic_scan 研究生学位证扫描件
 * @property string $report_card 本科阶段成绩单
 * @property string $postgraduate_report_card 研究生阶段成绩单
 * @property string $resume_chinese 中文简历
 * @property string $company_organization_chart 单位组织结构图
 * @property string $resume_english 英文简历
 * @property string $english_essays 英文申请短文
 * @property string $additional_material 附加材料
 * @property string $interview_batch 面试批次
 * @property int $status 状态（1：个人信息完成，2：教育背景完成，3：工作背景完成，4：文件上传完成，5：自述短文完成，6：确认并提交）
 * @property string $status_reason 未通过原因
 * @property int $created_at 申请时间
 * @property int $updated_at 编辑时间
 */
class Signup extends \yii\db\ActiveRecord
{
    const STATUS_1 = 1;
    const STATUS_2 = 2;
    const STATUS_3 = 3;
    const STATUS_4 = 4;
    const STATUS_5 = 5;
    const STATUS_6 = 6;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%signup}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'academy_id', 'avatar', 'real_name', 'card', 'phone', 'email', 'province', 'city', 'area', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'education', 'education_start_time', 'education_end_time', 'university', 'university_category', 'university_style', 'academic_degree', 'question_1', 'answer_1', 'question_2', 'answer_2', 'question_3', 'answer_3', 'card_front', 'card_back', 'diploma_scan', 'academic_scan', 'report_card', 'resume_chinese', 'company_organization_chart', 'interview_batch'], 'required'],
            [['member_id', 'academy_id', 'education_start_time', 'education_end_time', 'status', 'created_at', 'updated_at'], 'integer'],
            [['answer_1', 'answer_2', 'answer_3', 'status_reason'], 'string'],
            [['avatar'], 'string', 'max' => 100],
            [['real_name', 'phone', 'province', 'city', 'area', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'education', 'university_category', 'university_style', 'academic_degree'], 'string', 'max' => 20],
            [['card'], 'string', 'max' => 18],
            [['email', 'university', 'card_front', 'card_back', 'diploma_scan', 'academic_scan', 'postgraduate_diploma_scan', 'postgraduate_academic_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'interview_batch'], 'string', 'max' => 50],
            [['question_1', 'question_2', 'question_3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => 'Member ID',
            'academy_id' => 'Academy ID',
            'avatar' => 'Avatar',
            'real_name' => 'Real Name',
            'card' => 'Card',
            'phone' => 'Phone',
            'email' => 'Email',
            'province' => 'Province',
            'city' => 'City',
            'area' => 'Area',
            'sex' => 'Sex',
            'birthday' => 'Birthday',
            'marital' => 'Marital',
            'emergency_name' => 'Emergency Name',
            'emergency_phone' => 'Emergency Phone',
            'education' => 'Education',
            'education_start_time' => 'Education Start Time',
            'education_end_time' => 'Education End Time',
            'university' => 'University',
            'university_category' => 'University Category',
            'university_style' => 'University Style',
            'academic_degree' => 'Academic Degree',
            'question_1' => 'Question 1',
            'answer_1' => 'Answer 1',
            'question_2' => 'Question 2',
            'answer_2' => 'Answer 2',
            'question_3' => 'Question 3',
            'answer_3' => 'Answer 3',
            'card_front' => 'Card Front',
            'card_back' => 'Card Back',
            'diploma_scan' => 'Diploma Scan',
            'academic_scan' => 'Academic Scan',
            'postgraduate_diploma_scan' => 'Postgraduate Diploma Scan',
            'postgraduate_academic_scan' => 'Postgraduate Academic Scan',
            'report_card' => 'Report Card',
            'postgraduate_report_card' => 'Postgraduate Report Card',
            'resume_chinese' => 'Resume Chinese',
            'company_organization_chart' => 'Company Organization Chart',
            'resume_english' => 'Resume English',
            'english_essays' => 'English Essays',
            'additional_material' => 'Additional Material',
            'interview_batch' => 'Interview Batch',
            'status' => 'Status',
            'status_reason' => 'Status Reason',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public static function getInfoByMid($member_id,$academy_id){
        $signup = self::find()->where(['member_id'=>$member_id,'academy_id'=>$academy_id])->asArray()->one();
        return $signup;
    }



}
