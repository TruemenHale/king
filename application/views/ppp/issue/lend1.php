<!DOCTYPE html>
<html>
<head>
<title>我要借款</title>
<meta name="description" content="">
<link rel="stylesheet" type="text/css" href="/css/loan.css">
<?php include(APPPATH.'views/top.php');?>
	<div id="main">
		<span class="main_nav"><a href="">首页</a> > <a href="">我要借款</a> > <a href="">借款详情</a></span>
		<ul class="progress_nav">
			<li class="pro_head">填写借款申请</li>
			<li class="pro_nor">填写借款信息</li>
			<li class="pro_nor">审核</li>
			<li class="pro_nor">招标</li>
			<li class="pro_end">提现</li>
		</ul>
		<h4>您的社会角色为： <span><?php switch($rank){
case 1:echo '工薪族';break;case 2:echo '企业主';break;case 3:echo '网店主';break;default:echo 'unknown';
		};?></span>，请点击下一步</h4>
		<ul class="character">
			<li class="character_li">
				<h1>工薪族<a href="">了解详情</a></h1>
				<h2>适用工薪阶层<span>（申请条件）</span></h2>
				<ul>
					<li>22-55周岁的中国公民</li>
					<li>在现单位工作满三个月</li>
					<li>月收入2000元以上</li>
				</ul>
			</li>
			<li class="character_li">
				<h1>企业主<a href="">了解更多</a></h1>
				<h2>适用私营企业主<span>（申请条件）</span></h2>
				<ul>
					<li>22-55周岁的中国公民</li>
					<li>企业经营时间满一年</li>
				</ul>
			</li>
			<li class="character_li">
				<h1>网店主<a href="">了解更多</a></h1>
				<h2>适用电子网店商户<span></span></h2>
				<ul>
					<li>22-55周岁的中国公民</li>
					<li>在淘宝或天猫平台经营网店半年以上</li>
					<li>近3个月交易总额满3万元，并且交易笔数超过50笔</li>
				</ul>
			</li>
		</ul>
		<a class="next" href="lend2">下一步</a>
	</div>
<?php include(APPPATH.'views/foot.php');?>