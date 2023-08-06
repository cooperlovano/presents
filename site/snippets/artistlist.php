<?php if ($page = page('Artists')): ?>
        <ul class="artist-list">
            <?php foreach ($page->children() as $artist): ?>
                <a href="<?= $artist->url() ?>">
                <li><?php if($image = $artist->thumbnailimg()->toFile()): ?>
                        <div class="thumb-holder">
                            <img class="thumbnail" src="<?= $image->url() ?>" alt="">
                            <span class="timestamp"><?= $artist->timestamp() ?></span>
                        </div>
                    <?php endif ?><p class="list-name"><?= $artist->title() ?></p></li>
            </a>
            <?php endforeach ?>
        </ul>
    <?php endif ?>