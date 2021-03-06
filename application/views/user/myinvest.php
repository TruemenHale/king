<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="">
	<!--[if IE 6]>
	<script type="text/javascript" src="js/dd_png.js"></script>
	<script type="text/javascript">
		DD_belatedPNG.fix('.logo,.wechat_logo,.weibo_logo,.service_btn,.up');
	</script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/licaitongji.css">
	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
</head>
<body>
	<div class="title">
		<span class="titleTxt">基本信息</span>
	</div>
	<div>
		<ul>
			<li class="on">正在竞标</li>
			<li>正在还款</li>
			<li>完成标段</li>
			<li>我的电子合同</li>
		</ul>
		<table class="zhengzaijingbiao">
			<tr>
				<th>借款人</th>
				<th>借款标题</th>
				<th>年利率</th>
				<th>投资金额</th>
				<th>期限</th>
				<th>投资时间</th>
				<th>操作</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
			</tr>
		</table>
		<table class="zhengzaihuankuan">
			<tr>
				<th>借款人</th>
				<th>借款标题</th>
				<th>年利率</th>
				<th>投资金额</th>
				<th>期限</th>
				<th>投资时间</th>
				<th>剩余期数</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
			</tr>
		</table>
		<table class="wanchengbiaoduan">
			<tr>
				<th>借款人</th>
				<th>借款标题</th>
				<th>年利率</th>
				<th>投资金额</th>
				<th>期限</th>
				<th>投资时间</th>
				<th>状态</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
			</tr>
		</table>
		<table class="wodedianzihetong">
			<tr>
				<th>借款人</th>
				<th>借款标题</th>
				<th>年利率</th>
				<th>投资金额</th>
				<th>期限</th>
				<th>投资时间</th>
				<th>操作</th>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
			</tr>
		</table>
	</div>
</body>
<script type="text/javascript">
	$('div ul li').on('mouseover',function(){
		$(this).addClass('hover');
	}).on('mouseout',function(){
		$('.hover').removeClass('hover');
	}).on('click',function(){
		$('.on').removeClass('on');
		$(this).addClass('on');
		var that = $(this).index();
		$('table').css('display','none');
		$($('table')[that]).css('display','block');
	})
</script>
</html>