<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<script src="/syslab-kh/web/Public/Js/jquery-1.11.2.min.js"></script>
	<script src="/syslab-kh/web/Public/Js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="/syslab-kh/web/Public/css/Login_index.css">
</head>
<body>
	<div class="well" id="d1">
		<form method="POST" action="<?php echo U('Admin/Pro/add');?>" id="f1">
		 项目标题:  <input type="text" name="name" style="width:500px;height:30px;font-size:20px;"></br>

		 项目组长:  <input type="text" name="leader" style="width:500px;height:30px;margin-top:10px;font-size:20px;"></br>
		 联系方式:  <input type="text" name="number" style="width:500px;height:30px;margin-top:10px;font-size:20px;"></br>
		 开始时间:  <input type="text" name="time" style="width:500px;height:30px;margin-top:10px;font-size:20px;">请以xx-xx-xx的方式</br>
		 项目简介:  <textarea type="text" name="content" id="content" style="width:600px;height:400px;font-size:20px;margin-top:30px;"></textarea>
		 </br>
		 <input type="submit" name="sub" style="width:50px">
		</tr>
		 
		</form>
		
	</div>

</body>
</html>