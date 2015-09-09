<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>安装向导</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<script src="./jquery-2.1.4.min.js"></script>
		<script src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
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
							<td width=33%><input type="text" width=33% name="dbinfo[dbhost]" value="localhost"  class="txt"></td>
							<td width=33%><small>数据库服务器地址, 一般为 localhost</small></td>
						</tr>
						<tr>
							<th width=33% >	数据库名:</th>
							<td width=33%><input type="text" width=33% name="dbinfo[dbname]" value="portal"  class="txt"></td>
							<td width=33%></td>
						</tr>
						<tr>
							<th width=33% >	数据库用户名:</th>
							<td width=33%>
								<input type="text" width=33% name="dbinfo[dbuser]" value="root"  class="txt"></td>
								<td width=33%></td>
							</tr>
							<tr>
								<th width=33% >	数据库密码:</th>
								<td width=33%><input type="text" width=33% name="dbinfo[dbpw]" value="root"  class="txt"></td>
								<td width=33%></td>
							</tr>
						</table >
						<div class="desc">
							<h2><small>填写管理员信息</small></h2>
						</div>
						<table class="tb2 table" >
							<tr>
								<th  width=33% >管理员账号:</th>
								<td width=33%><input type="text" width=33% name="admininfo[username]" value="admin"  class="txt"></td>
								<td width=33%></td>
							</tr>
							<tr>
								<th width=33% >	管理员密码:</th>
								<td width=33%><input type="password" width=33% name="admininfo[password]"   class="txt"></td>
								<td width=33%><small>管理员密码不能为空</small></td>
							</tr>
							<tr >
								<th  width=33%>重复密码:</th>
								<td width=33%><input type="password" width=33% name="admininfo[password2]"  class="txt"></td>
								<td width=33%><font color="red">{if $password eq 'diffent'}两次密码不相同{/if}</font></td>
							</tr>
						</table>
					</div>
					<table class="tb2 table">
						<tr>
							<th width=50%></th>
							<td width=50%><input type="submit" class="btn btn btn-primary" name="submitname" value="确定安装" >
							</td>

						</tr>
				</table>
			</form>
		</div>
	</div>
</body>
</html>