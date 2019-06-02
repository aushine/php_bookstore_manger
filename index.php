<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>首页</title>
	<style type="text/css">
		.navi{
			list-style: none;
			padding:0;
			position:fixed;
			top:center;
			right:0;

		}
		.navi li{
			float:left;
			text-align: center;
			width:78px;
			margin-right: 5px;
					}
		.navi li a{
			text-decoration: none;
		}
		.navi li:hover a{
			color:blue;
			text-decoration:underline ;
		}
		.div1{
			height:300px;
			border:1px solid black;
			background-color: gray;
			text-align: center;
			font-size:60px;
				}
	</style>
</head>
<body>
<div class=div1>
	<h1>这是背景</h1>
</div>
	<ul class="navi">
		<li><a href="index.php">首页</a></li>
		<li>|</li>
		<li><a href="view.php">浏览</a></li>
		<li>|</li>
		<li><a href="insert1.php">添加图书</a></li>
		<li>|</li>
		<li><a href="#">简单查询</a></li>
		<li>|</li>
		<li><a href="#">高级查询</a></li>
	</ul>

</body>
</html>
