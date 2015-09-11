<?php /* Smarty version 3.1.27, created on 2015-09-11 02:39:34
         compiled from "templates\templates\nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2620555f23ee6407556_90989271%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6db979eefc6f7d94d562a39ab22a4d0ef33c9626' => 
    array (
      0 => 'templates\\templates\\nav.tpl',
      1 => 1441939171,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2620555f23ee6407556_90989271',
  'variables' => 
  array (
    'logined' => 0,
    'navarray' => 0,
    'nav' => 0,
    'subarray' => 0,
    'sub' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f23ee649f987_31864328',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f23ee649f987_31864328')) {
function content_55f23ee649f987_31864328 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2620555f23ee6407556_90989271';
?>
<!DOCTYPE html>
<html>
   <meta charset="utf8">
   <head>
      <title>首页</title>
      <link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
      <?php echo '<script'; ?>
 src="./jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
   </head>
   <body>
      <ul class="nav nav-pills">
      <?php if ($_smarty_tpl->tpl_vars['logined']->value == 'true') {?><li class="active"><a href="admin.php">管理中心</a></li><?php }?>
         <li class="active"><a href="index.php">首页</a></li>
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
         <li class="dropdown" >
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_smarty_tpl->tpl_vars['nav']->value['navname'];?>

               <span class="caret"></span>
            </a>
            <ul  class="dropdown-menu" >
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
               <li ><a href="article.php?subid=<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
"><?php echo $_smarty_tpl->tpl_vars['sub']->value['subname'];?>
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

   </body>
</html><?php }
}
?>