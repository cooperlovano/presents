<img src="https://cooperlovano.com/presents_old/img/Lg-bow.png" class="desk lg-bow start" alt="Bow wiggly and made of red ribbon">
<img src="https://cooperlovano.com/presents_old/img/mobile-top.png" class="mobile lg-bow start" alt="Bow wiggly and made of red ribbon">

<div class="footer">
<img src="https://cooperlovano.com/presents_old/img/FULL.png" class="ribbon-title" alt="Presents, written in red ribbon">
<?php $menu = $site->menu()->toStructure(); ?>
          <?php if ($menu->isNotEmpty()) : ?>
          <ul class="nav-list">
            <?php foreach ($menu as $item): ?>
              <?php if ($mainMenuItem = $item->firstLevel()->toPage()) : ?>
                <li class="nav-item"><a <?= e($mainMenuItem->isActive(), 'aria-current="page"') ?> class="nav-item-link" href="<?= $mainMenuItem->url() ?>"><?= $mainMenuItem->title() ?></a>
                <?php endif ?>
                <?php $subMenu = $item->secondLevel()->toPages(); ?>
                <?php if ($subMenu->isNotEmpty()) : ?>
                  <ul class="nav-dropdown">
                    <?php foreach ($subMenu as $subItem) : ?>
                        <li class="nav-item"><a class="nav-item-link" href="<?= $subItem->url() ?>" <?= e($subItem->isActive(), 'aria-current="page"') ?>><?= $subItem->title() ?></a></li>
                    <?php endforeach ?>
                  </ul><!-- /nav-dropdown -->
                </li>
            <?php endif ?>
          <?php endforeach ?>
    </ul><!-- /nav-list -->
    <?php endif ?>
</div>
  <?= js([
'assets/js/index.js', 
'assets/js/home.js'
  ]) ?>

</body>
</html>