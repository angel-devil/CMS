<?PHP
//引用类文件
require './config.php';
require './common.php';


//执行sql语句
$s = new sqlhelper($G);


//点击新增导航条按钮
if (@$_POST['function'] == 'addnav')
{
    @$sql = "insert into nav_table (navid,navname,navsort) VALUES (".$_POST[navid].",'".$_POST[navname]."',".$_POST[navsort].")";
    @$s->execute_sql($sql);
    header("Location: admin.php");
    exit;
}

//点击删除导航条按钮
if (@$_POST['function'] == 'delnav')
{
    @$sql = "delete from nav_table WHERE navid=".$_POST['navid']."";
}


//点击更新导航栏信息
if(@$_POST['function']=='update_nav')
{
	@$sql = "UPDATE nav_table SET navname='".$_POST['nname']."',navsort=".$_POST['nid']."   WHERE navid=".$_POST['navid']."";
}

//点击新增子菜单按钮
if (@$_POST['function'] == 'addsub')
{
    @$sql = "insert into sub_table (subid,subname,subsort,navid) VALUES (".$_POST[subid].",'".$_POST[subname]."',".$_POST[subsort].",".$_POST[navid].")";
}


//点击删除子菜单按钮
if (@$_POST['function'] == 'delsub')
{

    @$sql = "delete from sub_table WHERE subid=".$_POST['subid']."";
}


//点击更新子菜单栏信息
if(@$_POST['function']=='update_sub')
{
	@$sql = "UPDATE sub_table SET subname='".$_POST['sname']."',subsort=".$_POST['sid']."   WHERE subid=".$_POST['subid']."";
}

@$s->execute_sql($sql);

//目前导航条最的id，继续累加
$newnavid = $s->select_nav("select max(navid) as navid from nav_table");
@$smarty->assign('newnavid',$newnavid[0][navid]+1);

//目前子菜单最的id，继续累加
$newsubid = $s->select_nav("select max(subid) as subid from sub_table");
@$smarty->assign('newsubid',$newsubid[0][subid]+1);

//所有导航条和子菜单
$smarty->assign('navarray',$s->select_nav("select * from nav_table  order by navsort;"));
$smarty->assign('subarray',$s->select_nav("select * from sub_table  order by subsort;"));
$smarty->assign('articlearray',$s->select_nav("select * from article_table  order by id;"));

//引用模板文件
// $smarty->display('table.tpl');


?>