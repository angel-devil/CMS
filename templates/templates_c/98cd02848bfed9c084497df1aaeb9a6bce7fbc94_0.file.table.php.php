<?php /* Smarty version 3.1.27, created on 2015-09-02 16:06:52
         compiled from "D:\wamp\www\menhu_v1.0\table.php" */ ?>
<?php
/*%%SmartyHeaderCode:1188655e71e9c421c75_98813610%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98cd02848bfed9c084497df1aaeb9a6bce7fbc94' => 
    array (
      0 => 'D:\\wamp\\www\\menhu_v1.0\\table.php',
      1 => 1441208787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188655e71e9c421c75_98813610',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e71e9c438650_62715754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e71e9c438650_62715754')) {
function content_55e71e9c438650_62715754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1188655e71e9c421c75_98813610';
echo '<?PHP
';?>//引用类文件
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


//点击新增导航条按钮
if($_POST['function'] == 'addnav')
{

		$sql = "insert into nav_table (navid,navname,navsort) VALUES (".$_POST[navid].",'".$_POST[navname]."',".$_POST[navsort].")";

// echo $sql;
}

//点击删除导航条按钮
if($_POST['function'] == 'delnav')
{

		$sql = "delete from nav_table WHERE navid=".$_POST['navid']."";

// echo $sql;
}


//点击新增子菜单按钮
if($_POST['function'] == 'addsub')
{

		$sql = "insert into sub_table (subid,subname,subsort,navid) VALUES (".$_POST[subid].",'".$_POST[subname]."',".$_POST[subsort].",".$_POST[navid].")";

// echo $sql;
}


//点击删除子菜单按钮
if($_POST['function'] == 'delsub')
{

		$sql = "delete from sub_table WHERE subid=".$_POST['subid']."";

// echo $sql;
}



//赋值
$s = new sqlhelper();

// print_r($s->select_nav("select navname from nav_table;"));
$s->execute_sql($sql);


$newnavid = $s->select_nav("select max(navid) as navid from nav_table");
// print_r($newnavid[0][navid]);       //Array ( [0] => Array ( [subid] => 5 ) ) 
$smarty->assign('newnavid',$newnavid[0][navid]+1);

$newsubid = $s->select_nav("select max(subid) as subid from sub_table");
// print_r($newsubid);
$smarty->assign('newsubid',$newsubid[0][subid]+1);

$smarty->assign('navarray',$s->select_nav("select * from nav_table  order by navsort;"));
$smarty->assign('subarray',$s->select_nav("select * from sub_table  order by subsort;"));

//引用模板文件
$smarty->display('table.tpl');    


<?php echo '?>';?>   <?php }
}
?>