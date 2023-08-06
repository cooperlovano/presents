<?php snippet('header') ?>
</header>

<div class="row main">
    <div class="col-sm-9 video-holder screen">
        <h2 class="artist-name"><?= $page->title() ?></h2>
            <div style="padding:56.25% 0 0 0;position:relative;margin: 5px 10px 10px 10px;">
                <iframe src="<?= $page->vimeolink() ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="scifi not pretend short"></iframe>
                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
    </div>
    <div class="col-sm-3 artists">
        <h3 class="score-title">Score</h3>
        <p class="score"><?= $page->scoretext() ?></p>
    </div>
</div>
<div class="row next-section">
    <div class="col-sm-12">
    <?php snippet('artistlist') ?>
    </div>
</div>


<?php snippet('footer') ?>