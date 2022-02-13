<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>  
    <header class="header">
      <div class="container header__container">
        <div class="header__logo">
          <h2 class="header__logo_title">LOGO<span class="red_text">Auto</span></h2>
        </div>
        <div class="header__menu">
            <?=$top_menu?>          
        </div>
        <div class="header__login">
          <a href="#" class="medium_link red_link header__login_link">Login</a>
          <a href="#" class="button button_red medium_link">Register</a>
        </div>
      </div>
    </header>
    <?=$content?>
    <footer class="footer">
      <div class="container footer__container">
        <h2 class="footer__logo">LogoAuto</h2>
        <div class="footer__menu">
          <?=$bottom_menu?>
        </div>
      </div>
    </footer>
</body>
</html>