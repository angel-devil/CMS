<?PHP
//引用类文件
require 'nav.php';

//赋值
$s = new sqlhelper($G);


//管理员登录状态
session_start(); 
if($_SESSION['identity'] == 'admin')
	$smarty->assign('identity','admin');
else
	$smarty->assign('identity','');



//获取当前子菜单id
if(empty($_GET['subid']))
{
	$subid=$_POST['subid'];
}
else
{
	$subid=$_GET['subid'];
}


//删除文件
if($_POST['function']=="delart")
{
	$sql = "delete from article_table WHERE id=".$_POST['artid'];
	$s->execute_sql($sql);

	//删除本地缓存
	$filename="templates/article/".$_POST['artid'].".tpl";
	@unlink($filename);

}

$smarty->display('nav.tpl');

@$smarty->assign('navarray',$s->select_nav("select * from article_table;"));
@$article = $s->select_nav("select title,id from article_table where subid=".$subid." order by id ;");


$i=0;
foreach($article as $b){//依次取出数组中元素，$a是元素的键名$b是键值
$article[$i]['filename']="../article/".$article[$i]['id'].".tpl";
$i++;


}

 



$smarty->assign('articlearray',$article);
$smarty->assign('subid',$subid);
$smarty->display('article.tpl');



 ?>