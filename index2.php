<?php

$id=$_GET['id'];
$len_id=strlen($id);
$int_id=intval($id);

if ($len_id<=4 && $intval<2000) {
	include("./pages/page_".$id.".txt");
}
?>

