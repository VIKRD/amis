<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>KPI.ANTIKAMPUS.PAYMENT</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>
<body>

    <div class="vladmaxi-top">
    <div class="clr"></div>
    </div>

<div id="wrapper">
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
	
<form name="login-form" class="login-form" action="testreg.php" method="post">

    <div class="header">
		<h1>Авторизация</h1>
		<span>Введите ваши регистрационные данные для входа в ваш личный кабинет. </span>
    </div>
	<!-- <a href="/?action=out">Выход</a> -->
    <div class="content">
	
		<input name="login" type="text" class="input username" value="Логин" onfocus="this.value=''" />
		
		<input name="password" type="password" class="input password" value="Пароль" onfocus="this.value=''" />
    </div>

    <div class="footer">
		<input type="submit" name="submit" value="ВОЙТИ" class="button" />
    </div>

</form>
</div>
<div class="gradient"></div>

	
<script type="text/javascript">
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});
</script>
</body>
</html>