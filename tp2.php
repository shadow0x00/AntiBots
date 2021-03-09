<?php
session_start();
$text = "Welcome~";
if (isset($_GET['id'])&&isset($_SESSION['check'])&&$_SESSION['check']==$_COOKIE["check"]) {
	$id=$_GET['id'];
	$len_id=strlen($id);
	$int_id=intval($id);
	if ($len_id<=4 && $intval<1000) {
		include("./pages/page_".$id.".txt");
	}
}

$random_val = mt_rand(0,99999);
$_SESSION['check']=$random_val;
?>

<!DOCTYPE html>
<html>
<head>
	<title>狂翻书</title>
	<meta charset="utf-8">
</head>
<body>
<script type="text/javascript">
function setCookie(key,value,t){
    var oDate=new Date();
    oDate.setDate(oDate.getDate()+t);
    document.cookie=key+"="+value+"; expires="+oDate.toDateString();
}
setCookie("check",<?php echo $random_val;?>,999);
</script>
<h3><?php echo $text;?></h3>
<?php
if (isset($_GET['page'])&&$_GET['page']>1) {
	$page=$_GET['page'];
	$netx_page=$page+1;
	$pre_page=$page-1;
	for ($i=1+($page-1)*10; $i <= 10+($page-1)*10; $i++) { 
		echo "<a href=?id=$i>点击查看页面".$i."内容</a><br/>";
	}
	echo "<a href=?page=$pre_page>上一页</a><br/>";
	echo "<a href=?page=$netx_page>下一页</a><br/>";
}else{
	for ($i=1; $i <= 10; $i++) { 
		echo "<a href=?id=$i>点击查看页面".$i."内容</a><br/>";
	}
	echo "<a href=?page=2>下一页</a><br/>";
}

?>
</body>
</html>