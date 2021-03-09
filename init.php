<?php
$nb_page = 100;
$pages_path = "./pages/";
$slat = "血色的铁骑织成网";
$text = <<<TEXE
血色的铁骑织成网

从此没有穹苍

我的眼泪再怎么汪洋

也浇不熄火光
TEXE;

for ($i=0; $i < $nb_page; $i++) { 
    file_put_contents($pages_path."page_".$i.".txt",$text);
}
$timenow = strtotime("now");
$my_flag = "flag{".md5($slat.$timenow)."}";
$flag_file_num = mt_rand(1,$nb_page);
file_put_contents($pages_path."/page_".$flag_file_num.".txt",$my_flag);

echo "flag is: ".$my_flag."<br>";
echo "id_page: ".$flag_file_num;
?>