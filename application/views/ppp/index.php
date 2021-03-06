<!DOCTYPE html>
<html>
    <head>
        <title>掌金宝</title>
        <meta name="description" content="">
<?php include(APPPATH.'views/top.php');?>
        <link rel="stylesheet" type="text/css" href="/css/main.css">
	<div id="main">
		<ul class="title">
			<a href="/ppp/issue/lend1"><li>我要借款</li></a>
			<a href="/ppp/issue/bdshow"><li>我要投资</li></a>
			<a href="/ppp/main/about"><li>关于我们</li></a>
			<a href=""><li>帮助中心</li></a>
			<a href="/user/me"><li>个人中心</li></a>
		</ul>
		<script type="text/javascript">
    $('#main .title li').on('mouseover',function(){
        $(this).css('background-color','#0271d1');
    });
    $('#main .title li').on('mouseout',function(){
        $(this).css('background-color','#666');
    });</script>
		<div class="main_left">
			<ul class="kind_nav">
				<li class="kind_on kind_focus">最新发布</li>
			</ul>
			<?php foreach($bd as $item):?>
			<ul class="program_list">
				<li class="kind_li">
					<h1 class="program_name"><?=$item['title']?></h1>
					<ul>
						<li class="short">金额：<?=$item['total']?>元<span></span></li>
						<li class="short">年利率：<?=$item['rate']?>%<span></span></li>
						<li class="short">借款期限：<?=$item['period']?>个月<span></span></li>
						<li class="short">还款方式：<?php if($item['paytype']==1) echo "等额本息";
														  if($item['paytype']==2) echo "等额本金";
														  if($item['paytype']==3) echo "按月还息到期还本";?><span></span></li>
						<li class="long">担保单位：<span></span></li>
						<li class="long">投资人：<?=$item['user'];?><span></span></li>
						<li class="long">回购方：<span></span></li>
						<li class="long">借款进度：<div class="progress_line" style="width:130px;"><span>100%</span></div></li>
					</ul>
					<a href="/ppp/issue/bddetail/<?=$item['bid']?>">
					<?=($item['status']=1)?'<div class="finish">马上投资</div>':'<div class="unfinish">已完成</div>'?>
					</a>
				</li>
			<?php endforeach;?>
				<!--<li class="kind_li">
				</li>
				<li class="kind_li">
					<h1 class="program_name">短期经营资金</h1>
					<ul>
						<li class="short">金额：<span></span></li>
						<li class="short">年利率：<span></span></li>
						<li class="short">借款期限：<span></span></li>
						<li class="short">还款方式：<span></span></li>
						<li class="long">担保单位：<span></span></li>
						<li class="long">投资人：<span></span></li>
						<li class="long">回购方：<span></span></li>
						<li class="long">借款进度：<div class="progress_line" style="width:130px;"><span>100%</span></div></li>
					</ul>
					<div class="unfinish">还款中</div>
				</li>
				<li class="kind_li">
					<h1 class="program_name">短期经营资金</h1>
					<ul>
						<li class="short">金额：<span></span></li>
						<li class="short">年利率：<span></span></li>
						<li class="short">借款期限：<span></span></li>
						<li class="short">还款方式：<span></span></li>
						<li class="long">担保单位：<span></span></li>
						<li class="long">投资人：<span></span></li>
						<li class="long">回购方：<span></span></li>
						<li class="long">借款进度：<div class="progress_line" style="width:130px;"><span>100%</span></div></li>
					</ul>
					<div class="unfinish">还款中</div>
				</li>-->
			</ul>
		</div>
		<div class="main_right">
			<div class="announce_list">
				<h1>官方公告<a href="/ppp/main/annlist">更多>>&nbsp;</a></h1>
				<?php 
				    $i=1;
					foreach($ann as $item){
					echo '<a class="li" href="/ppp/main/anndetail/'.$item['id'].'">';
					echo $i++;
					echo ' '.$item['title'].'</a>';
				}
				?>
			</div>
			<embed src="http://player.youku.com/player.php/sid/XMjI0MDIwNDc2/v.swf" quality="high" width="280" height="252" align="middle" allowScriptAccess="sameDomain" float="right" type="application/x-shockwave-flash"></embed>
			<ul class="problems_list">
				<h1>常见问题<a href="">更多>>&nbsp;</a></h1>
				<a class="li" href="">1</a>
				<a class="li" href="">2</a>
				<a class="li" href="">3</a>
				<a class="li" href="">4</a>
				<a class="li" href="">5</a>
			</ul>
			<div class="rank_list">
				<h1>理财风云榜<a href="">更多>>&nbsp;</a></h1>
				<table>
					<tr>
						<th>排行</th>
						<th>用户名</th>
						<th>投资金额</th>
					</tr>
					<tr>
						<td class="rank_num">1</td>
						<td class="user_name">dsf</td>
						<td class="money">10,000</td>
					</tr>
					<tr>
						<td class="rank_num">2</td>
						<td class="user_name"></td>
						<td class="money"></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="partner">
			<h1><span>合作伙伴</span></h1>
			<ul>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
			</ul>
		</div>
		<div class="media">
			<h1><span>媒体报道</span></h1>
			<ul>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
			</ul>
		</div>
		<div class="link">
			<h1><span>友情链接</span></h1>
			<ul>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
				<li><a href=""><img src=""></a></li>
			</ul>
		</div>
	</div>
<?php include(APPPATH.'views/foot.php');?>