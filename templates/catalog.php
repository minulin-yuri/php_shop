<section class="catalog">
      <div class="container catalog__container">
        <h2 class="catalog__title">Catalog of products</h2>
        <div class="catalog__products">
          <?php foreach ($products as $product):?>
          <?php include "../templates/product.php" ?>
          <?php endforeach; ?>
        </div>
      </div>
</section>