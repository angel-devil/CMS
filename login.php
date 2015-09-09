<?PHP
//引用类文件
require './config.php'; 

$username = $_POST['username'];
$password = $_POST['password'];
$remeberme = $_POST['remeberme'];   //on

session_start();
if (!empty($_SESSION['delaytime']))
{
	date_default_timezone_set("Asia/Shanghai");
	$nowdate = date("y-m-d h:i:sa");   //当前时间
	$delay = strtotime($nowdate) - strtotime($_SESSION['delaytime']);
	if($delay <= 30)
	{
		session_start();
		$time = 30 - $delay;
		$smarty->assign('delaytime',$time);
		$smarty->display('delay.tpl'); 
		exit;
	}
	else
	{
		unset($_SESSION["delaytime"]);
	}	
	
	
}

session_start();  //开启session
// echo $_SESSION['logincount'];
//自动登录
if (!empty($_SESSION['username']))
{
	header("Location: admin.php");
}


//提交表单过来
if(!empty($username) && !empty($password))
{
	$password=sha1($password);
	//查询账号信息
	$sql="select username from user_table where username = '$username' and password = '$password'";
	$s = new sqlhelper();
	$array = $s->select_nav($sql);

	//用户名密码是否正确
	if(!empty($array))
	{

	// echo $_SESSION['username'].$_SESSION['password'];
		session_start();
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['password'] = $_POST['password']; 
			$_SESSION['identity'] = "admin";
	// if($remeberme == 'on')
	// 	{
			
	// 	}	

		$smarty->assign('password',"true");
		//跳转页面
		echo "opening system.........";
		session_start();
		$_SESSION['logincount'] = 0 ;
		header("Location: admin.php");	 
	}
	else   //密码错误
	{
		//引用模板文件
		$smarty->assign('password',"error"); 
		session_start();
		$_SESSION['logincount']++ ;
		$trycount = 3 - $_SESSION['logincount'];
		$smarty->assign('logincount',$trycount); 

		if($_SESSION['logincount']==2)
		{
			session_start();
			date_default_timezone_set("Asia/Shanghai");
			$_SESSION['delaytime'] = date("y-m-d h:i:sa");
			// echo $_SESSION['delaytime'];
			$_SESSION['logincount'] = 0;
		}

        $smarty->display('login.tpl');


	}
}
else  	//默认界面
{
	$smarty->assign('password',"true");
	$smarty->display('login.tpl'); 
}




 ?>   