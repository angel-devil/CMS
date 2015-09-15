<form class="form-horizontal" method="post" action="admin.php"  >
	<th width='80px' style="display:none;"><input type='text' name="navid"  readOnly="true" value='{$newnavid}'  style="display:none;"/></th>
	<th width='80px'><input type='text' name="navname"  placeholder="请输入导航条名"></th>
	<th width='40px'><input type='text' name="navsort" placeholder="请输入排序号"></th>
	<input type='text' name="function" value='addnav'  style="display:none;"/></th>
	<th width='80px'><button type="submit" class="btn btn-primary glyphicon glyphicon-plus">	新建导航条</button></th>
</form>
{foreach $navarray as $nav}
<!-- ---------------导航条--------------------- -->
<div class="panel panel-info">  <!-- 导航栏标题 -->
<div class="panel-heading">
	<h4 class="panel-title">

	<!-- ----------------导航标题--------------- -->
	<a  style="float:right" data-toggle="collapse" data-parent="#accordion"
		href="#nav{$nav.navid}">
		<button type="text" class="btn btn-primary glyphicon glyphicon-plus" >折叠</button>
	</a>
	<!-- ----------------导航标题--------------- -->

		<!-- ----------------删除导航--------------- -->
		<form style="float:left" class="form-horizontal" method="post" action="admin.php"  >
		<input type='text' name="navid"  readOnly="true" value='{$nav.navid}' style="display:none;"/>
		<input type='text' name="function" value='delnav'  style="display:none;"/>
		<button type="submit" class="btn btn-danger  glyphicon glyphicon-trash" ></button>
		</form>
		<!-- ----------------删除导航--------------- -->

		<!-- ---------------------------修改导航--------------------------- -->
		<form class="form-horizontal" method="post" action="admin.php" >
        <input type='text' name="navid" readOnly="true" value='{$nav.navid}' style="display:none;"/>
        <input type='text' name="function" value="update_nav" style="display:none;"  />
		<input type='text' name="nname" value="{$nav.navname}" />
		<input type='text' name="nid" value="{$nav.navsort}"/>
		<button class="btn btn-success " type="submit" >修改更新</button>
		</form>
		<!-- ---------------------------修改导航--------------------------- -->



	<!-- ---------------新建子菜单--------------------- -->
		<form class="form-horizontal" method="post" action="admin.php">
		<th width='80px' style="display:none;"><input type='text' name="subid"  readOnly="true" value='{$newsubid}'  style="display:none;"/></th>
		<th width='80px'><input type='text' name="subname" placeholder="请输入子菜单名"></th>
		<th width='40px'><input type='text' name="subsort" placeholder="请输入排序号"></th>
		<input type='text' name="navid" value='{$nav.navid}'  style="display:none;"/></th>
		<input type='text' name="function" value='addsub'  style="display:none;"/></th>
		<th width='80px'><button type="submit" class="btn btn-primary glyphicon glyphicon-plus" >	新建子菜单</button></th>
	</form>
	<!-- ---------------新建子菜单--------------------- -->

	</h4>
</div>
<div id="nav{$nav.navid}" class="panel-collapse collapse">   <!-- 导航栏内容 -->
<div class="panel-body">
	{foreach $subarray as $sub}
	{if $sub.navid  eq  $nav.navid}
	<!-- ---------------子菜单--------------------- -->
	<div class="panel panel-success">
		<div class="panel-heading">
			<h4 class="panel-title">
			<!-- ---------------子菜单标题--------------------- -->
			<a  data-toggle="collapse" data-parent="#accordion"
				href="#sub{$sub.subid}">{$sub.subname}
			</a>
			<!-- ---------------子菜单标题--------------------- -->

                            <form class="form-horizontal" method="post" action="admin.php" style="float:right">

                            <input type='text' name="subid" readOnly="true" value='{$sub.subid}' style="display:none;"/>
                            <input type='text' name="function" value="update_sub" style="display:none;"  />
							<input type='text' name="sname"  value="{$sub.subname}" />
							<input type='text' name="sid"  value="{$sub.subsort}"/>
							<button class="btn btn-success " type="submit" >修改更新</button>
							</form>


			
			</h4>
		</div>
		<div id="sub{$sub.subid}" class="panel-collapse collapse">
			<div class="panel-body">
				<!-- ---------------资讯--------------------- -->
				{foreach $articlearray as $art}
				{if $art.subid  eq  $sub.subid}
				<!-- -------------------------编辑文章------------------- -->
				<a  style="float:left" href="editarticle.php?artid={$art.id}&subid={$sub.subid}"><button class="btn btn-success glyphicon glyphicon-edit "></button></a>
				<!-- -------------------------删除文章------------------- -->
				<form  style="float:left" method="post" action="admin.php" >
						<input type="text" name="artid" value='{$art.id}' style="display:none">
						<input type="text" name="subid" value='{$subid}' style="display:none">
						<input type="text" name='function' value="delart" style="display:none">
						<button type="submit" class="btn btn-danger glyphicon glyphicon-trash"></button>
				</form>
				<!-- -------------------------文章标题------------------- -->
				<label>		{$art.title}</label>
				<hr>
				{/if}
				{/foreach}
				<!-- ---------------资讯--------------------- -->

			

			<!-- ---------------删除子菜单--------------------- -->
			<form style="float:left" class="form-horizontal" method="post" action="admin.php"  >
			<input type='text' name="subid"  readOnly="true" value='{$sub.subid}' style="display:none;"/>
			<input type='text' name="function" value='delsub'  style="display:none;"/>
			<th width='150px'><button type="submit" class="btn btn-danger  	glyphicon glyphicon-trash" ></button>
			</form>
			<!-- ---------------删除子菜单--------------------- -->

			<!-- ---------------新建资讯--------------------- -->
			<a    href="editor.php?subid={$sub.subid}"><button class="btn btn-success glyphicon glyphicon-plus" >	新建资讯</button></a>
			<!-- ---------------新建资讯--------------------- -->

			</div>
		</div>
	</div>
	<!-- ---------------子菜单--------------------- -->
	{/if}
	{/foreach}
</div>
</div>
</div>
<!-- ---------------导航条--------------------- -->
{/foreach}
<!-- ---------------导航条--------------------- -->
<!-- <div class="panel panel-info">
<div class="panel-heading">
<h4 class="panel-title">
<a data-toggle="collapse" data-parent="#accordion"
	href="#collapseThree">
	点击我进行展开，再次点击我进行折叠。第 3 部分--toggle 方法
</a>
</h4>
</div>
<div id="collapseThree" class="panel-collapse collapse">
<div class="panel-body">
	Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
	nesciunt sapiente ea proident. Ad vegan excepteur butcher vice
	lomo.
</div>
</div>
</div> -->
<!-- ---------------导航条--------------------- -->