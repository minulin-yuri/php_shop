<section class="intro">
  <div class="container intro__container">
    <div class="intro__title">
      <h1 class="intro__text">Could you be our <span class="red_text">next winner?</span></h1>
      <a href="#" class="button button_blue intro__button">Enter now</a> 
    </div>
    <div class="intro__image">
      <img src="./img/intro_car.png" alt="intro_car">
    </div>
  </div>
</section>
<section class="competition">
      <div class="container competition__container">
        <h2 class="competition__title">Latest Competitions</h2>
        <div class="competition__products">
          <?php foreach ($products as $product): ?>
            <?php include "../templates/product.php" ?>
          <?php endforeach; ?>
        </div>
      </div>
</section>
<section class="condition">
      <div class="container condition__container">
        <h2 class="condition__title">How it works</h2>
        <div class="condition__items">
          <div class="condition__item">
            <img src="./img/touchscreen.png" alt="touchscreen" class="condition__icon">
            <span class="condition__desc">Choose a competition and how many entries you would like</span>
          </div>
          <svg width="25" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="black" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/></svg>
          <div class="condition__item">
            <img src="./img/online-payment.png" alt="online-payment" class="condition__icon">
            <span class="condition__desc">Answer the qualifying question (be sure to answer correctly!) and complete payment</span>
          </div>
          <svg width="25" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="black" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/></svg>
          <div class="condition__item">
            <img src="./img/movie-tickets.png" alt="movie-tickets" class="condition__icon">
            <span class="condition__desc">Tickets for all correct answers are entered into the draw, streamed LIVE on Facebook using Google's random number generator</span>
          </div>
          <svg width="25" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="black" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/></svg>
          <div class="condition__item">
            <img src="./img/winner.png" alt="winner" class="condition__icon">
            <span class="condition__desc">If you win, we may try to contact you whilst live on Facebook, so be prepared!</span>
          </div>
        </div>
      </div>      
</section>
<section class="reviews">
      <div class="container reviews__container">
        <div class="reviews__desc">
          <p class="reviews__text">"Unbelievable this is a dream come true, no way would I ever think I would own a car like this. What great blokes. Thank you very much! 5 star from me!!!"</p>
          <span class="reviews__author">Danny Churchman</span>
          <img src="./img/dots.png" alt="dots">
        </div>
        <img src="./img/review.png" alt="review">
      </div>
</section>
<section class="winners">
      <div class="container winners__container">
        <h2 class="winners__title">Latest Winners</h2>
        <div class="winners__list">
          <?php foreach ($winners as $winner): ?>
          <div class="winners__item winner">
            <img src="<?=getProductImg(IMG_DIR, $winner['img'])?>" alt="<?=$winner['img']?>" class="winner__img">
            <div class="winner__desc">
              <h3><?=$winner['name']?></h3>
              <span><?=$winner['desc']?></span>
            </div>
          </div>
          <?php endforeach;?>
        </div>
      </div>
</section>