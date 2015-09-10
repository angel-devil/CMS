<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>后台登录界面</title>
		<link rel="stylesheet" href="./bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<script src="./jquery-2.1.4.min.js"></script>
		<script src="./bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	</head>
	<body>
		
		<div class=".controls" style="margin-top:100px;margin-left:45%">
			
			<h2>系统登录</h2>						
					{$delaytime}
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
						 <label class="control-label" ><font color="red">{if $password == 'error'}你还有{$logincount}次机会{/if}</font>
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
</html>