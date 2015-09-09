<?php /* Smarty version 3.1.27, created on 2015-09-04 01:49:59
         compiled from "templates\templates\delay.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1191555e8f8c76f8733_20422686%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dffe1b8013ea1dd2caea2e4d97af70be151ddf74' => 
    array (
      0 => 'templates\\templates\\delay.tpl',
      1 => 1441331306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1191555e8f8c76f8733_20422686',
  'variables' => 
  array (
    'delaytime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e8f8c773beb5_21379550',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e8f8c773beb5_21379550')) {
function content_55e8f8c773beb5_21379550 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1191555e8f8c76f8733_20422686';
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
        document.getElementById('show').innerHTML=""+t+"秒后跳转"; // 显示倒计时 
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