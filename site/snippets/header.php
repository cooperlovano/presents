<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title><?= $site->title()->html() ?></title>
  <link rel="shortcut icon" type="image/x-icon" href="<?= url('primarylogo.png') ?>">

<?= css([
    'assets/css/bootstrap.min.css',
    'assets/css/index.css',
    'assets/css/videopg.css',
    'assets/css/footer.css'
  ]) ?>

</head>
  <body>



<!-- Fullscreen score div -->
<div id="score">
  <p class="loading-score-title">Score for <span class="name"><?= $page->vidtitle() ?></span> by <span class=""><?= $page->title() ?></span></p>
  <p class="loading-score"><?= $page->scoretext() ?></p>
   <!-- Button to hide the score -->
 <button class="hide-score">Hide Score</button>
</div>

    <div class="row fixed-header">
        <div class="col-sm-2 title-holder">
            <a href="<?= $site->url() ?>"><h1 class="site-title">Presents</h1></a>
        </div>
        <div class="col-sm-10 mainmenu" id="mainmenu">
        <div id="hamburger">
          <span class="line"></span>
          <span class="line"></span>
          <span class="line"></span>
        </div>
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
    
        



<nav class="languages">
  <ul>
    <?php foreach($kirby->languages() as $language): ?>
    <li<?php e($kirby->language() == $language, ' class="active"') ?>>
      <a href="<?= $page->url($language->code()) ?>" hreflang="<?php echo $language->code() ?>">
        <?= html($language->name()) ?>
      </a>
    </li>
    <?php endforeach ?>
  </ul>
</nav>
    </div>
    </div>