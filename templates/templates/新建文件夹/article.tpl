<div class="panel panel-primary">
	
	{foreach $articlearray as $art}
	<div class="panel-heading">
		<h3 class="panel-title">{$art.title}</h3>
	</div>

	<form method="post" action="article.php" >
		<input type="text" name="artid" value='{$art.id}' style="display:none">
		<input type="text" name="subid" value='{$subid}' style="display:none">
		<input type="text" name='function' value="delart" style="display:none">
		<button type="submit" class="btn btn-danger  	glyphicon glyphicon-minus">删除文章</button>	
	</form>


	<div class="panel-body">
		
	{include file=$art.filename}

	</div>
	{/foreach}
</div>