<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:../user_reg/login.html");
    exit();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CDMG</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style type="text/css">
    body{
        background: #CCC
    }
      html{font-size:11px;}
  	fieldset{width:520px; margin: 0 auto;}
  	legend{font-weight:bold; font-size:14px;}
  	label{float:left; width:70px; margin-left:10px;}
  	.left{margin-left:80px;}
  	.input{width:150px;}
  	span{color: #666666;}
</style>
</head>
<body>
<h1>COMPUTATIONAL DATA MINING GROUP</h1>
<div class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
    <a class="navbar-brand" href="../index.html">CDMG</a>
    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapse">
        <span class="sr-only">Toggle Navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    </div>
    <div class="collapse navbar-collapse" id="collapse">
		<ul class="nav navbar-nav">
			<li><a href="../index.html">首页</a></li>
			<li class="active"><a href="../admin/article.add.php">新建简历</a></li>
			<li><a href="../admin/article.manage.php">简历管理</a></li>
			<li><a href="../user_reg/login.php?action=logout">注销登陆</a></li>
		</ul>
    </div>
</div>
<div class="container-fluid" style="background:white; padding-bottom:20px; margin-bottom:10px">
<div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3 col-xs-12" style="background:white;">
    <h2 class="page-header">新建简历</h2>
    <form action="article.add.handle.php" method="post" role="form" name="form1" onSubmit="return InputCheck(this)">
        <div class="form-group">
            <label for="author">注册账号</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text" name="author" class="form-control" id="author" placeholder="请输入账号">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="username">姓名</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" id="username" placeholder="请输入姓名">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="phone">手机号码</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" id="phone" placeholder="请输入手机号码">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="grade">年级</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" id="grade" placeholder="请输入年级">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="class">班级</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" id="class" placeholder="请输入班级">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="email">电子邮箱</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" name="email" id="email" placeholder="请输入电子邮箱">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="location"  style="width:100%;">籍贯（省市）</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" id="location" placeholder="请输入籍贯（省市）">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="eng_4"  style="width:100%;">英语四级成绩</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" id="eng_4" placeholder="请输入四级成绩">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="eng_6"  style="width:100%;">英语六级成绩</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <input type="text"  class="form-control" id="eng_6" placeholder="请输入六级成绩">
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="computer"  style="width:100%;">计算机水平</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <textarea type="textarea" rows="3" class="form-control" id="computer" placeholder="请输入计算机水平"></textarea>
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="jingli"  style="width:100%;">在校经历/社会实践经历/基础实验室or meta学习经历</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <textarea type="textarea" rows="3" class="form-control" id="jingli" placeholder="请输入经历"></textarea>
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="jiangli"  style="width:100%;">获奖情况</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
            <textarea type="textarea" rows="3" class="form-control" id="jiangli" placeholder="请输入经历"></textarea>
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="zhuanye"  style="width:100%;">专业课掌握程度及其他能力（统计、PS等）</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
            <textarea type="textarea" rows="3" class="form-control" id="zhuanye" placeholder="请输入经历"></textarea>
            <!-- </div> -->
        </div>
        <div class="form-group">
            <label for="selfintro"  style="width:100%;">自我推荐理由、小组建设建议</label>
            <!-- <div class="col-md-8 col-sm-8 col-xs-8 col-lg-8"> -->
                <textarea type="textarea" rows="3" class="form-control" id="selfintro" placeholder="请输入自荐理由"></textarea>
            <!-- </div> -->
        </div>
        <div class="form-group" style="margin-left: 0;">
            <div class="col-md-4  col-md-offset-4 col-sm-4 col-sm-offset-4 col-xs-4 col-xs-offset-4 col-lg-4 col-lg-offset-4">
             <input type="submit" class="form-control btn-success" name="submit" value="提交" style="min-width:80px"></div>
         </div>
    </form>
    </form>
</div>
</div>
<!-- <div id="wrapper"> -->
<!-- start header -->
<!-- <div id="header">
	<div id="logo">
		<h1><a href="#">新建简历<sup></sup></a></h1>
		<h2></h2>
	</div>
	<div id="menu">
		<ul>
			<li><a href="../index.html">首页</a></li>
			<li><a href="../admin/article.add.php">新建简历</a></li>
			<li class="active"><a href="../admin/article.manage.php">简历管理</a></li>
			<li><a href="../user_reg/login.php?action=logout">注销登陆</a></li>
		</ul>
	</div>
</div> -->
<!-- end header -->
<!-- <table width="100%" height="520" border="0" cellpadding="8" cellspacing="1" bgcolor="#000000"> -->
 <!-- <tr>
    <td height="89" colspan="2" bgcolor="#FFFF99"><strong>后台管理系统</strong></td>
</tr>-->
  <!-- <tr>
  <td width="837" valign="top" bgcolor="#FFFFFF">
    <form id="form1" name="form1" method="post" action="article.add.handle.php">
      <table width="779" border="0" cellpadding="8" cellspacing="1" align=center>
        <td width="119">
			  注册账号
		</td>
          <td width="625">
			  <label for="author"></label>
            <input type="text" name="author" id="author" />
		  </td>
        </tr>
		<tr>
			<td>
				姓名
			</td>
			 <td width="625">
				<label for="usrname"></label>
			    <input type="text" name="usrname" id="username" />
		    </td>
		</tr>
		<tr>
			<td>
				手机号码
			</td>
			<td width="625">
				<label for="phone"></label>
			    <input type="text" name="phone" id="phone" />
		    </td>
		</tr>
		<tr>
			<td>
				年级
			</td>
			<td width="625">
				<label for="grade"></label>
				<input type="text" name="grade" id="grade" />
			</td>
		</tr>
		<tr>
			<td>
				班级
			</td>
			<td width="625">
				<label for="class"></label>
				<input type="text" name="class" id="class" />
			</td>
		</tr>
		<tr>
			<td>
				邮箱
			</td>
			<td width="625">
				<label for="email"></label>
				<input type="text" name="email" id="email" />
			</td>
		</tr>
		<tr>
			<td>
				籍贯(省市)
			</td>
			<td width="625">
				<label for="location"></label>
				<input type="text" name="location" id="location" />
			</td>
		</tr>
		<tr>
			<td>
				英语四级成绩
			</td>
			<td width="625">
				<label for="eng_4"></label>
				<input type="text" name="eng_4" id="eng_4" />
			</td>
		</tr>
		<tr>
			<td>
				英语六级成绩
			</td>
			<td width="625">
				<label for="eng_6"></label>
				<input type="text" name="eng_6" id="eng_6" />
			</td>
		</tr>
        <tr>
          <td>
		      计算机水平
	      </td>
          <td>
			  <label for="computer"></label>
            <textarea name="computer" id="computer" cols="60" rows="5"></textarea>
		  </td>
        </tr>

        <tr>
          <td>
			  在校经历、社会实践经历、基础实验室/meta学习经历
		  </td>
          <td><textarea name="jingli" cols="60" rows="15" id="jingli"></textarea></td>
        </tr>
		<tr>
		  <td>
			  获奖情况
		  </td>
		  <td><textarea name="jiangli" cols="60" rows="15" id="jiangli"></textarea></td>
		</tr>
		<tr>
		  <td>
			  专业课掌握程度及其他能力（统计、PS等）
		  </td>
		  <td><textarea name="zhuanye" cols="60" rows="15" id="zhuanye"></textarea></td>
		</tr>
		<tr>
		  <td>
			  自我推荐理由、小组建设建议
		  </td>
		  <td><textarea name="selfintro" cols="60" rows="15" id="selfintro"></textarea></td>
		</tr>
        <tr>
          <td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交" /></td>
          </tr>
      </table>
    </form></td>
  </tr> -->
<!--
  <tr>
    <td colspan="2" bgcolor=lightgreen><strong>版权所有</strong></td>
  </tr>
-->
<div class="container-fluid">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="text-align:center">
    <foot>
        版权所有 2017 @CDMG
    </foot>
</div>
</div>
</body>
</html>
