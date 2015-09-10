<?PHP
//引用类文件
// require 'config.php';
require 'nav.php';
header("Content-type: text/html; charset=utf-8"); 

// $smarty->display('nav.tpl');

//赋值
$s = new sqlhelper();
session_start(); 
// echo $_SESSION['identity'];
if($_SESSION['identity'] == 'admin')
	$smarty->assign('identity','admin');
else
	$smarty->assign('identity','');
// echo $_GET['subid'];
// print_r($s->select_nav("select navname from nav_table;"));
echo "<br><br>";

if(empty($_GET['subid']))
{
	$subid=$_POST['subid'];
}
else
{
	$subid=$_GET['subid'];
}

if($_POST['function']=="delart")
{
	$sql = "delete from article_table WHERE id=".$_POST['artid'];
	// echo $sql;
	$s->execute_sql($sql);

}

// echo $subid;
$smarty->assign('navarray',$s->select_nav("select * from article_table;"));

$article = $s->select_nav("select title,id from article_table where subid=".$subid." order by id ;");
// print_r($article);

$i=0;
foreach($article as $b){//依次取出数组中元素，$a是元素的键名$b是键值
$article[$i]['filename']="../article/".$article[$i]['id'].".tpl";
// echo $filename;
// echo $b['title']."<br>";
// echo $b[i]['filename'];
// echo $article[$i]['title'];

$i++;
// echo $i;

}




// print_r($article);
// echo $article[0][title];
$smarty->assign('articlearray',$article);
$smarty->assign('subid',$subid);
$smarty->display('article.tpl');


// var_dump($article);
// foreach($article as $b){//依次取出数组中元素，$a是元素的键名$b是键值
// $filename="templates/article/".$b['id'].".tpl";
// // echo $filename;
// echo $b['title']."<br>";
// $smarty->display($filename);
// echo "<br><br>";
// }
//引用模板文件
// $smarty->display('nav.tpl');
// $smarty->display('table.tpl');

 ?>