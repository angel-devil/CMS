<?php /* Smarty version 3.1.27, created on 2015-09-03 14:42:36
         compiled from "templates\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2734055e85c5c84d955_08137572%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9759c2f8672cbda8dc7e467165e28e9a509d3fd' => 
    array (
      0 => 'templates\\templates\\login.tpl',
      1 => 1441291218,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2734055e85c5c84d955_08137572',
  'variables' => 
  array (
    'delaytime' => 0,
    'password' => 0,
    'logincount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55e85c5c8b51f2_94186209',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55e85c5c8b51f2_94186209')) {
function content_55e85c5c8b51f2_94186209 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2734055e85c5c84d955_08137572';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>后台登录界面</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<?php echo '<script'; ?>
 src="./jquery-2.1.4.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		
		<div class=".controls" style="margin-top:100px;margin-left:45%">
			
			<h2>系统登录</h2>						
					<?php echo $_smarty_tpl->tpl_vars['delaytime']->value;?>

			<form class="form-horizontal" action="login.php" method="post" >
				<div class="control-group">
					<label class="control-label"  >用户名:</label>
					<div class="controls"><!-- placeholder="请输入用户名"  placeholder="请输入密码" -->
						<input type="text" id="username" name="username"  >
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" >密码</label>
					<div class="controls">
						<input type="password" id="password" name="password"  >
						 <label class="control-label" ><font color="red"><?php if ($_smarty_tpl->tpl_vars['password']->value == 'error') {?>你还有<?php echo $_smarty_tpl->tpl_vars['logincount']->value;?>
次机会<?php }?></font>
					</label>
					</div>

				</div>
				<div class="control-group">
					<div class="controls">
					<br>
						<button type="submit" class="btn btn-primary">进入系统</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html><?php }
}
?>