<?PHP
header("Content-type: text/html; charset=utf-8"); 

//引用类文件
require './config.php';


$filename = 'lock.php';
if (file_exists($filename)) {
echo "网站应用已安装,如需重新安装，请删除根目录的lock.php文件<br><br><a href='index.php'>自动跳转</a>";
header("Refresh:5;url=index.php");
exit;
}


if(!empty($_POST['admininfo']['username']) && !empty($_POST['admininfo']['password']))
{

//密码赋值
// $_POST['admininfo']['username']
// $_POST['admininfo']['password']
// $_POST['admininfo']['password2']


//判断密码是否相同
if($_POST['admininfo']['password'] != $_POST['admininfo']['password2'])
{
	$smarty->assign('password',"diffent"); 
	// echo "different";
}
else
{

//配置信息赋值
$dbinfo = $arrayName = array(
	'dbhost' => $_POST['dbinfo']['dbhost'],
	'dbname' => $_POST['dbinfo']['dbname'],
	'dbuser' => $_POST['dbinfo']['dbuser'],
	'dbpw' => $_POST['dbinfo']['dbpw']
	);


//新建数据库配置文件
$file = new data_save($dbinfo['dbhost'],$dbinfo['dbuser'],$dbinfo['dbpw'],$dbinfo['dbname']);

//创建数据库、数据表
$s = new sqlhelper();
$s->create_db();
$s->create_table();

$password=sha1($_POST['admininfo']['password2']);
$s->insert_user($_POST['admininfo']['username'],$password);
//已安装。加锁
$lockfile="lock.php";
$fp2 = fopen($lockfile, 'w');   
fwrite($fp2,'installed');    
fclose($fp2); 

$smarty->assign('delaytime',5);
$smarty->display('delay.tpl');
exit;
// echo "网站应用已安装,如需重新安装，请删除根目录的lock.php文件<br><br><a href='login.php'>自动跳转</a>";
// header("Refresh:5;url=login.php");



// echo  "跳转";
// Header("Location: login.php"); 


}
	
}

//引用模板文件
$smarty->display('install.tpl');   





?>