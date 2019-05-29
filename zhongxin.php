<?php
include("query.php");
if(isset($_GET["page"])){
	$page=$_GET["page"];
}
else{
	$page=1;
}

@$pagesize=5;//每页显示的数量

$startsize=($page-1)*$pagesize;//从第几页的数据开始
$sql="select *from login limit {$startsize},{$pagesize}";
$sresult=mysql_query($sql);

$sql2="select *from login";
$re2=mysql_query($sql2);
@$rowscount=mysql_num_rows($re2);//获取总记录数

$pagecounts=ceil($rowscount/$pagesize);


?>
<html>
<!--	<a href="javascript：void(0)" onclick="document.getElementById('top').innerHTML
-->	<meta charset="utf-8" />
	<title>个人中心 </title>
	
	<link  href="css/login.css"  rel="stylesheet" rev="stylesheet" type="text/css" />
	<link  href="css/zhucedeng.css"  rel="stylesheet" rev="stylesheet" type="text/css" />
	<link  href="css/liuyan.css"  rel="stylesheet" rev="stylesheet" type="text/css" />
	<link href="css/zhongxing.css"  rel="stylesheet " rev="stylesheet" type="text/css"/>
	<head>
		
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
				
					
					<div  class="text-liuyan">
					<div class="text-bin">
						<h1><strong>Personal Center(个人中心)</strong></h1>
					</div>
					<div class="text-ta">
						<div style="float: left;">
							<input type="text" placeholder="secah..." style="width:200px; height: 40px;font-size: 20px;  background-color:#000000; border:none; border-radius: 10px; margin-top: 25px; color: #FFFFFF;"  />

						</div>
						<div style="float: left; padding-top: 5px;">
							<img src="images/search.png" style="width: 40px; height: 40px; padding-top: 20px;" />
						</div>
					</div>
 
				</div>
					
					<div class="cneter-in">
					<div class="cha"><img src="images/ribbon.png" style="margin-left: 72%;"/></div>
							<ul>
								<li> ipsum dolor sit amet, consectetuer adipiscing elit.</li>
								<li>Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
								<li>Donec libero. Suspendisse bibendum. </li>
								<li>Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu 
					posuere nunc justo tempus leo.</li>
								<li>ef="index.php">Donec mattis, purus nec placerat bibendum, dui pede condimentum 
					odio, ac blandit ante orci ut diam.</li>
								<li>Cras fringilla magna. Phasellus suscipit, leo a pharetra 
					condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque.</a></li>
							
							</ul>
					</div>
					
					<div class="cneter-an">
						<div class="pacing">
							
							<table >
								<tr>
									
								<th>ID</th>
								<th>用户名</th>
								<th>密码</th>
								<th>性别</th>
								<th>年龄</th>
								<th>身份证</th>
								<th>电话</th>
								</tr>
								<?php
			while($row=mysql_fetch_array($sresult)){
				echo "<tr align=center>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>
<a href=userofin.php?uid=".$row["id"].">".$row["name"]."</a></td>";
				echo "<td>".$row["password"]."</td>";
				echo "<td>".($row["sex"]==0 ? "男" : "女")."<td>";
				echo "<td>".$row["age"]."</td>";
				echo "<td>".$row["cid"]."</td>";
				echo "<td>".$row["tel"]."</td>";
				
				echo "</tr>";
			}
			?>
			<tr align="center">
				<td colspan="6">
				<?php
				if($page==1){
					echo "首页&nbsp;&nbsp;";
				}
				else{
				echo "<a href=zhongxin.php?page=1>首页&nbsp;&nbsp;</a>"	;
				}
				
				if($page==1){
					echo "上一页&nbsp;&nbsp;";
				}
				else{
				echo "<a href=zhongxin.php?page=".($page-1).">上一页&nbsp;&nbsp;</a>";
				}
				
				if($page==$pagecounts){
					echo "下一页&nbsp;&nbsp;";
				}
				else{
					echo "<a href=zhongxin.php?page=".($page+1).">下一页&nbsp;&nbsp;</a>";
				}
				
				if($page==$pagecounts){
					echo "末页&nbsp;&nbsp;";
				}
				else{
					echo "<a href=zhongxin.php?page=".$pagecounts.">未页&nbsp;&nbsp;</a>";
				}
				echo "当前页：".$page.'/'.$pagecounts;
				?>
				</td>
			</tr>
							</table>
							
						</div>
						
					</div>
					<div class="text-footer">
	<p>2018 <strong>Copyright Info Here</strong>&copy;版权所有权：戴金金,希望有能者改进！</p>
	</div>
				
				
			</div>
		</body>
	</head>
</html>
