<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?=$title?></title>
  <link rel="stylesheet" href="/css/style.css">
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
          <a href="/basket" class="cart_link">
          <svg class="cart_icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M96 0C107.5 0 117.4 8.19 119.6 19.51L121.1 32H541.8C562.1 32 578.3 52.25 572.6 72.66L518.6 264.7C514.7 278.5 502.1 288 487.8 288H170.7L179.9 336H488C501.3 336 512 346.7 512 360C512 373.3 501.3 384 488 384H159.1C148.5 384 138.6 375.8 136.4 364.5L76.14 48H24C10.75 48 0 37.25 0 24C0 10.75 10.75 0 24 0H96zM128 464C128 437.5 149.5 416 176 416C202.5 416 224 437.5 224 464C224 490.5 202.5 512 176 512C149.5 512 128 490.5 128 464zM512 464C512 490.5 490.5 512 464 512C437.5 512 416 490.5 416 464C416 437.5 437.5 416 464 416C490.5 416 512 437.5 512 464z"/></svg>
          <span class="cart_count">3</span>
          </a>
          <? if (!$auth):?>
            <div>
              <a href="#" class="medium_link red_link header__login_link" id="showLoginForm">Login</a>
              <a href="#" class="button button_red medium_link">Register</a>
            </div>
            <? else: ?>
            <h3><?=$user?></h3>
          <? endif; ?>
        </div>
      </div>
    </header>
    <?php include "../templates/login_form.php" ?>
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