<?php

namespace backend\models;

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
 * @property string $homeplace 出生地
 * @property string $sex 性别
 * @property string $birthday 生日
 * @property string $marital 婚姻状况
 * @property string $emergency_name 紧急联系人
 * @property string $emergency_phone 紧急联系人手机号
 * @property string $education 最高学历
 * @property string $education_start_time 入学时间
 * @property string $education_end_time 毕业时间
 * @property string $university 毕业院校
 * @property string $university_category 院校分类
 * @property string $university_style 学习方式
 * @property string $education2 最高学历2
 * @property string $academy2 本专院校
 * @property string $university_style2 学习方式
 * @property string $university_degree2 学位
 * @property string $university_category2 院校分类
 * @property string $degree2 本专科学位
 * @property string $category2 分类
 * @property string $education_number2 学历证书编号
 * @property string $education_major2 专业
 * @property string $major_category2 专业类别
 * @property string $professional_ranking2 专业排名
 * @property string $educations_number2 学位证书编号
 * @property string $education_start_time2 入学时间
 * @property string $education_end_time2 毕业时间
 * @property string $education_content2 备注
 * @property string $education3 其他学历
 * @property string $academy3 毕业院校
 * @property string $university_style3 学习方式
 * @property string $university_degree3 学位
 * @property string $university_category3 毕业院校分类
 * @property string $education_number3 学历证书编号
 * @property string $education_major3 专业
 * @property string $major_category3 专业类别
 * @property string $professional_ranking3 专业排名
 * @property string $educations_number3 学历证书编号
 * @property string $education_start_time3 入学时间
 * @property string $education_end_time3 截止时间
 * @property string $education_content3 备注
 * @property int $fulltime_work_life 全职工作年限
 * @property int $management_work_life 管理岗位工作年限
 * @property string $chinese_company_name 公司中文名称
 * @property string $english_company_name 公司英文名称
 * @property string $turnover_year 公司年营业额
 * @property string $company_size 公司规模
 * @property string $main_business 主营业务
 * @property string $Industry_category 行业类别
 * @property string $company_nature 公司性质
 * @property string $post_type 岗位类型
 * @property string $work_department 工作部门
 * @property string $work_position 工作职位
 * @property string $work_function1 工作职能
 * @property string $work_function2 工作职能
 * @property string $scale_responsible 负责预算规模（万元）
 * @property string $work_starttime 工作开始时间
 * @property string $annual_income 目前年收入
 * @property string $annual_income_start 起始年收入
 * @property string $management_number 负责人数
 * @property string $position_situation 负责岗位情况
 * @property string $superior_name 上级名称
 * @property string $superior_post 上级职位
 * @property string $superior_phone 上级电话
 * @property string $agree_contact_suoerior 是否同意与上级电话联系
 * @property string $other_work_experience 其他工作经历
 * @property string $question_1 自述短文1
 * @property string $answer_1 自述短文答案1
 * @property string $question_2 自述短文2
 * @property string $answer_2 自述短文答案2
 * @property string $question_3 自述短文3
 * @property string $answer_3 自述短文答案3
 * @property string $card_front 身份证正面
 * @property string $card_back 身份证反面
 * @property string $diploma_scan 毕业证扫描件
 * @property string $postgraduate_diploma_scan 研究生毕业证扫描件
 * @property string $report_card 本科阶段成绩单
 * @property string $postgraduate_report_card 研究生阶段成绩单
 * @property string $resume_chinese 中文简历
 * @property string $company_organization_chart 单位组织结构图
 * @property string $resume_english 英文简历
 * @property string $english_essays 英文申请短文
 * @property string $additional_material 附加材料
 * @property string $interview_batch 面试批次
 * @property int $signup_step 提交材料步骤
 * @property int $signup_at 提交时间
 * @property int $status 状态：0：未提交，1：审核第一步，2审核第二步，3：审核第三步，4：审核第四步，5：审核第五步，6：审核第六步，7：审核通过，8：发放offer，9：缴费完成
 * @property string $status_reason 未通过原因
 * @property int $created_at 申请时间
 * @property int $updated_at 编辑时间
 */
class Signup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yii_signup';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'academy_id'], 'required'],
            [['member_id', 'academy_id', 'fulltime_work_life', 'management_work_life', 'signup_step', 'signup_at', 'status', 'created_at', 'updated_at'], 'integer'],
            [['education_start_time', 'education_end_time', 'education_start_time2', 'education_end_time2', 'education_start_time3', 'education_end_time3', 'work_starttime'], 'safe'],
            [['education_content2', 'education_content3', 'position_situation', 'other_work_experience', 'answer_1', 'answer_2', 'answer_3', 'status_reason'], 'string'],
            [['avatar', 'email', 'homeplace', 'superior_name', 'superior_post', 'card_front', 'card_back', 'diploma_scan', 'postgraduate_diploma_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'interview_batch'], 'string', 'max' => 100],
            [['real_name', 'phone', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'education', 'university_category', 'university_style', 'education2', 'university_style2', 'university_degree2', 'university_category2', 'degree2', 'category2', 'education3', 'academy3', 'university_degree3', 'university_category3', 'major_category3', 'company_size', 'main_business', 'annual_income', 'annual_income_start', 'management_number', 'superior_phone', 'agree_contact_suoerior'], 'string', 'max' => 20],
            [['card'], 'string', 'max' => 18],
            [['university', 'academy2', 'education_number2', 'education_major2', 'major_category2', 'professional_ranking2', 'educations_number2', 'university_style3', 'education_number3', 'education_major3', 'professional_ranking3', 'educations_number3', 'chinese_company_name', 'english_company_name', 'turnover_year', 'Industry_category', 'company_nature', 'post_type', 'work_department', 'work_position', 'work_function1', 'work_function2', 'scale_responsible'], 'string', 'max' => 50],
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
            'homeplace' => 'Homeplace',
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
            'education2' => 'Education2',
            'academy2' => 'Academy2',
            'university_style2' => 'University Style2',
            'university_degree2' => 'University Degree2',
            'university_category2' => 'University Category2',
            'degree2' => 'Degree2',
            'category2' => 'Category2',
            'education_number2' => 'Education Number2',
            'education_major2' => 'Education Major2',
            'major_category2' => 'Major Category2',
            'professional_ranking2' => 'Professional Ranking2',
            'educations_number2' => 'Educations Number2',
            'education_start_time2' => 'Education Start Time2',
            'education_end_time2' => 'Education End Time2',
            'education_content2' => 'Education Content2',
            'education3' => 'Education3',
            'academy3' => 'Academy3',
            'university_style3' => 'University Style3',
            'university_degree3' => 'University Degree3',
            'university_category3' => 'University Category3',
            'education_number3' => 'Education Number3',
            'education_major3' => 'Education Major3',
            'major_category3' => 'Major Category3',
            'professional_ranking3' => 'Professional Ranking3',
            'educations_number3' => 'Educations Number3',
            'education_start_time3' => 'Education Start Time3',
            'education_end_time3' => 'Education End Time3',
            'education_content3' => 'Education Content3',
            'fulltime_work_life' => 'Fulltime Work Life',
            'management_work_life' => 'Management Work Life',
            'chinese_company_name' => 'Chinese Company Name',
            'english_company_name' => 'English Company Name',
            'turnover_year' => 'Turnover Year',
            'company_size' => 'Company Size',
            'main_business' => 'Main Business',
            'Industry_category' => 'Industry Category',
            'company_nature' => 'Company Nature',
            'post_type' => 'Post Type',
            'work_department' => 'Work Department',
            'work_position' => 'Work Position',
            'work_function1' => 'Work Function1',
            'work_function2' => 'Work Function2',
            'scale_responsible' => 'Scale Responsible',
            'work_starttime' => 'Work Starttime',
            'annual_income' => 'Annual Income',
            'annual_income_start' => 'Annual Income Start',
            'management_number' => 'Management Number',
            'position_situation' => 'Position Situation',
            'superior_name' => 'Superior Name',
            'superior_post' => 'Superior Post',
            'superior_phone' => 'Superior Phone',
            'agree_contact_suoerior' => 'Agree Contact Suoerior',
            'other_work_experience' => 'Other Work Experience',
            'question_1' => 'Question 1',
            'answer_1' => 'Answer 1',
            'question_2' => 'Question 2',
            'answer_2' => 'Answer 2',
            'question_3' => 'Question 3',
            'answer_3' => 'Answer 3',
            'card_front' => 'Card Front',
            'card_back' => 'Card Back',
            'diploma_scan' => 'Diploma Scan',
            'postgraduate_diploma_scan' => 'Postgraduate Diploma Scan',
            'report_card' => 'Report Card',
            'postgraduate_report_card' => 'Postgraduate Report Card',
            'resume_chinese' => 'Resume Chinese',
            'company_organization_chart' => 'Company Organization Chart',
            'resume_english' => 'Resume English',
            'english_essays' => 'English Essays',
            'additional_material' => 'Additional Material',
            'interview_batch' => 'Interview Batch',
            'signup_step' => 'Signup Step',
            'signup_at' => 'Signup At',
            'status' => 'Status',
            'status_reason' => 'Status Reason',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function exec_number(){
        $result = Signup::findBySql('SELECT count(1) as num_count,status FROM yii_signup where status >= 1 and status_reason = "" group by status')->asArray()->all();
        $ret = array(
            'uncheck' => 0,
            'passed' => 0,
            'forbid' => 0
        );
        foreach ($result as $val)
        {
            if ($val['status']=='1'){
                $ret['uncheck'] =$val['num_count'];
            }
            if ($val['status'] > 1 && $val['status'] < 7){
                $ret['forbid'] =$val['num_count'];
            }
            if ($val['status']=='7'){
                $ret['passed'] =$val['num_count'];
            }
        }
        return $ret;
    }
}
