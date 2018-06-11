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
 * @property string $academy 本专院校
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
	
	const STATUS_1 = 1;
    const STATUS_2 = 2;
    const STATUS_3 = 3;
    const STATUS_4 = 4;
    const STATUS_5 = 5;
    const STATUS_6 = 6;
    const STATUS_7 = 7;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%signup}}';
    }

    public function scenarios(){
        return [
            'step1' => ['member_id', 'academy_id', 'avatar', 'real_name', 'card', 'phone', 'email', 'homeplace', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'signup_step', 'created_at', 'updated_at'],
            'step2' => ['member_id', 'academy_id', 'education', 'education_start_time', 'education_end_time', 'university', 'university_category', 'university_style', 'education2', 'academy2', 'university_style2', 'university_degree2', 'university_category2', 'degree2', 'category2', 'education_number2', 'education_major2', 'major_category2', 'professional_ranking2', 'educations_number2', 'education_start_time2', 'education_end_time2', 'education_content2', 'education3', 'academy3', 'university_style3', 'university_degree3', 'university_category3', 'education_number3', 'education_major3', 'major_category3', 'professional_ranking3', 'educations_number3', 'education_start_time3', 'education_end_time3', 'education_content3', 'signup_step', 'created_at', 'updated_at'],
            'step3'=>['member_id', 'academy_id', 'fulltime_work_life', 'management_work_life', 'chinese_company_name', 'english_company_name', 'turnover_year', 'company_size', 'main_business', 'Industry_category', 'company_nature', 'post_type', 'work_department', 'work_position', 'work_function1', 'work_function2', 'scale_responsible', 'work_starttime', 'annual_income', 'annual_income_start', 'management_number', 'position_situation', 'superior_name', 'superior_post', 'superior_phone', 'agree_contact_suoerior', 'other_work_experience', 'signup_step', 'created_at', 'updated_at'],
            'step4'=>['member_id', 'academy_id', 'card_front', 'card_back', 'diploma_scan', 'postgraduate_diploma_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'signup_step', 'created_at', 'updated_at'],
            'step5'=>['member_id', 'academy_id', 'question_1', 'answer_1', 'question_2', 'answer_2', 'question_3', 'answer_3', 'signup_step', 'created_at', 'updated_at'],
            'step6'=>['member_id', 'academy_id', 'interview_batch', 'status', 'status_reason', 'updated_at', 'signup_step', 'signup_at'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
		
			[['member_id', 'academy_id', 'avatar', 'real_name', 'card', 'phone', 'email', 'homeplace', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone','status'], 'required', 'on'=>['step1']],
            [['education', 'education_start_time', 'education_end_time', 'university', 'university_category', 'university_style', 'education2', 'academy2', 'university_style2', 'university_degree2', 'university_category2', 'degree2', 'category2', 'education_number2', 'education_major2', 'major_category2', 'professional_ranking2', 'educations_number2', 'education_start_time2', 'education_end_time2', 'education_content2', 'education3', 'academy3', 'university_style3', 'university_degree3', 'university_category3', 'education_number3', 'education_major3', 'major_category3', 'professional_ranking3', 'educations_number3', 'education_start_time3', 'education_end_time3', 'education_content3', 'status'], 'required', 'on'=>['step2']],
            [['fulltime_work_life', 'management_work_life', 'chinese_company_name', 'english_company_name', 'turnover_year', 'company_size', 'main_business', 'Industry_category', 'company_nature', 'post_type', 'work_department', 'work_position', 'work_function1', 'work_function2', 'scale_responsible', 'work_starttime', 'annual_income', 'annual_income_start', 'management_number', 'position_situation', 'superior_name', 'superior_post', 'superior_phone', 'agree_contact_suoerior', 'other_work_experience', 'status'], 'required', 'on'=>['step3']],
            [['card_front', 'card_back', 'diploma_scan', 'postgraduate_diploma_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'status'], 'required', 'on'=>['step4']],
            [['question_1', 'answer_1', 'question_2', 'answer_2', 'question_3', 'answer_3', 'status'], 'required', 'on'=>['step5']],
            [['interview_batch', 'status'], 'required', 'on'=>['step6']],
            [['signup_step'], 'isSub', 'on'=>['step6']],

			[['member_id', 'academy_id', 'fulltime_work_life', 'management_work_life', 'signup_step', 'signup_at', 'status', 'created_at', 'updated_at'], 'integer'],
			[['education_start_time', 'education_end_time', 'education_start_time2', 'education_end_time2', 'education_start_time3', 'education_end_time3', 'work_starttime'], 'safe'],
			[['education_content2', 'education_content3', 'position_situation', 'other_work_experience', 'answer_1', 'answer_2', 'answer_3', 'status_reason'], 'string'],
			[['avatar', 'email', 'homeplace', 'superior_name', 'superior_post', 'card_front', 'card_back', 'diploma_scan', 'postgraduate_diploma_scan', 'report_card', 'postgraduate_report_card', 'resume_chinese', 'company_organization_chart', 'resume_english', 'english_essays', 'additional_material', 'interview_batch'], 'string', 'max' => 100],
			[['real_name', 'phone', 'sex', 'birthday', 'marital', 'emergency_name', 'emergency_phone', 'education', 'university_category', 'university_style', 'education2', 'university_style2', 'university_degree2', 'university_category2', 'degree2', 'category2', 'education3', 'academy3', 'university_degree3', 'university_category3', 'major_category3', 'company_size', 'main_business', 'annual_income', 'annual_income_start', 'management_number', 'superior_phone', 'agree_contact_suoerior'], 'string', 'max' => 20],
			[['card'], 'string', 'max' => 18],
			[['university', 'academy', 'education_number2', 'education_major2', 'major_category2', 'professional_ranking2', 'educations_number2', 'university_style3', 'education_number3', 'education_major3', 'professional_ranking3', 'educations_number3', 'chinese_company_name', 'english_company_name', 'turnover_year', 'Industry_category', 'company_nature', 'post_type', 'work_department', 'work_position', 'work_function1', 'work_function2', 'scale_responsible'], 'string', 'max' => 50],
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
            'education2' => 'Education2',
            'academy' => 'Academy',
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
            'postgraduate_diploma_scan' => '研究生毕业证扫描件',
            'report_card' => '本科阶段成绩单',
            'postgraduate_report_card' => '研究生阶段成绩单',
            'resume_chinese' => '中文简历',
            'company_organization_chart' => '单位组织结构图',
            'resume_english' => '英文简历',
            'english_essays' => '英文申请短文',
            'additional_material' => '附加材料',
            'interview_batch' => '面试批次',
            'signup_step' => '提交材料步骤',
            'signup_at' => '提交时间',
            'status' => '状态',
            'status_reason' => '未通过原因',
            'created_at' => '申请时间',
            'updated_at' => '编辑时间',
        ];
    }
	
	public static function getInfo($member_id,$academy_id){
        $signup = self::find()->where(['member_id'=>$member_id,'academy_id'=>$academy_id])->one();
        return $signup;
    }

    public static function getInfoByMid($member_id){
        $signup = self::find()->select(['signup_step','status','status_reason'])->where(['member_id'=>$member_id])->one();
        return $signup;
    }

    public function isCard($attribute, $params){
        $id = strtoupper($this->$attribute);
        $regx = "/(^\d{15}$)|(^\d{17}([0-9]|X)$)/";
        $arr_split = array();
        if (!preg_match($regx, $id)) {
            $this->addError($attribute, "身份证号格式错误.");
        }else if (15 == strlen($id)) {
            $regx = "/^(\d{6})+(\d{2})+(\d{2})+(\d{2})+(\d{3})$/";
            @preg_match($regx, $id, $arr_split);
            //检查生日日期是否正确
            $dtm_birth = "19" . $arr_split[2] . '/' . $arr_split[3] . '/' . $arr_split[4];
            if (!strtotime($dtm_birth)) {
                $this->addError($attribute, "身份证号格式错误.");
            }
        } else {
            $regx = "/^(\d{6})+(\d{4})+(\d{2})+(\d{2})+(\d{3})([0-9]|X)$/";
            @preg_match($regx, $id, $arr_split);
            $dtm_birth = $arr_split[2] . '/' . $arr_split[3] . '/' . $arr_split[4];
            if (!strtotime($dtm_birth)) {
                $this->addError($attribute, "身份证号格式错误.");
            } else {
                //检验18位身份证的校验码是否正确。
                //校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。
                $arr_int = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
                $arr_ch = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
                $sign = 0;
                for ($i = 0; $i < 17; $i++) {
                    $b = (int)$id{$i};
                    $w = $arr_int[$i];
                    $sign += $b * $w;
                }
                $n = $sign % 11;
                $val_num = $arr_ch[$n];
                if ($val_num != substr($id, 17, 1)) {
                    $this->addError($attribute, "身份证号格式错误.");
                }
            }
        }
    }

    public function isEmail($attribute, $params){
        if(!filter_var($this->$attribute,FILTER_VALIDATE_EMAIL)){
            $this->addError($attribute, "邮箱格式错误.");
        }
    }

    public function isPhone($attribute, $params){
        if(!preg_match('/^(13|14|15|16|17|18)[0-9]{9}$/',$this->$attribute)){
            $this->addError($attribute, "电话号码格式错误.");
        }
    }

    public function isSub($attribute, $params){
        if($this->$attribute != 123456){
            $this->addError($attribute, "请先完善资料再提交.");
        }
    }

}
