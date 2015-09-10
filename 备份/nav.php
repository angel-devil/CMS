<?PHP
//引用类文件
require './libs/Smarty.class.php';
require './sqlhelper.php';

$smarty = new Smarty;  
//设置各个目录的路径，这里是安装的重点
$smarty->template_dir = "templates/templates";
$smarty->compile_dir = "templates/templates_c";
$smarty->config_dir = "templates/config";
$smarty->cache_dir = "templates/cache";
//smarty模板有高速缓存的功能，如果这里是true的话即打开caching，但是会造成网页不立即更新的问题，当然也可以通过其他的办法解决
$smarty->caching = false;



//赋值
$s = new sqlhelper();

// print_r($s->select_nav("select navname from nav_table;"));

$smarty->assign('navarray',$s->select_nav("select navname,navid from nav_table  order by navsort;"));


$smarty->assign('subarray',$s->select_nav("select * from sub_table  order by subsort;"));


// print_r($s->select_nav("select subid from sub_table  order by subsort;"));

//引用模板文件
$smarty->display('nav.tpl');
// $smarty->display('table.tpl');

    ?>   