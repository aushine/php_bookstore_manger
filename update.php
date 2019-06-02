<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改页</title>
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
		.form1{
		
		margin:100px auto;
		margin-left:200px
	}
		.div4{
			width:1000px;
			text-align:center;
			margin:0 auto;
			margin:0px;
			
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
<?php
include_once("connection.php");
if($_GET['action']=="update"){
	$sql = "select * from hewenlong where id =".$_GET['id'];
	$res = mysqli_query($conn, $sql);
	$rows = mysqli_fetch_row($res);
	
}

?>	
	
	<form method="post" action="update_ok.php" class="form1">
	书名<input type="text" name="book_name" value="<?php echo $rows[1]?>">
	价格<input type="text" name="price" value="<?php echo $rows[2]?>">
	出版日期<input type="text" name="out_date" value="<?php echo $rows[3]?>">
	类别<input type="text" name="type" value="<?php echo $rows[4]?>">
	<input type="hidden" name="action" value="update">
	<input type="hidden" name="id" value="<?php echo $rows[0]?>">
	<br>
	<br>
	<div class="div4">
	<input type="submit" name="Submit" value="修改"> 
	<input type="reset" name="rest" value="重置"> 
	</div>
	</form>
</body>
</html>
