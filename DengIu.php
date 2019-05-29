<?php
include("query.php");
if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$password = $_POST["password"];
	$ucode = $_POST["ucode"];
	if($name && $password){
		session_start();
	if ($ucode == $_SESSION["authcode"]) {
		$sql = "select * from login where name='$name' and password='$password'";
		$lresult = mysql_query($sql);
		$rowresult = mysql_num_rows($lresult);//获取语句的记录数
			if($rowresult){
				$_SESSION["name"]=$name;
				echo "<script>alert('登录成功');window.location.href='liuyanban.php ';</script>";
			}
			else{
			    echo "<script>alert('登录失败,请重新登录');window.location.href='DengIu.php';</script>";	
			}	
		}
	
		else{
			    echo "<script>alert('验证码不对');window.location.href='DengIu.php';</script>";	
			}	
		
	}else{
			    echo "<script>alert('提交失败');window.location.href='DengIu.php';</script>";	
			}	
}

?>
<html>
	<head>
		<meta  charset="utf-8" />
		<title>登录</title>
		<link rel="stylesheet"  rev="stylesheet" type="text/css" href="css/login.css" />
		<link rel="stylesheet" rev="stylesheet" href="css/zhucedeng.css" type="text/css"/>
	</head>
	<body>
		<div class="banner">
	<a ></a>
					<ul>
					<li id="current"><a href="index.php">首页</a></li>
					<li><a href="DengIu.php">登录</a></li>
					<li><a href="ZhuCe.php">注册</a></li>
					<li><a href="liuyanban.php">留言版</a></li>
					<li><a href="zhongxin.php">个人中心</a></li>
					</ul>
</div>
		<div class="logo-aside">
  				
  				<div class="index-login">
  				<h1><strong>DreamTemplate.com</strong></h1>
  				<div class="yonghu">
  				<ul>
  					<li><img src="images/gravatar.jpg"></li>
  					<li><img src="images/gravatar.jpg"></li>
  					<li><img src="images/gravatar.jpg"></li>
  					<li><img src="images/gravatar.jpg"></li>
  					<li><img src="images/gravatar.jpg"></li>
  					<li><img src="images/gravatar.jpg"></li>
  					<li><img src="images/gravatar.jpg"></li>
  					<li><img src="images/gravatar.jpg"></li>
  				</ul>
  			
  				</div>
  				<div class="blue"><a href="index.html"></a>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
			Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
			posuere nunc justo tempus leo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
			Cras id urna. <a href="index.php">Learn more...</a>
			</div>
			<div  class="tiean">
				<img src="images/b20177d7322747ed4b4320748d35e7d6.jpg" width="148px" height="148px"/>
					&nbsp;
					<img src="images/bg.gif " height="148px"/>
					&nbsp;
				<img src="images/76945e9b40c4a30a40a78c64b66a377a.gif">
					
				</div>
  				</div>
  				
  				<div class="index-login-right">
  					
  					<div class="index-login-right1-a">
  						<form action="DengIu.php" method="post">
				<table>
					<tr>
						<td>用户：</td><td >
							<input type=" text" name="name">
						</td>
					</tr>
					<tr>
						<td>密码：</td><td >
							<input type="password" name="password">
						</td>
					</tr>
					
					<tr>
						<td>验证码:</td><td><input type="text" name="ucode" /><img src="code.php" onclick="this.src='code.php?nocache='+Math.random()" title="点击换一张" alt="点击换一张" /></td>
					</tr>
					<tr >
						<td ><input type="submit" name="submit" value="登录" /></td>
						<td><a href="ZhuCe.php"><input type="button" placeholder="未注册先注册"  value="未注册先注册" ></a></td>
					</tr>
			
				</table>
  					</form>
  					</div>
  				</div>
  				<div class="dibu"><p>2018 <strong>Copyright Info Here</strong>&copy;版权所有权：戴金金,希望有能者改进！</p></div>
  				
  			</div>
  		
	</body>
</html>