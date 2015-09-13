

<!doctype html>
<html>
<head>
	<meta charset="utf-8" />
	<title>KindEditor PHP</title>
	<link rel="stylesheet" href="./editor/themes/default/default.css" />
	<link rel="stylesheet" href="./editor/plugins/code/prettify.css" />
	<script charset="utf-8" src="./editor/kindeditor.js"></script>
	<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>
	<script charset="utf-8" src="./editor/plugins/code/prettify.js"></script>
	<script>
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
	</script>
</head>
<body>
	<div class="panel panel-primary">
<input type="button" class="btn btn-success" name="Submit" onclick="javascript:history.back(-1);" value="返回上一页">	
	
</div>	 
	<form name="example" method="post" action="editor.php">
		<br>
	<h4>文章标题</h4>
	<input type="text" name="title" width="200px" value="{$articletitle}"  placeholder="请输入标题"/>
	<h4>文章正文(图片不能直接粘贴，只能上传)</h4>
	
		<textarea name="content1" style="width:100%;height:400px;visibility:hidden;">{$articlecontent}
		</textarea>
		<br />
		<input type="text" name="subid" style="display:none" value={$subid} />
		<input type="text" name="function" style="display:none" value="updateart" />
		<input type="text" name="artid" style="display:none" value={$artid} />
		<input type="submit" name="button" value="提交内容" /> (提交快捷键: Ctrl + Enter)
	</form>

</body>
</html>

