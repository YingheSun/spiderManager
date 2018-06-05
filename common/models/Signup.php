<?php

namespace common\models;

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
 * @property string $academic_degree 最高学位
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
 * @property int $work_starttime 工作开始时间
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
 * @property int $signup_at 提交时间
 * @property int $status 状态（1：个人信息完成，2：教育背景完成，3：工作背景完成，4：文件上传完成，5：自述短文完成，6：确认并保存，7：提交）
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
        return '{{%signup}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['member_id', 'academy_id', 'avatar', 'real_name', 'card', 'phone', 'email', 'homeplace', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone'], 'required'],
            [['member_id', 'academy_id', 'fulltime_work_life', 'management_work_life', 'work_starttime', 'signup_at', 'status', 'created_at', 'updated_at'], 'integer'],
            [['education_start_time', 'education_end_time'], 'safe'],
            [['other_work_experience', 'answer_1', 'answer_2', 'answer_3', 'status_reason'], 'string'],
            [['avatar', 'email', 'homeplace', 'superior_name', 'superior_post', 'card_front', 'card_back', 'diploma_scan', 'academic_scan', 'postgraduate_diploma_scan', 'postgraduate_academic_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'interview_batch'], 'string', 'max' => 100],
            [['real_name', 'phone', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'education', 'university_category', 'university_style', 'academic_degree', 'company_size', 'main_business', 'annual_income', 'annual_income_start', 'management_number', 'superior_phone', 'agree_contact_suoerior'], 'string', 'max' => 20],
            [['card'], 'string', 'max' => 18],
            [['university', 'chinese_company_name', 'english_company_name', 'turnover_year', 'Industry_category', 'company_nature', 'post_type', 'work_department', 'work_position', 'work_function1', 'work_function2', 'scale_responsible'], 'string', 'max' => 50],
            [['position_situation', 'question_1', 'question_2', 'question_3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'member_id' => '用户ID',
            'academy_id' => '报名院校ID',
            'avatar' => '用户照片',
            'real_name' => '真实姓名',
            'card' => '身份证号',
            'phone' => '手机号',
            'email' => '邮箱',
            'homeplace' => '出生地',
            'sex' => '性别',
            'birthday' => '生日',
            'marital' => '婚姻状况',
            'emergency_name' => '紧急联系人',
            'emergency_phone' => '紧急联系人手机号',
            'education' => '最高学历',
            'education_start_time' => '入学时间',
            'education_end_time' => '毕业时间',
            'university' => '毕业院校',
            'university_category' => '院校分类',
            'university_style' => '学习方式',
            'academic_degree' => '最高学位',
            'fulltime_work_life' => '全职工作年限',
            'management_work_life' => '管理岗位工作年限',
            'chinese_company_name' => '公司中文名称',
            'english_company_name' => '公司英文名称',
            'turnover_year' => '公司年营业额',
            'company_size' => '公司规模',
            'main_business' => '主营业务',
            'Industry_category' => '行业类别',
            'company_nature' => '公司性质',
            'post_type' => '岗位类型',
            'work_department' => '工作部门',
            'work_position' => '工作职位',
            'work_function1' => '工作职能',
            'work_function2' => '工作职能',
            'scale_responsible' => '负责预算规模（万元）',
            'work_starttime' => '工作开始时间',
            'annual_income' => '目前年收入',
            'annual_income_start' => '起始目前年收入',
            'management_number' => '负责人数',
            'position_situation' => '负责岗位情况',
            'superior_name' => '上级名称',
            'superior_post' => '上级职位',
            'superior_phone' => '上级电话',
            'agree_contact_suoerior' => '是否同意与上级电话联系',
            'other_work_experience' => '其他工作经历',
            'question_1' => '自述短文1',
            'answer_1' => '自述短文答案1',
            'question_2' => '自述短文2',
            'answer_2' => '自述短文答案2',
            'question_3' => '自述短文3',
            'answer_3' => '自述短文答案3',
            'card_front' => '身份证正面',
            'card_back' => '身份证反面',
            'diploma_scan' => '毕业证扫描件',
            'academic_scan' => '学位证扫描件',
            'postgraduate_diploma_scan' => '研究生毕业证扫描件',
            'postgraduate_academic_scan' => '研究生学位证扫描件',
            'report_card' => '本科阶段成绩单',
            'postgraduate_report_card' => '研究生阶段成绩单',
            'resume_chinese' => '中文简历',
            'company_organization_chart' => '单位组织结构图',
            'resume_english' => '英文简历',
            'english_essays' => '英文申请短文',
            'additional_material' => '附加材料',
            'interview_batch' => '面试批次',
            'signup_at' => '提交时间',
            'status' => '状态',
            'status_reason' => '未通过原因',
            'created_at' => '申请时间',
            'updated_at' => '编辑时间',
        ];
    }
}
