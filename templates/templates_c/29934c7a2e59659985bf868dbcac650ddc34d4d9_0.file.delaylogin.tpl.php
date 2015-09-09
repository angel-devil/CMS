<?php /* Smarty version 3.1.27, created on 2015-09-03 23:34:05
         compiled from "templates\templates\delaylogin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2618755e8686d457f36_33560129%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29934c7a2e59659985bf868dbcac650ddc34d4d9' => 
    array (
      0 => 'templates\\templates\\delaylogin.tpl',
      1 => 1441294413,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2618755e8686d457f36_33560129',
  'variables' => 
  array (
    'delaytime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e8686d4a2b55_11942425',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e8686d4a2b55_11942425')) {
function content_55e8686d4a2b55_11942425 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2618755e8686d457f36_33560129';
?>
    <html> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>js定时跳转页面的方法</title> 
    </head> 
    <body> 
    <?php echo '<script'; ?>
 type="text/javascript"> 
    var t=<?php echo $_smarty_tpl->tpl_vars['delaytime']->value;?>
;//设定跳转的时间 
    setInterval("refer()",1000); //启动1秒定时 
    function refer(){  
        if(t==0){ 
            location="login.php"; //#设定跳转的链接地址 
        } 
        document.getElementById('show').innerHTML=""+t+"秒后跳转登录界面"; // 显示倒计时 
        t--; // 计数器递减 
        //本文转自： 
    } 
    <?php echo '</script'; ?>
> 
    <span id="show"></span> 
    </body> 
    </html> <?php }
}
?>