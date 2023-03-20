<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post">
     	<h2>Регистрация</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="label" ><label>ФИО</label></div>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="ФИО"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Введите логин"><br>
          <?php }?>

          <div class="label" ><label>Е-mail</label></div>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Введите email"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="Введите email"><br>
          <?php }?>


     	<div class="label" ><label>Создать пароль</label></div>
     	<input type="password" 
                 name="password" 
                 placeholder="Введите пароль"><br>

          <div class="label" ><label>Подтвердить пароль</label></div>
          <input type="password" 
                 name="re_password" 
                 placeholder="Введите пароль"><br>

     	<button type="submit">ЗАРЕГИСТРИРОВАТЬСЯ</button><br>
          <p style="text-align: center; ">Войти с помощью</p><br>
          <div class="icons_apps">
               <div class="st_icon"><a href="#"><img src="img/App logo 043.png" ></a> </div>
               <div class="st_icon"><a href="#"><img src="img/App logo 088.png" alt=""></a></div>
               <div class="st_icon"><a href="#"><img src="img/App logo 26.png" alt=""></a></div>

          </div>
          <a class="ca" style="text-align: center;">У вас уже есть аккаунт?</a><br>
          <a href="index.php" style="background: white; color: rgb(3, 3, 3); border: 2px solid black; padding: 0; border-radius: 15px; text-align: center; font-family: 'Inter'; font-weight: 700; ">Войти</a>
     </form>
</body>
</html>