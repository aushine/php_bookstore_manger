<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
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
		
		.table1{
			margin-top:100px;
			margin-left:300px;
			width:1000px;
		}
		.line1{
			background-color: #66ccff;
		}
		.table1 tr td{
			text-align: center;
			font-size:22px;
			border:1px  dotted black;
			border-top:0;
			border-left:0;
		}
	</style>
</head>
<div class=div1>
	<h1>这是背景</h1>
</div>
	<ul class="navi">
		<li><a href="index.php">首页</a></li>
		<li>|</li>
		<li><a href="#">浏览</a></li>
		<li>|</li>
		<li><a href="insert1.php">添加图书</a></li>
		<li>|</li>
		<li><a href="#">简单查询</a></li>
		<li>|</li>
		<li><a href="#">高级查询</a></li>
	</ul>
 <table class="table1">
 	<tr sytle = "background-color:gray" class="line1">
 		<td style="width:5%">id</td>
 		<td style="width:25%">书名</td>
 		<td style="width:10%">价格</td>
 		<td style="width:25%">出版日期</td>
 		<td style="width:10%">类别</td>
 		<td style="width:10%">操作</td>
 	</tr>
<?php
include_once("connection.php");
$sql = "select * from hewenlong order by id;";
$res = mysqli_query($conn,$sql);
while($rows=mysqli_fetch_row($res)){
	echo "<tr><td>$rows[0]</td><td>$rows[1]</td><td>$rows[2]</td><td>$rows[3]</td><td>$rows[4]";
	echo "<td><a href=update.php?action=update&id=".$rows[0].">修改</a><span>/</span>";
	echo "<a href=delete.php?action=del&id=".$rows[0].">删除";

	echo "</tr>";
}


?>
 </table>
</body>
</html>
