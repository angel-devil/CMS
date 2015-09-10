<?php /* Smarty version 3.1.27, created on 2015-09-10 17:38:22
         compiled from "templates\templates\delay.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:371955f14f8ec38701_48980786%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dffe1b8013ea1dd2caea2e4d97af70be151ddf74' => 
    array (
      0 => 'templates\\templates\\delay.tpl',
      1 => 1441876580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '371955f14f8ec38701_48980786',
  'variables' => 
  array (
    'delaytime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f14f8ec93344_19471834',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f14f8ec93344_19471834')) {
function content_55f14f8ec93344_19471834 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '371955f14f8ec38701_48980786';
?>
    <html> 
    <head> 
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
    <title>等待跳转</title> 
    </head> 
    <body> 
    <?php echo '<script'; ?>
 type="text/javascript"> 
    var t=<?php echo $_smarty_tpl->tpl_vars['delaytime']->value;?>
;//设定跳转的时间 
    setInterval("refer()",1000); //启动1秒定时 
    function refer(){  
        if(t==0 || t==-<?php echo $_smarty_tpl->tpl_vars['delaytime']->value;?>
){ 
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