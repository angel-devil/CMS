<?PHP
//引用类文件
require './common.php';
require './config.php';

//检测是否安装过
$filename = 'lock.php';
if (!file_exists($filename)) {
    echo "网站应用还未安装<br><br><a href='install.php'>自动跳转</a>";
    header("Refresh:3;url=install.php");
    exit;
}


@$username = $_POST['username'];
@$password = $_POST['password'];

@session_start();
if (!empty($_SESSION['delaytime']))          //输入多次错误 还不能登录
{
    date_default_timezone_set("Asia/Shanghai");
    $nowdate = date("y-m-d h:i:sa");   //获取当前时间
    $delay = strtotime($nowdate) - strtotime($_SESSION['delaytime']);    //输入3次错误的时间到现在过了多久
    if ($delay <= 30)					//30秒内继续计数
    {
        @session_start();
        $time = 30 - $delay;			//重新刷新还是会继续计时
        $smarty->assign('delaytime',$time);
        $smarty->display('delay.tpl');
        exit;
    }
    else
    {
        unset($_SESSION["delaytime"]);			//清空密码输入错误时间
    }


}

@session_start();  //开启session
//自动登录
if (!empty($_SESSION['username']))
{
    header("Location: admin.php");
}


//提交表单过来
if (!empty($username) && !empty($password))
{
    $password=sha1($password);
    //查询账号信息
    $sql="select username from user_table where username = '$username' and password = '$password'";
    $s = new sqlhelper($G);
    $array = $s->select_nav($sql);

    //用户名密码是否正确
    if (!empty($array))
    {

        //保留登录信息
        @session_start();
        $_SESSION['username'] = $_POST['username'];
        $_SESSION['password'] = $_POST['password'];
        $_SESSION['identity'] = "admin";

        //密码输入正确，不提示错误
        $smarty->assign('password',"true");

        //跳转页面
        @session_start();
        $_SESSION['logincount'] = 0 ;   //清空登录错误次数
        header("Location: admin.php");
    }
    else   //密码错误
    {
        //引用模板文件
        $smarty->assign('password',"error");    //密码错误
        @session_start();
        @$_SESSION['logincount']++ ;			//输入错误次数累加
        $trycount = 3 - $_SESSION['logincount'];
        $smarty->assign('logincount',$trycount); 	//还有几次机会

        if ($_SESSION['logincount']==2)
        {
            @session_start();
            date_default_timezone_set("Asia/Shanghai");
            $_SESSION['delaytime'] = date("y-m-d h:i:sa");	//获取当前时间

            $_SESSION['logincount'] = 0;
        }

        $smarty->display('login.tpl');


    }
}
else  	//默认界面
{
    $smarty->assign('password',"true");   //默认密码没有错误
    $smarty->display('login.tpl');
}




?>