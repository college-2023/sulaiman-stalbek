<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>Вход</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Имя</label>
     	<input type="text" name="uname" placeholder="Введите имя"><br>

     	<label>Пароль</label>
     	<input type="password" name="password" placeholder="Введите пароль"><br>

     	<button type="submit">Войти</button>

		<p style="text-align: center; ">Войти с помощью</p><br>
          <div class="icons_apps">
               <div class="st_icon"><a href="#"><img src="img/App logo 043.png" ></a> </div>
               <div class="st_icon"><a href="#"><img src="img/App logo 088.png" alt=""></a></div>
               <div class="st_icon"><a href="#"><img src="img/App logo 26.png" alt=""></a></div>

          </div>
          <a class="ca" style="text-align: center;">Нет аккаунта?</a><br>
          <a href="signup.php" style="background: white; color: rgb(3, 3, 3); border: 2px solid black; padding: 0; border-radius: 15px; text-align: center; font-family: 'Inter'; font-weight: 700; ">Зарегистрироваться</a>
     </form>
</body>
</html>