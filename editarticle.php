<?PHP
//引用类文件
require './common.php';
require './config.php';
//赋值
$s = new sqlhelper($G);


//获取当前文章id
if (empty($_GET['artid']))
{
    $artid=$_POST['artid'];
}
else
{
    $artid=$_GET['artid'];
}

//获取当前子菜单id
if (empty($_GET['subid']))
{
    $subid=$_POST['subid'];
}
else
{
    $subid=$_GET['subid'];
}

@$article = $s->select_nav("select * from article_table where id=".$artid." ;");

$article[0]['filename']="./templates/article/".$article[0]['id'].".tpl";



$smarty->assign('articletitle',$article[0]['title']);
$smarty->assign('subid',$subid);
$smarty->assign('artid',$artid);

$smarty->display('admin.tpl');
echo "<br>";

$articlecontent=file_get_contents($article[0]['filename']);
$smarty->assign('articlecontent',$articlecontent);

$smarty->display('editarticle.tpl');

?>