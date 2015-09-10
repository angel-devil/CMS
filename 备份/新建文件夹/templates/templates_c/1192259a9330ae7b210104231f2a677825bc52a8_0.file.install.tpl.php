<?php /* Smarty version 3.1.27, created on 2015-09-02 09:28:42
         compiled from "templates\templates\install.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1690055e6c14acca429_06523794%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1192259a9330ae7b210104231f2a677825bc52a8' => 
    array (
      0 => 'templates\\templates\\install.tpl',
      1 => 1441186119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1690055e6c14acca429_06523794',
  'variables' => 
  array (
    'password' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e6c14adbb120_06639214',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e6c14adbb120_06639214')) {
function content_55e6c14adbb120_06639214 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1690055e6c14acca429_06523794';
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>安装向导</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 src="./jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<div >
		<div>
			<h1>安装向导</h1>
			<br>

		</div>
		<div>
			<form method="post" action="install.php">
				<div>
					<div>
						<h2><small>填写数据库信息</small></h2> 
					</div>
					<table class="table" width=80% >
						<tr>
							<th  width=33% >	数据库服务器:</th>
							<td width=33<?php echo '%>';?><input type="text" width=33% name="dbinfo[dbhost]" value="localhost"  class="txt"></td>
							<td width=33<?php echo '%>';?><small>数据库服务器地址, 一般为 localhost</small></td>
						</tr>
						<tr>
							<th width=33% >	数据库名:</th>
							<td width=33<?php echo '%>';?><input type="text" width=33% name="dbinfo[dbname]" value="portal"  class="txt"></td>
							<td width=33<?php echo '%>';?></td>
						</tr>
						<tr>
							<th width=33% >	数据库用户名:</th>
							<td width=33<?php echo '%>';?>
								<input type="text" width=33% name="dbinfo[dbuser]" value="root"  class="txt"></td>
								<td width=33<?php echo '%>';?></td>
							</tr>
							<tr>
								<th width=33% >	数据库密码:</th>
								<td width=33<?php echo '%>';?><input type="text" width=33% name="dbinfo[dbpw]" value="root"  class="txt"></td>
								<td width=33<?php echo '%>';?></td>
							</tr>
						</table >
						<div class="desc">
							<h2><small>填写管理员信息</small></h2>
						</div>
						<table class="tb2 table" >
							<tr>
								<th  width=33% >管理员账号:</th>
								<td width=33<?php echo '%>';?><input type="text" width=33% name="admininfo[username]" value="admin"  class="txt"></td>
								<td width=33<?php echo '%>';?></td>
							</tr>
							<tr>
								<th width=33% >	管理员密码:</th>
								<td width=33<?php echo '%>';?><input type="password" width=33% name="admininfo[password]"   class="txt"></td>
								<td width=33<?php echo '%>';?><small>管理员密码不能为空</small></td>
							</tr>
							<tr >
								<th  width=33<?php echo '%>';?>重复密码:</th>
								<td width=33<?php echo '%>';?><input type="password" width=33% name="admininfo[password2]"  class="txt"></td>
								<td width=33<?php echo '%>';?><font color="red"><?php if ($_smarty_tpl->tpl_vars['password']->value == 'diffent') {?>两次密码不相同<?php }?></font></td>
							</tr>
						</table>
					</div>
					<table class="tb2 table">
						<tr>
							<th width=50<?php echo '%>';?></th>
							<td width=50<?php echo '%>';?><input type="submit" class="btn btn btn-primary" name="submitname" value="确定安装" >
							</td>

						</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html><?php }
}
?>