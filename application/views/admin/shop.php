<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="/css/back.css">
	<link rel="stylesheet" type="text/css" href="/css/themes/default/easyui.css">
	<link rel="stylesheet" type="text/css" href="/css/themes/icon.css">
	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/js/jquery.easyui.min.js"></script>
</head>
<body style="background-color:#fff;">
<div id="main">	
	<div id="content">
		<div class="content_top">
			<p><a href="">后台管理</a><a href="">> 掌金街</a></p>
		</div>
		<div class="tag_list">
			<div class="tag_line">
				<h1>产品分类</h1>
				<h2 class="back_icon">&#xe607;</h2>
				<ul class="fun_ul">
					<li class="add">添加分类</li>
					<li class="modif">修改分类</li>
					<li class="delete">删除分类</li>
				</ul>
			</div>
			<ul class="tag_ul">
				<li class="tag shenghuoyongpin1">生活用品1<span class="tag_del back_icon">&#xf003e;</span></li>
				<li class="tag shenghuoyongpin2">生活用品2<span class="tag_del back_icon">&#xf003e;</span></li>
				<li class="add_tag">+ 添加</li>
			</ul>
		</div>
		<div class="tag_li shenghuoyongpin1">
			<div class="tag_line">
				<h1>生活用品1</h1>
				<h2 class="back_icon">&#xe607;</h2>
				<ul class="fun_ul">
					<li class="add">添加分类</li>
					<li class="modif">修改分类</li>
					<li class="delete">删除分类</li>
				</ul>
			</div>
			<ul class="tag_ul">
				<li class="tag shenghuoyongpin1">生活用品1<span class="tag_del back_icon">&#xf003e;</span></li>
				<li class="tag shenghuoyongpin2">生活用品2<span class="tag_del back_icon">&#xf003e;</span></li>
				<li class="add_tag">+ 添加</li>
			</ul>
		</div>
		<div class="tag_li shenghuoyongpin1">
			<div class="tag_line">
				<h1>生活用品1</h1>
				<h2 class="back_icon">&#xe607;</h2>
				<ul class="fun_ul">
					<li class="add">添加分类</li>
					<li class="modif">修改分类</li>
					<li class="delete">删除分类</li>
				</ul>
			</div>
			<ul class="tag_ul">
				<li class="tag shenghuoyongpin1">生活用品1<span class="tag_del back_icon">&#xf003e;</span></li>
				<li class="tag shenghuoyongpin2">生活用品2<span class="tag_del back_icon">&#xf003e;</span></li>
				<li class="add_tag">+ 添加</li>
			</ul>
		</div>
		<div class="tag_li shenghuoyongpin1">
			<div class="tag_line">
				<h1>生活用品1</h1>
			</div>
			<ul class="pro_ul">
				<li class="pro_li">
					<h1 class="pro_ch"><span class="pro_mod">修改</span><span class="pro_del">删除</span></h1>
					<h1 class="pro_con"><span>确定</span></h1>
					<img class="pro_pho" src="">
					<h2 class="price">￥<span>35</span></h2>
					<h3 class="name">asdf</h3>
					<p class="pro_intro">介绍啊介绍介绍！~21#~@#</p>
				</li>
				<li class="pro_add">
					<h1>+ 添加</h1>
				</li>
			</ul>
			<div class="page">
				<a href="">首页</a>
				<a href="">上一页</a>
				<a href="" class="page_on">1</a>
				<a href="">2</a>
				<a href="">下一页</a>
				<a href="">尾页</a>
			</div>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
	//自适应
	var height = $(window).height();
	var width = $(window).width();
	$('#slider').css('height',height-75);
	$(window).resize(function(){
		var height = $(window).height();
		var width = $(window).width();
		$('#slider').css('height',height-75);
		$('.content_top').css('width',width);
	});
	$('.content_top').css('width',width);
	$('a').on('click',function(){
		return false;
	});
	//搜索
	function doSearch(value){
		alert('You input: ' + value);
	}
	//添加公告
	$('.add_anno').on('click',function(){
		location.href = "add_anno.html";
	});
	//审核
	$('.commit .btn').on('click',function(){
		if ($(this).attr('class')=="btn yes") {
			$(this).addClass('yes_on');
			$('.no_on').removeClass('no_on');
			$('.btn_val').attr('value','1');
		}else{
			$(this).removeClass('yes_on');
			$('.btn_val').attr('value','');
		}
		if ($(this).attr('class')=="btn no") {
			$(this).addClass('no_on');
			$('.yes_on').removeClass('yes_on');
			$('.btn_val').attr('value','0');
		}else{
			$(this).removeClass('no_on');
			$('.btn_val').attr('value','');
		}
	});
	//
	$('.back_icon').on('click',function(){
		if ($(this).attr('class')=="back_icon back_icon_on") {
			$('.fun_ul').css('display','none');
			$(this).removeClass('back_icon_on');
		}else{
			$('.fun_ul').css('display','none');
			$('.back_icon_on').removeClass('back_icon_on');
			$(this).next().css('display','block');
			$(this).addClass('back_icon_on');
		}
	});
	//
	function Tag_on(){
		$('.tag_on').removeClass('tag_on');
		$(this).addClass('tag_on');
	}
	$('.tag').on('click',Tag_on);
	//添加、修改、删除分类
	$('.fun_ul li').on('mouseover',function(){
		$('.fun_on').removeClass('fun_on');
		$(this).addClass('fun_on');
	}).on('mouseleave',function(){
		$('.fun_on').removeClass('fun_on');
	}).on('click',function(){
		$('.fun_ul').css('display','none');
		$('.back_icon_on').removeClass('back_icon_on');
	});
	//tianjia
	$('.add').on('click',function(){
		$(this).parents('.tag_line').next().find('.add_tag').trigger('click');
	})
	$('.add_tag').on('click',function(){
		$('.quit_mod').trigger('click');
		$('.quit_del').trigger('click');
		//退出
		var quit = "<li class='quit_add'>退出添加</li>";
		$(this).parent().append(quit);
		$('.quit_add').on('click',function(){
			$('.add_no').click();
			$('.quit_add').remove();
		});
		//
		var new_input = "<li class='tag new_input' contenteditable='true'></li>";
		var add_confirm = "<li class='tag_con'><span class='add_yes'>确定</span><span class='add_no'>取消</span></li>";
		$(this).before(new_input);
		$('.new_input').after(add_confirm);
		$('.add_yes').on('click',function(){
			$('.new_input').attr('contenteditable','false');
			$('.new_input').removeClass('new_input');
			$('.tag_con').remove();
			$('.quit_add').remove();
		});
		$('.add_no').on('click',function(){
			$('.tag_con').remove();
			$('.new_input').remove();
			$('.quit_add').remove();
		});
	});
	//xiugai
	$('.modif').on('click',function(){
		$('.quit_add').trigger('click');
		$('.quit_del').trigger('click');
		$(this).parents('.tag_line').next().find('.tag').addClass('edit');
		//退出
		var quit = "<li class='quit_mod'>退出修改</li>";
		$(this).parents('.tag_line').next().append(quit);
		$('.quit_mod').on('click',function(){
			$('.con_no').click();
			$('.edit').unbind('click');
			$('.tag').on('click',Tag_on);
			$('.edit').removeClass('edit');
			$('.quit_mod').remove();
		});
		//
		$('.edit').on('click',function(){
			var text = $(this).text();
			$('.edit_on').attr('contenteditable','false');
			$('.edit_on').removeClass('edit_on');
			$('.tag_con').remove();
			$(this).addClass('edit_on');
			$(this).attr('contenteditable','true');
			var confirm = "<li class='tag_con'><span class='con_yes'>确定</span><span class='con_no'>取消</span></li>";
			$(this).after(confirm);
			$('.con_yes').on('click',function(){
				$('.edit_on').attr('contenteditable','false');
				$('.edit_on').removeClass('edit_on');
				$('.tag_con').remove();
			});
			$('.con_no').on('click',function(){
				$('.edit_on').text(text);
				$('.edit_on').attr('contenteditable','false');
				$('.edit_on').removeClass('edit_on');
				$('.tag_con').remove();
			});
		});
	});
	//shanchu
	$('.delete').on('click',function(){
		$('.quit_add').trigger('click');
		$('.quit_mod').trigger('click');
		//退出
		var quit = "<li class='quit_del'>退出删除</li>";
		$(this).parents('.tag_line').next().append(quit);
		$('.quit_del').on('click',function(){
			$('.tag_del').css('display','none');
			$('.quit_del').remove();
			$('.tag').unbind('click');
		});
		//
		$(this).parents('.tag_line').next().find('.tag_del').css('display','block');
		$('.tag').on('click',function(){
			$(this).remove();
		});
	});
    //商品修改
    $('.pro_mod').on('click',function(){
        location.href = "admin/mod";
    });
    //商品删除
    $('.pro_del').on('click',function(){
        $(this).parents('.pro_li').remove();
    });
    //商品添加
    $('.pro_add').on('click',function(){
        location.href = "admin/add";
    });
</script>
</html>