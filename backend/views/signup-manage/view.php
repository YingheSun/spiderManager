<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Signup */

$this->title = '审核第'. $model->status .'步';
$this->params['breadcrumbs'][] = ['label' => 'Signups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="signup-view">

    <h1> <?php switch ($model->status){
            case 1:
                echo '个人信息';
                break;
            case 2:
                echo '个人信息->教育背景';
                break;
            case 3:
                echo '个人信息->教育背景->工作背景';
                break;
            case 4:
                echo '个人信息->教育背景->工作背景->文件上传';
                break;
            case 5:
                echo '个人信息->教育背景->工作背景->文件上传->自述短文';
                break;
        }; ?></h1>

    <p>
        <?php if( $model->status <5){?>
        <?= Html::a('下一步', ['view', 'id' => $model->id ,'current_step' => $model->status,'update_state' => true], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('审核没通过', ['update1', 'id' => $model->id], [
            'class' => 'btn btn-danger delete',

        ]) ?>
        <?php } ?>
        <?php if( $model->status ==5){?>
            <?= Html::a('完成审核', ['view', 'id' => $model->id ,'current_step' => $model->status,'update_state' => true], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('审核没通过', ['update1', 'id' => $model->id ], [
                'class' => 'btn btn-danger delete',
            ]) ?>
        <?php } ?>
        <?php if( $model->status ==7){?>
            <?= Html::a('邮件发送完毕确认', ['view', 'id' => $model->id ,'current_step' => $model->status,'update_state' => true], ['class' => 'btn btn-primary']) ?>
        <?php } ?>
        <?php if( $model->status ==8){?>
            <?= Html::a('缴费完毕确认', ['view', 'id' => $model->id ,'current_step' => $model->status,'update_state' => true], ['class' => 'btn btn-primary']) ?>
        <?php } ?>
    </p>

    <table border="1">
    <?php if( $model->status == 1){?>
        <tr>
            <td>个人照片：</td><td><img alt="" src="<?php echo $model->avatar ?>"/><br></td>
        <tr><tr>
            <td>真实姓名：</td><td><?php echo $model->real_name ?> <br></td>
        <tr><tr>
            <td>身份证号：</td><td><?php echo $model->card ?> <br></td>
        <tr><tr>
            <td>手机：</td><td><?php echo $model->phone ?> <br></td>
        <tr><tr>
            <td>邮箱：</td><td><?php echo $model->email ?> <br></td>
        <tr><tr>
            <td>出生地：</td><td><?php echo $model->homeplace ?> <br></td>
        <tr><tr>
            <td>性别：</td><td><?php echo $model->sex ?> <br></td>
        <tr><tr>
            <td>出生日期：</td><td><?php echo $model->birthday ?> <br></td>
        <tr><tr>
            <td>婚姻状况：</td><td><?php echo $model->marital ?> <br></td>
        <tr><tr>
            <td>紧急联系人：</td><td><?php echo $model->emergency_name ?> <br></td>
        <tr><tr>
            <td>紧急联系人手机号：</td><td><?php echo $model->emergency_phone ?> <br></td>
        <tr>
    <?php } ?>
    <?php if( $model->status == 2){?>
        <tr>
            <td>最高学历：</td><td><?php echo $model->education ?><br><td>
        <tr><tr>
            <td>开始时间：</td><td><?php echo $model->education_start_time ?> <br><td>
        <tr><tr>
            <td>截止时间：</td><td><?php echo $model->education_end_time ?> <br><td>
        <tr><tr>
            <td>毕业院校：</td><td><?php echo $model->university ?> <br><td>
        <tr><tr>
            <td>院校分类:</td><td><?php echo $model->university_category ?> <br><td>
        <tr><tr>
            <td>最高学历学习方式：</td><td><?php echo $model->university_style ?> <br><td>
        <tr><tr>
<!--        最高学位：--><?php //echo $model->academic_degree ?><!-- <br>-->
            <td>最高学历2:</td><td><?php echo $model->education2 ?><br><td>
        <tr><tr>
            <td>本专院校:</td><td><?php echo $model->academy2 ?><br><td>
        <tr><tr>
            <td>学习方式:</td><td><?php echo $model->university_style2 ?><br><td>
        <tr><tr>
            <td>学位:</td><td><?php echo $model->university_degree2 ?><br><td>
        <tr><tr>
            <td>院校分类:</td><td><?php echo $model->university_category2 ?><br><td>
        <tr><tr>
            <td>本专科学位:</td><td><?php echo $model->degree2 ?><br><td>
        <tr><tr>
            <td>分类:</td><td><?php echo $model->category2 ?><br><td>
        <tr><tr>
            <td>学历证书编号:</td><td><?php echo $model->education_number2 ?><br><td>
        <tr><tr>
            <td>专业:</td><td><?php echo $model->education_major2 ?><br><td>
        <tr><tr>
            <td>专业类别:</td><td><?php echo $model->major_category2 ?><br><td>
        <tr><tr>
            <td>专业排名:</td><td><?php echo $model->professional_ranking2 ?><br><td>
        <tr><tr>
            <td>学位证书编号:</td><td><?php echo $model->educations_number2 ?><br><td>
        <tr><tr>
            <td>入学时间:</td><td><?php echo $model->education_start_time2 ?><br><td>
        <tr><tr>
            <td>毕业时间:</td><td><?php echo $model->education_end_time2 ?><br><td>
        <tr><tr>
            <td>备注:</td><td><?php echo $model->education_content2 ?><br><td>
        <tr><tr>
            <td>其他学历:</td><td><?php echo $model->education3 ?><br><td>
        <tr><tr>
            <td>毕业院校:</td><td><?php echo $model->academy3 ?><br><td>
        <tr><tr>
            <td>学习方式:</td><td><?php echo $model->university_style3 ?><br><td>
        <tr><tr>
            <td>学位:</td><td><?php echo $model->university_degree3 ?><br><td>
        <tr><tr>
            <td>毕业院校分类:</td><td><?php echo $model->university_category3 ?><br><td>
        <tr><tr>
            <td>学历证书编号:</td><td><?php echo $model->education_number3 ?><br><td>
        <tr><tr>
            <td>专业:</td><td><?php echo $model->education_major3 ?><br><td>
        <tr><tr>
            <td>专业类别:</td><td><?php echo $model->major_category3 ?><br><td>
        <tr><tr>
            <td>专业排名:</td><td><?php echo $model->professional_ranking3 ?><br><td>
        <tr><tr>
            <td>学历证书编号:</td><td><?php echo $model->educations_number3 ?><br><td>
        <tr><tr>
            <td>入学时间:</td><td><?php echo $model->education_start_time3 ?><br><td>
        <tr><tr>
            <td>截止时间:</td><td><?php echo $model->education_end_time3 ?><br><td>
        <tr><tr>
            <td>备注:</td><td><?php echo $model->education_content3 ?><br><td>
        <tr>
    <?php } ?>
    <?php if( $model->status == 3){?>
        <tr>
            <td>全职工作年限：</td><td><?php echo $model->fulltime_work_life ?><br><td>
        <tr><tr>
            <td>管理岗位工作年限：</td><td><?php echo $model->management_work_life ?> <br><td>
        <tr><tr>
            <td>公司中文名称：</td><td><?php echo $model->chinese_company_name ?> <br><td>
        <tr><tr>
            <td>公司英文名称：</td><td><?php echo $model->english_company_name ?> <br><td>
        <tr><tr>
            <td>公司年营业额:</td><td><?php echo $model->turnover_year ?> <br><td>
        <tr><tr>
            <td>公司规模：</td><td><?php echo $model->company_size ?> <br><td>
        <tr><tr>
            <td>主营业务：</td><td><?php echo $model->main_business ?> <br><td>
        <tr><tr>
            <td>行业类别：</td><td><?php echo $model->Industry_category ?> <br><td>
        <tr><tr>
            <td>公司性质：</td><td><?php echo $model->company_nature ?> <br><td>
        <tr><tr>
            <td>岗位类型：</td><td><?php echo $model->post_type ?> <br><td>
        <tr><tr>
            <td>工作部门：</td><td><?php echo $model->work_department ?> <br><td>
        <tr><tr>
            <td>工作职位：</td><td><?php echo $model->work_position ?> <br><td>
        <tr><tr>
            <td>工作职能1：</td><td><?php echo $model->work_function1 ?> <br><td>
        <tr><tr>
            <td>工作职能2：</td><td><?php echo $model->work_function2 ?> <br><td>
        <tr><tr>
            <td>负责预算规模（万元）：</td><td><?php echo $model->scale_responsible ?> <br><td>
        <tr><tr>
            <td>工作开始时间：</td><td><?php echo $model->work_starttime ?> <br><td>
        <tr><tr>
            <td>目前年收入：</td><td><?php echo $model->annual_income ?> <br><td>
        <tr><tr>
            <td>起始年收入：</td><td><?php echo $model->annual_income_start ?> <br><td>
        <tr><tr>
            <td>负责人数：</td><td><?php echo $model->management_number ?> <br><td>
        <tr><tr>
            <td>负责岗位情况：</td><td><?php echo $model->position_situation ?> <br><td>
        <tr><tr>
            <td>上级名称：</td><td><?php echo $model->superior_name ?> <br><td>
        <tr><tr>
            <td>上级职位：</td><td><?php echo $model->superior_post ?> <br><td>
        <tr><tr>
            <td>上级电话：</td><td><?php echo $model->superior_phone ?> <br><td>
        <tr><tr>
            <td>是否同意与上级电话联系：</td><td><?php echo $model->agree_contact_suoerior ?> <br><td>
        <tr><tr>
            <td>其他工作经历：</td><td><?php echo $model->other_work_experience ?> <br><td>
        <tr>
    <?php } ?>
    <?php if( $model->status == 4){?>
        <tr>
            <td>身份证正面：</td><td><img alt="" src="<?php echo $model->card_front ?>"/><br><td>
        <tr><tr>
            <td>身份证反面：</td><td><img alt="" src="<?php echo $model->card_back ?>"/><br><td>
        <tr><tr>
            <td>毕业证扫描件：</td><td><img alt="" src="<?php echo $model->diploma_scan ?>"/><br><td>
        <tr><tr>
            <td>研究生毕业证扫描件：</td><td><img alt="" src="<?php echo $model->postgraduate_diploma_scan ?>"/><br><td>
        <tr><tr>
            <td>本科阶段成绩单：</td><td><img alt="" src="<?php echo $model->report_card ?>"/><br><td>
        <tr><tr>
            <td>研究生阶段成绩单：</td><td><img alt="" src="<?php echo $model->postgraduate_report_card ?>"/><br><td>
        <tr><tr>
            <td>中文简历：</td><td><a href="<?php echo $model->resume_chinese ?>">点我下载</a><br><td>
        <tr><tr>
            <td>单位组织结构图：</td><td><img alt="" src="<?php echo $model->company_organization_chart ?>"/><br><td>
        <tr><tr>
            <td>英文简历：</td><td><a  href="<?php echo $model->resume_english ?>">点我下载</a><br><td>
        <tr><tr>
            <td>英文申请短文：</td><td><a  href="<?php echo $model->english_essays ?>">点我下载</a><br><td>
        <tr><tr>
            <td>附加材料：</td><td><a  href="<?php echo $model->additional_material ?>">点我下载</a><br><td>
        <tr>
    <?php } ?>
    <?php if($model->status == 5){?>
        问题1：<?php echo $model->question_1 ?> <br><br>
        答案1：<?php echo $model->answer_1 ?> <br><br><br>
        问题2：<?php echo $model->question_2 ?> <br><br>
        答案2：<?php echo $model->answer_2 ?> <br><br><br>
        问题3：<?php echo $model->question_3 ?> <br><br>
        答案3：<?php echo $model->answer_3 ?> <br>
    <?php } ?>
    <?php if($model->status == 7){?>
        你已经完成了这个同学的审核，等待你去发送邮件
    <?php } ?>
    <?php if($model->status == 8){?>
        你已经发送了邮件，等待这位同学缴费
    <?php } ?>
    <?php if($model->status == 9){?>
        终于这位同学走完了全部流程
    <?php } ?>
    </table>

</div>
