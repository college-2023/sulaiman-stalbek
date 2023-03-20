<!-- <?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?> -->
 <!DOCTYPE html>
 <html lang="en">
 
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="stylesheet" href="home.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Inter&family=Oswald:wght@300&display=swap" rel="stylesheet">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
     <title>Page</title>
 </head>
 
 <body>
     <div class="Header">
         <div class="Logo"><img src="img/tempoooo_Монтажная область 2.png" alt="logo" height="60%" width="80%"></div>
         <form class="Searcher">
             <input type="text" name=text class="search">
             <input type="image" src="img/search.png" alt="search" height="60%" class="searchButton">
         </form>
 
         <p><a href="/favorite.html"><img src="img/favorite.png" alt="favorite"></a></p>
         <p><a href="/trash.html"><img src="img/shop.png" alt="shop"></a></p>
         <p><a href=""><img src="img/icon.png" alt="icon"></a></p>
     </div> 
     <div class="Medium">
         <div class="Menu">
             <a href=""> Каталог </a>
             <a href=""> Доставка </a>
             <a href=""> Акции </a>
             <a href=""> Под заказ </a>
         </div>
     </div>
     <div class="Center">
         <div class="TXT"><b>Добро пожаловать,<?php echo $_SESSION['name']; ?><br>
          <a href="logout.php" style="padding: 1px 10px; background: black;">Logout</a></b></div>
     </div>

     <div class="Footer">
         <div class="headlines">
             <div><b> Компания </b></div>
             <div><b> Покупателям </b></div>
             <div><b> Наши контакты </b></div>
         </div>
         <div class="ContentsFooter">
             <div class="Con1">
                 <a href="" class="FooterShr">О нас</a> <br>
                 <a href="" class="FooterShr">Новости</a> <br>
                 <a href="" class="FooterShr">Сотрудничество</a>
             </div>
             <div class="Con2">
                 <a href="" class="FooterShr">Как оформить заказ</a> <br>
                 <a href="" class="FooterShr">Способы оплаты</a> <br>
                 <a href="" class="FooterShr">Условия доставки</a> <br>
                 <a href="" class="FooterShr">Правила возврата</a>
             </div>
             <div class="Con3">
                 <p id="c3"><a href="" class="FooterShr"><img src="img/phone_min.png" alt="phone_min">+996 709 310
                         416</a></p>
                 <p d="c3"><a href="" class="FooterShr"><img src="img/mail_min.png" alt="phone_min">
                         tempo.music@gmail.com</a></p>
                 <p d="c3"><a href="" class="FooterShr"><img src="img/location_min.png" alt="phone_min"> Киевская 129</a>
                 </p>
             </div>
         </div>
         <div class="Line"><img src="img/Line.png" alt="Line"></div>
         <div class="LastElements">
             <div class="TempoKg">2023 © tempo.kg</div>
             <div class="Emblems">
                 <p id="Emblem1"><a href=""><img src="img/Telegramm.png" alt="Telegramm"></a></p>
                 <p id="Emblem2"><a href=""><img src="img/Facebook.png" alt="Facebook"></a></p>
                 <p id="Emblem3"><a href=""><img src="img/Instagram.png" alt="Instagram"></a></p>
                 <p id="Emblem4"><a href=""><img src="img/Twitch.png" alt="Twitch"></a></p>
             </div>
         </div>
 
     </div>
     
</body>
</html>

<!-- <?php 
}else{
     header("Location: index.php");
     exit();
}
 ?> -->