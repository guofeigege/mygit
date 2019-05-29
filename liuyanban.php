<?php 
include("query.php");
	?>
<html>

	<head>
		<meta charset="utf-8" />
		<title>留言板</title>
		<link href="css/login.css" rel="stylesheet" rev="stylesheet" type="text/css" />
		<link href="css/zhucedeng.css" rev="stylesheet" rel="stylesheet" type="text/css"/>
		<link href="css/liuyan.css" rel="stylesheet" rev="stylesheet" type="text/css" />
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
			<div>
				<div  class="text-liuyan">
					<div class="text-bin">
						<h1><strong>若你华意彩言话有金,待我富山海阔便有你。</strong></h1>
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
			</div>
			<div class="texta">
				<div class=" text-left">
					<h1>精彩语录,欢迎留言。</h1>
					<ul class="archive">
						<li>
							<div>
								<img src="images/thumb-4.jpg">
								&nbsp;&nbsp;
								<img src="images/thumb-3.jpg"/>
							</div>
						</li>
						<li>
							<div>
								<strong>
								<img src="images/bullet.gif"/>
								<a href="index.php">
									你看见一束光透过你的身体,也许你很迷茫，你不知道何去何从。
								</a></strong>
							</div>
						</li>
						<li>
							<div>
								<strong>
								<img src="images/bullet.gif"/>
								<a href="index.php">
									让梦想飞向远方，你才会知道你还没睡醒！你们加游，我睡觉。
								</a></strong>
							</div>
						</li>
						<li>
							<div>
								<strong>
								<img src="images/bullet.gif"/>
								<a href="index.php">
									吃一寸，长一尺，有道理，嗯嗯，马的，老子吃了一年的饭，怎么不长啊！
								</a></strong>
							</div>
						</li>
						<li>
							<div>
								<strong>
								<img src="images/bullet.gif"/>
								<a href="index.php">
									
									写万卷代码，找万卷bug，代码农们，相信你们自己会行的,加油！加油！
								</a></strong>
							</div>
						</li>
						<li>
							<div>
								<strong>
								<img src="images/bullet.gif"/>
								<a href="index.php">
									幸福会迟到，但绝不会缺席，哈哈，下课了，又可以吃饭了
								</a></strong>
							</div>
						</li>
					</ul>
				</div>
				<div class=" text-right">
					<div class="text-chi" >
						<form>
						<table>
						<tr>
							<td><input type="text" placeholder="谢谢你的意见"/></td>
						</tr>
						<tr><td ><textarea rows="10" cols="22" placeholder="
							哈哈"></textarea></td></tr>
						<tr><td><input type="submit" value="提交" />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="reset" value="重置" /></td></tr>
						</table>
						</form>
					</div>
				</div>
				
			</div>
			<div class="text-footer">
	<p>2018 <strong>Copyright Info Here</strong>&copy;版权所有权：戴金金,希望有能者改进！</p>
	</div>
	
	</div>
		</div>
		
		
		</div>
	</body>
</html>
