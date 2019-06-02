<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	.echo_data{
		text-align:center;
		/*width:500px;*/
		/*# height:500px;
		# background-color:red;*/
		margin:100px auto;
		font-size:100px;
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
<?php
echo '<div class="echo_data">';
echo "test";
include_once("connection.php");
if($_POST['action'] == 'update'){
	if(!($_POST['book_name'] and $_POST['price'] and $_POST['out_date'] and $_POST['type'])){
		echo "<script>你好阿</script>";
		echo"输入不允许为空.点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sql = "update hewenlong set book_name='".$_POST['book_name']."',price='".$_POST['price']."',out_date='".$_POST['out_date']."',type='".$_POST['type']."'where id=".$_POST['id']."";
	}
	$res=mysqli_query($conn,$sql);
	if($res){
		echo "修改成功,点击<a style='color:red' href='view.php'>这里</a>查看";
	}else{
		echo "python $sql";
	}
}
echo "</div>";
?>

</body>
</html>
