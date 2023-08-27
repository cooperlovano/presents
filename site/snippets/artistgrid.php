<?php if ($page = page('Artists')): ?>
        <ul class="artist-grid grid">
            <?php foreach ($page->children() as $artist): ?>
            
                <li class="column">
                    <a href="<?= $artist->url() ?>">
                    <?php if($image = $artist->thumbnailimg()->toFile()): ?>
                        <div class="thumb-holder">
                            <img class="thumbnail" src="<?= $image->crop(300, 200)->url() ?>" alt="">
                            <span class="timestamp"><?= $artist->timestamp() ?></span>
                        </div>
                    <?php endif ?>
                    <div class="written">
                        <p class="grid-title"><?= $artist->vidtitle() ?></p>
                        <p class="grid-name"><?= $artist->title() ?></p>
                    </div>
                    </a>
                </li>
                
            <?php endforeach ?>
        </ul>
    <?php endif ?>