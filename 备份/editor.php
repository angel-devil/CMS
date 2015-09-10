<?php
require './config.php';
header("Content-type: text/html; charset=utf-8");

// echo $_GET['subid'];

	$htmlData = '';
	if (!empty($_POST['content1'])) {
		if (get_magic_quotes_gpc()) {
			$htmlData = stripslashes($_POST['content1']);
		} else 
		{
			$htmlData = $_POST['content1'];
		}
	}

$smarty->assign('subid',$_GET['subid']);	
if(!empty($_POST['subid']))
{
	$content1 =mysql_real_escape_string($htmlData);
	// echo $_POST['subid'];
	// echo time();
	$time=time();
	$sql="insert into article_table(id, title, subid) VALUES (".$time.",'".$_POST['title']."',".$_POST['subid'].")";
	$s = new sqlhelper();
	// echo $sql;

	$s->execute_sql($sql);
	$filename="templates/article/".$time.".tpl";
	file_put_contents($filename,$htmlData);
	// $smarty->display($filename);
	header("Location: admin.php");
	exit;
}
$smarty->display('admin.tpl');
$smarty->display('editor.tpl');


	// if(!empty($htmlData))
// file_put_contents('a.php',$htmlData);
// echo $htmlData;


// $smarty->assign('subid',$_POST['subid']);	
?>