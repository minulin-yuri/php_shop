<section class="calculate">
  <div class="container calculate__container">
    <h3><?=$message?></h3>
    <form method="post">
      <input type="text" name="num1" value=<?=$num1?>>
      <select name="math" id="math">
        <?php foreach ($mathOperations as $oper): ?>
          <?php if (isset($math) && $math == $oper['name']): ?>
            <option value="<?=$oper['name']?>" selected><?=$oper['symbol']?></option>
          <?php else: ?>
            <option value="<?=$oper['name']?>"><?=$oper['symbol']?></option>
          <?php endif; ?>
        <?php endforeach; ?>
      </select>
      <input type="text" name="num2" value=<?=$num2?>>
      <input type="submit" value="Расчитать">
    </form>
  </div>
</section>