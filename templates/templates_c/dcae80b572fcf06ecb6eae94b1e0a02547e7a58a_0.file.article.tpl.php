<?php /* Smarty version 3.1.27, created on 2015-09-11 01:17:51
         compiled from "templates\templates\article.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1062055f22bbf9b9413_65160538%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcae80b572fcf06ecb6eae94b1e0a02547e7a58a' => 
    array (
      0 => 'templates\\templates\\article.tpl',
      1 => 1441876580,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1062055f22bbf9b9413_65160538',
  'variables' => 
  array (
    'articlearray' => 0,
    'art' => 0,
    'subid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f22bbfb6ba46_83024214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f22bbfb6ba46_83024214')) {
function content_55f22bbfb6ba46_83024214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1062055f22bbf9b9413_65160538';
?>
<div class="panel panel-primary">
	
	<?php
$_from = $_smarty_tpl->tpl_vars['articlearray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['art'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['art']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['art']->value) {
$_smarty_tpl->tpl_vars['art']->_loop = true;
$foreach_art_Sav = $_smarty_tpl->tpl_vars['art'];
?>
	<div class="panel-heading">
		<h3 class="panel-title"><?php echo $_smarty_tpl->tpl_vars['art']->value['title'];?>
</h3>
	</div>

	<form method="post" action="article.php" >
		<input type="text" name="artid" value='<?php echo $_smarty_tpl->tpl_vars['art']->value['id'];?>
' style="display:none">
		<input type="text" name="subid" value='<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
' style="display:none">
		<input type="text" name='function' value="delart" style="display:none">
		<button type="submit" class="btn btn-danger  	glyphicon glyphicon-minus">删除文章</button>	
	</form>


	<div class="panel-body">
		
	<?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['art']->value['filename'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


	</div>
	<?php
$_smarty_tpl->tpl_vars['art'] = $foreach_art_Sav;
}
?>
</div><?php }
}
?>