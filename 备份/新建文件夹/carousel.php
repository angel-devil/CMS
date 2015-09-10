<?php
header("Content-Type: text/html;charset=utf-8");
require './config.php';


$s = new sqlhelper();

 $s->execute_sql("set @mycnt=0;");
$smarty->assign('array2',$s->select_nav("select @mycnt := @mycnt +1 as id, pic1 from sec_table order by releasedate desc limit 0,4;"));


// $smarty->display("carousel.tpl");

?>
