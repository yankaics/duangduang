<?php if (!defined('THINK_PATH')) exit();?><html >
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript"> 
		function sub(){   
			if(check())
				{    document.getElementById("myform").submit();   
			alert("提交成功！");    }  } 
			function check(){    var yijian = document.getElementById("yijian").value;  
			if(yijian==null || yijian=="" ||yijian=="请输入留言！")
				{    alert("请输入您的意见！");    
			return false;    }   
			return true;  }
		</script>
		<style>
			a{TEXT-DECORATION:none}a:hover{TEXT-DECORATION:underline}
		</style>
	</head>
	<body>
	<form  id="myform" method="POST" action="<?php echo U('Admin/Login/add');?>">
			<div>
				<input name="message" type="textarea"  cols="" rows="" class="xieyi" onfocus="this.value=''" id="yijian">请输入留言!
			</div>
		</form>
		<div>
			<button><a href="javascript:sub();" type="submit">发送</a></button>
		</div>
	</body>
	</html>