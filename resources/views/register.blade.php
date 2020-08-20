<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>注册</title>
</head>
<body>
	<div align="center">
	<form action="" method="post" enctype="multipart/form-data">
		<br>
		<h1><font color="pink">欢迎注册</font></h1>
		<br>
		<p>账号：<input type="text" name="username"></p>
		<p>密码：<input type="password" name="password"></p>
		<p>昵称：<input type="text" name="nickname"></p>
		<p>手机：<input type="text" name="phonenumber"></p>
		<p>邮箱：<input type="text" name="email"></p>
		@csrf
		<p><input type="submit" value="注册"></p>
	</form>
	</div>
	<div>
		@if ($errors->any())
          <div align="center">
          <ul>
            @foreach ($errors->all() as $error)
               <font color="pink">♥</font> {{ $error }} <font color="pink">♥</font> <br>
            @endforeach
          </ul>
          </div >
        @endif
	</div>
</body>
</html>