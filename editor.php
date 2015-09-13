<?php
require './config.php';
require './common.php';

//获取编辑器内容
$htmlData = '';
if (!empty($_POST['content1'])) {
	if (get_magic_quotes_gpc()) {
		$htmlData = stripslashes($_POST['content1']);
	} else 
	{
		$htmlData = $_POST['content1'];
	}
}

//获取哪个子菜单跳转过来的id
$smarty->assign('subid',$_GET['subid']);	


if(!empty($_POST['subid']))
{
	$content1 =mysql_real_escape_string($htmlData);
	//插入
	$time=time();
	if($_POST['function']=="updateart")
	{
		$sql="update article_table set title ='".$_POST['title']."' where id =".$_POST['artid'];
		$filename="templates/article/".$_POST['artid'].".tpl";
		file_put_contents("aaaaaaaaaaaaa.txt",$sql);
	}
	else
	{
		$sql="insert into article_table(id, title, subid) VALUES (".$time.",'".$_POST['title']."',".$_POST['subid'].")";
		$filename="templates/article/".$time.".tpl";
	}
	$s = new sqlhelper($G);
	$s->execute_sql($sql);
	
	file_put_contents($filename,$htmlData);

	header("Location: admin.php");
	exit;
}
$smarty->display('admin.tpl');
$smarty->display('editor.tpl');

@$smarty->assign('subid',$_POST['subid']);	
?>