<?PHP
//引用类文件
require './config.php';
// require './carousel.php';
header("Content-type: text/html; charset=utf-8"); 

$filename = 'lock.php';
$fileconfig = 'cache.php';
// echo filesize($filename);
if (!file_exists($filename) || filesize($fileconfig)==0) {
echo "网站数据库尚未安装<br><br><a href='install.php'>自动跳转</a>";
header("Refresh:3;url=install.php");
exit;
}

//赋值
$s = new sqlhelper();

// print_r($s->select_nav("select navname from nav_table;"));

//导航条
$smarty->assign('navarray',$s->select_nav("select navname,navid from nav_table  order by navsort;"));
$smarty->assign('subarray',$s->select_nav("select subname,navid,subid from sub_table  order by subsort;"));




//引用模板文件
$smarty->display('nav.tpl');
// $smarty->display('table.tpl');
// $smarty->display('carousel.tpl');
    ?>   