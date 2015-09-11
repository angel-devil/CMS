<?PHP
//引用类文件
require './common.php';
require './config.php';


session_start();  //开启session
//自动登录
if (!empty($_SESSION['username']))
{
	$smarty->assign('logined','true');
}


//赋值
$snav = new sqlhelper($G);
$smarty->assign('navarray',$snav->select_nav("select navname,navid from nav_table  order by navsort;"));
$smarty->assign('subarray',$snav->select_nav("select * from sub_table  order by subsort;"));

//引用模板文件
// $smarty->display('nav.tpl');

    ?>   