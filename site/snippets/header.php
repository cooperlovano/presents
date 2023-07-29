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
    'assets/css/index.css'
  ]) ?>

</head>
  <body>
    <div class="row fixed-header">
        <div class="col-sm-2">
            <h1 class="site-title"><?= $page->title() ?></h1>
        </div>
        <div class="col-sm-7 mainmenu">
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