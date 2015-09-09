<?php /* Smarty version 3.1.27, created on 2015-08-24 10:31:47
         compiled from "templates\templates\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:612255daf2937afc03_48684940%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d0a18d7de25e5db4d5f0c33964099b7d9ac67c2' => 
    array (
      0 => 'templates\\templates\\index.tpl',
      1 => 1440407935,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '612255daf2937afc03_48684940',
  'variables' => 
  array (
    'hello' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55daf293c11c93_05299581',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55daf293c11c93_05299581')) {
function content_55daf293c11c93_05299581 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '612255daf2937afc03_48684940';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>Smarty</title> 
</head> 
<body> 
<?php echo $_smarty_tpl->tpl_vars['hello']->value;?>
 
</body> 
</html><?php }
}
?>