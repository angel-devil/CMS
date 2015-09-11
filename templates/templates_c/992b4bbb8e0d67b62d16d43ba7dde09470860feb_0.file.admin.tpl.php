<?php /* Smarty version 3.1.27, created on 2015-09-10 16:47:19
         compiled from "templates\templates\admin.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:443455f1b4177eb463_24985157%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992b4bbb8e0d67b62d16d43ba7dde09470860feb' => 
    array (
      0 => 'templates\\templates\\admin.tpl',
      1 => 1441903394,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '443455f1b4177eb463_24985157',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f1b41782d710_09070713',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f1b41782d710_09070713')) {
function content_55f1b41782d710_09070713 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '443455f1b4177eb463_24985157';
?>
<meta charset="utf8">
<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="./jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<table>
	<tr>
		<td width="95%" align="center"><a href="index.php"><input type="button" class="btn  btn-primary btn-lg btn-block" value="首页"></a></td>
		
		<form class="form-horizontal" method="post" action="admin.php"  >			
			<input type='text' name="action" value='logout'  style="display:none;"/></th>
			<td width="10%" ><input type="submit" class="btn  btn-lg   btn-danger" value="注销"></td>
		</form>
	</tr>
</table>
<?php }
}
?>