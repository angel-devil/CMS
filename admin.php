<?PHP
//引用类文件
require './table.php'; 

//设置各个目录的路径，这里是安装的重点
$smarty->template_dir = "templates/templates";
$smarty->compile_dir = "templates/templates_c";
$smarty->config_dir = "templates/config";
$smarty->cache_dir = "templates/cache";
//smarty模板有高速缓存的功能，如果这里是true的话即打开caching，但是会造成网页不立即更新的问题，当然也可以通过其他的办法解决
$smarty->caching = false;  



@session_start();  //开启session

//注销
if(@$_POST['action']=='logout')
{
	session_destroy();
	header("Location: login.php");
}

//未登录
if(empty($_SESSION['username']))
{
	header("Location: login.php");
}

//删除文件
if (@$_POST['function']=="delart")
{
    $sql = "delete from article_table WHERE id=".$_POST['artid'];
    $s->execute_sql($sql);

    //删除本地缓存
    $filename="templates/article/".$_POST['artid'].".tpl";
    @unlink($filename);
    header("Location: admin.php");
    exit;
}

$smarty->display('admin.tpl');
$smarty->display('table.tpl');
 ?>   