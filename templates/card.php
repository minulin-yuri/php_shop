<section class="card">
  <div class="container card__container">
    <h2 class="card__title"><?=$product['name']?></h2>
    <div class="card__content">
      <img src="<?=getProductImg(PRODUCTS_IMG_DIR, $product['image'])?>" alt="<?=$product['name']?>" alt="<?=$product['name']?>" class="card__img">
      <div class="card__desc">
        <h3><?=$product['name']?></h3>
        <span class="card__text"><?=$product['description']?></span>
        <div class="card__price">
          <h2 class="card__price_new">$<?=$product['price_new']?></h2>
          <h3 class="card__price_old">$<?=$product['price_old']?></h3>
        </div>
        <a href="#" class="button button_red card__button">Купить</a>
      </div>
    </div>
  </div>
</section>
<section class="feedback">
  <div class="container feedback__container">
    <hr>
    <form action="" method="POST">
      <input class="feedback__input" type="text" name="name" placeholder="Напишите свое имя">
      <input class="feedback__input" type="text" name="comment" placeholder="Напишите свой комментарий">
      <input class="feedback__button" type="submit" value="Отправить">
    </form>
    <?php foreach ($comments as $comment): ?>
    <div class="comment">
      <h3 class="comment__title"><?=$comment['author']?></h3>
      <span><?=$comment['created_at']?></span>
      <p class="comment__text"><?=$comment['comment']?></p>
    </div>
    <?php endforeach;?>
  </div>
</section>