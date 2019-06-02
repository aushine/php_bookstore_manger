<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.div1{
			text-align: center;
			
			margin:125px auto;
		}
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
		.div2{
			height:300px;
			border:1px solid black;
			background-color: gray;
			text-align: center;
			font-size:60px;
				}
	</style>
</head>
<body>
<div class=div2>
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

<div class="div1">
	<form action="" method="post">
	<td>书名:<input type="text" id=book_name name="book_name"></td>
	<td>价格:<input type="text" id=price name="price"></td>
	<td>出版日期:<input type="text" id=outdate name="out_date"></td>
	<td>类型:<input type="text" name="type"></td>
	<br>
	<br>
	<br>
	<br>
	<br>
	<input type="submit" class="up" value="插入">
	</form>
</div>
<?php	
	include_once("connection.php");
	$content = $_POST;
	#echo count($content);
	$name = $content[book_name];
	$price = $content[price];
	$out_date = $content[out_date];
	$type = $content[type];
	$sql = "insert into hewenlong(book_name,price,out_date,type) values('$name','$price','$out_date', '$type');";
	#echo "$sql";
	if($name and $price and $out_date and $type){
		$res = mysqli_query($conn, $sql);
		if($res){
			echo "<script>alert('数据插入成功')</script>";				
	}else{
			echo "<script>alert('出版日期格式有误，数据插入失败')</script>";
	}
}
	else{
		echo "<script>alert('无数据')</script>";		
	}


	
?>
</body>
</html>
