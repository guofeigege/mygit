<?php
include("query.php");
if(isset($_POST["submit"])){
	$name=$_POST["name"];
	$password=$_POST["password"];
	$sex=$_POST["sex"];
	$age=$_POST["age"];
	$cid=$_POST["cid"];
	$tel=$_POST["tel"];
	
	$dai="insert into login(name,password,sex,age,cid,tel)
	 values('$name','$password','$sex',$age,'$cid','$tel')";
	 $regreusult=mysql_query($dai);
	 if($regreusult){
	 	echo "<script>alert('注册成功');window.location.href='DengIu.php';</script>";
	 }
	 else{
	 	 die('注册失败'.mysql_error());
	 }
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>注册</title>
<link rel="stylesheet" rev="stylesheet" href="css/login.css" type="text/css" />
<link rel="stylesheet" rev="stylesheet" href="css/zhucedeng.css" type="text/css"/>

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
  				<div class="blue"></a>
			Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
			Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
			posuere nunc justo tempus leo. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. 
			Cras id urna. <a href="index.html">Learn more...</a>
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
  					
  					<div class="index-login-right1">
  					<form action="ZhuCe.php"  method="post" enctype="multipart/form-data">
  					<table>
  						<tr>
  							<td>用户名：</td><td><input type="text" name="name" required="required" ></td>
  						</tr>
  						<tr>
  							<td>密码：</td><td><input type="password" placeholder="xiu" required="required"  name="password" ></td>
  						</tr>
  						
  						<tr>
  							<td>性别：</td><td><input type="radio" name="sex" id="sex" value="男" required="required" >男&nbsp;
  								&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"name="sex" id="sex" value="女" required="required" >女
  							</td>
  						</tr>
  						
  						<tr>
  							<td>年龄</td><td><input type="number" required="required"  placeholder="17" max="120" min="0" name="age" 
  								style="width: 170px; "></td>
  						</tr>
  						<tr>
  							<td>身份证：</td><td><input type="text" required="required"  placeholder="xiu" name="cid" id="cid"></td>
  						</tr>
  						
  						<tr>
  							<td>电话：</td><td><input type="number" required="required"  placeholder="xiu" name="tel" style="width: 170px; "></td>
  						</tr>
  						
  						<tr >
  							<td></td><td ><input type="submit"  placeholder="注册"  value="注册" name="submit">
  								&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  							<a href="DengIu.php"><input type="button" placeholder="登录"  value="已有账号" ></a></td>
  							
  							
  						</tr>
  					</table>
  					</form>
  					</div>
  				</div>
  				<div class="dibu"><p>2018 <strong>Copyright Info Here</strong>&copy;版权所有权：戴金金,希望有能者改进！</p></div>
  			</div>
  		
</body>	
</html>