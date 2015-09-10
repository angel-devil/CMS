<?php /* Smarty version 3.1.27, created on 2015-09-08 03:11:36
         compiled from "templates\templates\editor.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:241755ee51e8898ab8_13363838%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79a45e38434ed336c4ff518aadcc795dcb49a6dd' => 
    array (
      0 => 'templates\\templates\\editor.tpl',
      1 => 1441681840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '241755ee51e8898ab8_13363838',
  'variables' => 
  array (
    'subid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ee51e88ec876_91059770',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ee51e88ec876_91059770')) {
function content_55ee51e88ec876_91059770 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '241755ee51e8898ab8_13363838';
?>

<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
	<link rel="stylesheet" href="./editor/themes/default/default.css" />
	<link rel="stylesheet" href="./editor/plugins/code/prettify.css" />
	<?php echo '<script'; ?>
 charset="utf-8" src="./editor/kindeditor.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 charset="utf-8" src="./editor/lang/zh_CN.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 charset="utf-8" src="./editor/plugins/code/prettify.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		KindEditor.ready(function(K) {
			var editor1 = K.create('textarea[name="content1"]', {
				cssPath : './editor/plugins/code/prettify.css',
				uploadJson : './editor/php/upload_json.php',
				fileManagerJson : './editor/php/file_manager_json.php',
				allowFileManager : true,
				afterCreate : function() {
					var self = this;
					K.ctrl(document, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
					K.ctrl(self.edit.doc, 13, function() {
						self.sync();
						K('form[name=example]')[0].submit();
					});
				}
			});
			prettyPrint();
		});
	<?php echo '</script'; ?>
>
</head>
<body>
	 
	<form name="example" method="post" action="editor.php">
		<br>
	<h4>文章标题</h4>
	<input type="text" name="title" width="200px" placeholder="请输入标题"/>
	<h4>文章正文(图片不能直接粘贴，只能上传)</h4>
	
		<textarea name="content1" style="width:100%;height:400px;visibility:hidden;"> </textarea>
		<br />
		<input type="text" name="subid" style="display:none" value=<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
 />
		<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
	</form>
</body>
</html>

<?php }
}
?>