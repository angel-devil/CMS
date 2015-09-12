<?PHP
//引用配置文件
require 'config.php';
//引用类文件
require 'common.php';

//检测是否安装过
$filename = 'lock.php';
if (file_exists($filename)) {
    echo "网站应用已安装,如需重新安装，请删除根目录的lock.php文件<br><br><a href='index.php'>自动跳转</a>";
    header("Refresh:3;url=index.php");
    exit;
}

if (!empty($_POST['dbinfo']['dbhost']) && !empty($_POST['dbinfo']['dbuser']) && !empty($_POST['dbinfo']['dbname']) && !empty($_POST['admininfo']['password']) && !empty($_POST['admininfo']['password2']))
{


    //设置数据库配置
    $file = new data_save($_POST['dbinfo']['dbhost'],$_POST['dbinfo']['dbuser'],$_POST['dbinfo']['dbpw'],$_POST['dbinfo']['dbname']);
    sleep(1);
    $G['HOSTNAME']=$_POST['dbinfo']['dbhost'];
    $G['USERNAME']=$_POST['dbinfo']['dbuser'];
    $G['USERPASSWD']=$_POST['dbinfo']['dbpw'];
    $G['DATENAME']=$_POST['dbinfo']['dbname'];
    $s = new sqlhelper($G);   //判断是否正确
    //$s->print_config($G);
    if ($s->dateisconn($G) == false)
    {
        $smarty->assign('err',"1");
        $con = 0;
    }
    else
    {
        $smarty->assign('err',"0");  //连接成功
        $con = 1;
    }
    //$s->print_config($G);


    if (!empty($_POST['admininfo']['password']) && $_POST['admininfo']['password'] != $_POST['admininfo']['password2'])
    {
        $smarty->assign('password',"diffent");
        $passwd=0;
    }
    else
    {
        $smarty->assign('password',"same");
        $passwd=1;
    }

    if ($con && $passwd)
    {
        // //创建数据库、数据表
        $s = new sqlhelper($G);
        $s->create_db();
        $q = new sqlhelper($G);
        $q->create_table();

        // //新增管理员账号
        $password=sha1($_POST['admininfo']['password2']);
        $s->insert_user($_POST['admininfo']['username'],$password);
        // //延时跳转到登录界面
        echo "网站应用已安装,如需重新安装，请删除根目录的lock.php文件<br><br><a href='login.php'>自动跳转</a>";
        header("Refresh:3;url=login.php");
        // // //已安装。加锁
        $lockfile="lock.php";
        $fp2 = fopen($lockfile, 'w');
        fwrite($fp2,'installed');
        fclose($fp2);
		exit;
    }

}
else   //第一次访问页面
{
    $smarty->assign('err',"0");  //连接成功
    $con = 1;
}


// 引用模板文件
$smarty->display('install.tpl');

?>