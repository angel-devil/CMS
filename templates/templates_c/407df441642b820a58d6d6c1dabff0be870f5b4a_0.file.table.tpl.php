<?php /* Smarty version 3.1.27, created on 2015-09-11 01:49:09
         compiled from "templates\templates\table.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1426555f2331524e013_16199978%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '407df441642b820a58d6d6c1dabff0be870f5b4a' => 
    array (
      0 => 'templates\\templates\\table.tpl',
      1 => 1441935338,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1426555f2331524e013_16199978',
  'variables' => 
  array (
    'newnavid' => 0,
    'navarray' => 0,
    'nav' => 0,
    'subarray' => 0,
    'sub' => 0,
    'newsubid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f2331532feb6_96867058',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f2331532feb6_96867058')) {
function content_55f2331532feb6_96867058 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1426555f2331524e013_16199978';
?>

	<div id="rightcontent table-responsive" >
		<table id="table1" class="table table-bordered table-hover " cellspacing="3" cellpadding="3" border="1">
			<tbody>
			<tr>

			<th  width='80px'>导航名</th>
			<th width='80px'>导航排序</th>
			<th width='80px'></th>
			</tr>
							<tr>
							<form class="form-horizontal" method="post" action="admin.php"  >
							<th width='80px' style="display:none;"><input type='text' name="navid"  readOnly="true" value='<?php echo $_smarty_tpl->tpl_vars['newnavid']->value;?>
'/></th>
							<th width='80px'><input type='text' name="navname"  placeholder="请输入导航条名"></th>
							<th width='80px'><input type='text' name="navsort" placeholder="请输入排序号"></th>
							<input type='text' name="function" value='addnav'  style="display:none;"/></th>
							<th width='80px'><button type="submit" class="btn btn-primary glyphicon glyphicon-plus">新建导航条</button></th>
							</form>
							</tr>

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

					<tr class="success">
						<th width="80px" style="display:none;"><input type='text'value='<?php echo $_smarty_tpl->tpl_vars['nav']->value['navid'];?>
'></th>
						<th width="80px"><input type='text'value='<?php echo $_smarty_tpl->tpl_vars['nav']->value['navname'];?>
'></th>
						<th width="80px"><input type='text'value='<?php echo $_smarty_tpl->tpl_vars['nav']->value['navsort'];?>
'></th>

							<form class="form-horizontal" method="post" action="admin.php"  >
							<input type='text' name="navid"  readOnly="true" value='<?php echo $_smarty_tpl->tpl_vars['nav']->value['navid'];?>
' style="display:none;"/>
							<input type='text' name="function" value='delnav'  style="display:none;"/>
							<th width='150px'><button type="submit" class="btn btn-danger  	glyphicon glyphicon-minus">删除导航条</button></th>							
							</form>
					</tr>
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

							<tr class="warning" >
								<th width="80px" style="display:none;"><input type='text' readOnly="true"value='<?php echo $_smarty_tpl->tpl_vars['sub']->value['navid'];?>
'></th>
								<th width="80px"><input type='text' value='|————<?php echo $_smarty_tpl->tpl_vars['sub']->value['subname'];?>
'></th>
								<th width="80px"><input type='text' value='<?php echo $_smarty_tpl->tpl_vars['sub']->value['subsort'];?>
'></th>
									<form class="form-horizontal" method="post" action="admin.php"  >
									<input type='text' name="subid"  readOnly="true" value='<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
' style="display:none;"/>
									<input type='text' name="function" value='delsub'  style="display:none;"/>
									<th width='150px'><button type="submit" class="btn btn-danger  	glyphicon glyphicon-minus">删除子菜单</button>
									</form>
									<a href="editor.php?subid=<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
"><button class="btn btn-success ">编辑资讯</button></a>
									</th>		

							</tr>

						<?php }?>
					<?php
$_smarty_tpl->tpl_vars['sub'] = $foreach_sub_Sav;
}
?>

								<tr class="warning">
								<th width="80px" style="display:none;"></th>
								<form class="form-horizontal" method="post" action="admin.php"  >
								<th width='80px' style="display:none;"><input type='text' name="subid"  readOnly="true" value='<?php echo $_smarty_tpl->tpl_vars['newsubid']->value;?>
'/></th>
								<th width='80px'><input type='text' name="subname" placeholder="请输入子菜单名"></th>
								<th width='80px'><input type='text' name="subsort" placeholder="请输入排序号"></th>
								<input type='text' name="navid" value='<?php echo $_smarty_tpl->tpl_vars['nav']->value['navid'];?>
'  style="display:none;"/></th>
								<input type='text' name="function" value='addsub'  style="display:none;"/></th>
								<th width='80px'><button type="submit" class="btn btn-primary glyphicon glyphicon-plus">新建子菜单</button></th>
								</form>
								</tr>

				<?php
$_smarty_tpl->tpl_vars['nav'] = $foreach_nav_Sav;
}
?>



			</tbody>
		</table>
	</div>

<?php }
}
?>