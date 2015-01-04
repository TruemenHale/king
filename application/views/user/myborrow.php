<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/licaitongji.css">
	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
</head>
<body>
	<div class="title">
		<span class="titleTxt">基本信息</span>
	</div>
	<ul class="top_ul">
		<li class="fir_li">
			<h1>借款总金额</h1>
			<h2>0.00元</h2>
		</li>
		<li>
			<h1>逾期金额</h1>
			<h2>0.00元</h2>
		</li>
		<li>
			<h1>待还金额</h1>
			<h2>0.00元</h2>
		</li>
		<li>
			<h1>近30天应还金额</h1>
			<h2>0.00元</h2>
		</li>
	</ul>
	<div>
		<ul>
			<li class="on">还款中借款</li>
			<li>已还清借款</li>
			<li>未满标借款</li>
		</ul>
		<table class="huankuanzhong">
			<tr>
				<th>借款标题</th>
				<th>借款金额</th>
				<th>年利率</th>
				<th>期限</th>
				<th>月还款金额</th>
				<th>剩余期数</th>
				<th>合同</th>
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
				<td>8</td>
			</tr>
		</table>
		<table class="yihuanqing">
			<tr>
				<th>借款标题</th>
				<th>借款金额</th>
				<th>年利率</th>
				<th>期限</th>
				<th>月还款金额</th>
				<th>还清时间</th>
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
		<table class="weimanbiaojiekuan">
			<tr>
				<th>借款标题</th>
				<th>借款金额</th>
				<th>年利率</th>
				<th>期限</th>
				<th>月还款金额</th>
				<th>状态</th>
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