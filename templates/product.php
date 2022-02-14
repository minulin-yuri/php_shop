<div class="product">
  <form action="">

    <div class="product__image">
      <img src="<?=getProductImg(PRODUCTS_IMG_DIR, $product['image'])?>" alt="<?=$product['name']?>">
    </div>
    <div class="product__description">
      <h3 class="product__title"><?=$product['name']?></h3>
      <div class="product__price">
        <h2 class="product__price_new">$<?=$product['price_new']?></h2>
        <h3 class="product__price_old">$<?=$product['price_new']?></h3>
      </div>
      <div class="product__bottom">
        <span class="product__bottom_text">5878 tickets remaining</span>
      </div>
    </div>
    <div class="product__links">
      <a href="#" class="product__buy">Купить</a>
      <a href="/card/<?=$product['id']?>" class="product__link" target="_blank"> 
        <svg width="25" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="white" d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/></svg>
      </a>
    </div>
  </form>
</div>