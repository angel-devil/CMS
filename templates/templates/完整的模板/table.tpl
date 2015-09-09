<html>
	<head>
		<meta charset="utf8">
		<title>
		</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<script src="./jquery-2.1.4.min.js"></script>
		<script src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>		
		<script type="text/javascript" language="javascript">

	</script>
</head>
<body>
	<div id="rightcontent table-responsive" style="position:relative; z-index:0;">
		<table id="table1" class="table table-bordered table-hover " cellspacing="3" cellpadding="3" border="1">
			<tbody>
			<tr>
			<!-- <th width='80px' style="display:none;" >导航ID</th> -->
			<th  width='80px'>导航名</th>
			<th width='80px'>导航排序</th>
			<th width='80px'></th>
			</tr>
							<tr>
							<form class="form-horizontal" method="post" action="table.php"  >
							<th width='80px' style="display:none;"><input type='text' name="navid"  readOnly="true" value='{$newnavid}'/></th>
							<th width='80px'><input type='text' name="navname"  placeholder="请输入导航条名"></th>
							<th width='80px'><input type='text' name="navsort" placeholder="请输入排序号"></th>
							<input type='text' name="function" value='addnav'  style="display:none;"/></th>
							<th width='80px'><button type="submit" class="btn btn-primary glyphicon glyphicon-plus">新建导航条</button></th>
							</form>
							</tr>

				{foreach $navarray as $nav}

					<tr class="success">
						<th width="80px" style="display:none;"><input type='text'value='{$nav.navid}'></th>
						<th width="80px"><input type='text'value='{$nav.navname}'></th>
						<th width="80px"><input type='text'value='{$nav.navsort}'></th>

							<form class="form-horizontal" method="post" action="table.php"  >
							<input type='text' name="navid"  readOnly="true" value='{$nav.navid}' style="display:none;"/>
							<input type='text' name="function" value='delnav'  style="display:none;"/>
							<th width='150px'><button type="submit" class="btn btn-danger  	glyphicon glyphicon-minus">删除导航条</button></th>							
							</form>
					</tr>
					{foreach $subarray as $sub}
						{if $sub.navid  eq  $nav.navid}		

							<tr class="warning" >
								<th width="80px" style="display:none;"><input type='text' readOnly="true"value='{$sub.navid}'></th>
								<th width="80px"><input type='text' value='|————{$sub.subname}'></th>
								<th width="80px"><input type='text' value='{$sub.subsort}'></th>
									<form class="form-horizontal" method="post" action="table.php"  >
									<input type='text' name="subid"  readOnly="true" value='{$sub.subid}' style="display:none;"/>
									<input type='text' name="function" value='delsub'  style="display:none;"/>
									<th width='150px'><button type="submit" class="btn btn-danger  	glyphicon glyphicon-minus">删除子菜单</button></th>		</form>
							</tr>

						{/if}
					{/foreach}

								<tr class="warning">
								<th width="80px" style="display:none;"></th>
								<form class="form-horizontal" method="post" action="table.php"  >
								<th width='80px' style="display:none;"><input type='text' name="subid"  readOnly="true" value='{$newsubid}'/></th>
								<th width='80px'><input type='text' name="subname" placeholder="请输入子菜单名"></th>
								<th width='80px'><input type='text' name="subsort" placeholder="请输入排序号"></th>
								<input type='text' name="navid" value='{$nav.navid}'  style="display:none;"/></th>
								<input type='text' name="function" value='addsub'  style="display:none;"/></th>
								<th width='80px'><button type="submit" class="btn btn-primary glyphicon glyphicon-plus">新建子菜单</button></th>
								</form>
								</tr>

				{/foreach}



			</tbody>
		</table>
	</div>

</body>
</html>