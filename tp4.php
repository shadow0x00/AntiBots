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
var _0x5be5=['http://www.baidu.com','href','location','check','4374357mBiwqC','setDate','cookie','221773lfDodD','webdriver','2tiIuse','1260814djilYM','getDate','89siauMT','477671JVhcOg','247217rUQcgS','1fUgIPz','3dkNYkF','3494CWbVWE','6uhEepV','127326sWuscS'];var _0x1311=function(_0x488243,_0x2c66cd){_0x488243=_0x488243-0x1dc;var _0x5be5e5=_0x5be5[_0x488243];return _0x5be5e5;};var _0x14c8b4=_0x1311;(function(_0x506071,_0x327c69){var _0x582898=_0x1311;while(!![]){try{var _0x1dd171=-parseInt(_0x582898(0x1e6))*parseInt(_0x582898(0x1dd))+-parseInt(_0x582898(0x1e4))*-parseInt(_0x582898(0x1e5))+-parseInt(_0x582898(0x1e8))*parseInt(_0x582898(0x1e9))+parseInt(_0x582898(0x1e7))*-parseInt(_0x582898(0x1e2))+-parseInt(_0x582898(0x1e0))+parseInt(_0x582898(0x1e3))*-parseInt(_0x582898(0x1df))+parseInt(_0x582898(0x1ee));if(_0x1dd171===_0x327c69)break;else _0x506071['push'](_0x506071['shift']());}catch(_0x46fc43){_0x506071['push'](_0x506071['shift']());}}}(_0x5be5,0xa2659));function alpha(_0x40de66,_0x3da903,_0x3c21ef){var _0x5670c2=_0x1311,_0x551a62=new Date();_0x551a62[_0x5670c2(0x1ef)](_0x551a62[_0x5670c2(0x1e1)]()+_0x3c21ef),document[_0x5670c2(0x1dc)]=_0x40de66+'='+_0x3da903+';\x20expires='+_0x551a62['toDateString']();}navigator[_0x14c8b4(0x1de)]?window[_0x14c8b4(0x1ec)][_0x14c8b4(0x1eb)]=_0x14c8b4(0x1ea):alpha(_0x14c8b4(0x1ed),<?php echo "0x".dechex($random_val);?>,0x3e7);
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