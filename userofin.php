<?php
$conn=@mysql_connect("localhost","root","root") or die("连接失败".mysql_error());
mysql_query("set names utf8");
mysql_select_db("daijin",$conn);

if(isset($_GET["uid"])){
	$uid=$_GET["uid"];
	$sql="select  id,name,password,sex,age,cid,tel from login where id=$uid";
	$infore=mysql_query($sql);
	$row=mysql_fetch_row($infore);
}
?>
<!DOCTYPE html>
<style type="text/css">
.studnet{
width: 40%; height: 450px; margin:0px auto ;
}

</style>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>
	<body>		
			<div >
			<p>id：<?php echo $row[0]?></p>
			<p>用户：<?php echo $row[1]?></p>
			<p>密码：<?php echo $row[2]?></p>
			<p>性别：<?php echo $row[3]?></p>
			<p>年龄：<?php echo $row[4]?></p>
			<p>身份证：<?php echo $row[5]?></p>
			<p>电话：<?php echo $row[6]?></p>
			<a href="index.php">返回首页</a>
		</div>
	</body>
</html>