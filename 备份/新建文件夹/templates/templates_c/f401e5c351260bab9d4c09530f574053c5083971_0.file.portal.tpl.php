<?php /* Smarty version 3.1.27, created on 2015-08-28 06:21:50
         compiled from "templates\templates\portal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:278755dffdfe2af5d0_58220058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f401e5c351260bab9d4c09530f574053c5083971' => 
    array (
      0 => 'templates\\templates\\portal.tpl',
      1 => 1440742908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278755dffdfe2af5d0_58220058',
  'variables' => 
  array (
    'navarray' => 0,
    'nav' => 0,
    'subarray' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55dffdfe37c762_56358026',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55dffdfe37c762_56358026')) {
function content_55dffdfe37c762_56358026 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '278755dffdfe2af5d0_58220058';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"#"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/main.css" />
<title>门户网站</title>
</head>
<body id="homepage">
<div id="wrap">
  <div id="main_nav">
    <ul>

    <?php
$_from = $_smarty_tpl->tpl_vars['navarray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['nav'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['nav']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->_loop = true;
$foreach_nav_Sav = $_smarty_tpl->tpl_vars['nav'];
?>       
      <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['nav']->value['navname'];?>
</a>
      <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['subarray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sub'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sub']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->_loop = true;
$foreach_sub_Sav = $_smarty_tpl->tpl_vars['sub'];
?>
          <?php if ($_smarty_tpl->tpl_vars['sub']->value['navid'] == $_smarty_tpl->tpl_vars['nav']->value['navid']) {?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['sub']->value['subname'];?>
</a></li>
          <?php }?>
        <?php
$_smarty_tpl->tpl_vars['sub'] = $foreach_sub_Sav;
}
?>
      </ul>
      </li>
    <?php
$_smarty_tpl->tpl_vars['nav'] = $foreach_nav_Sav;
}
?>


    </ul>   
  </div>
  <div class="clear"></div>
</div><!--end of header-->  
<?php echo '<script'; ?>
 type="text/javascript" src="javascript/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="javascript/main.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
      $('#main_nav').allenMenu();
    });
  <?php echo '</script'; ?>
>
<!--end of wrap-->
<div style="text-align:center;">

</div>
</body>
</html>
<?php }
}
?>