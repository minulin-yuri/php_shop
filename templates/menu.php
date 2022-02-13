<ul>
  <?php foreach ($links as $link): ?>
  <li><a href="<?=$link['link']?>" class="small_link <?=$color?>_link"><?=$link['title']?></a></li>
  <?php endforeach; ?>
</ul>