<?php snippet('header') ?>
</header>

<div class="row main not-home">
    <div class="col-sm-9 video-holder screen">
        <div style="padding:56.25% 0 0 0;position:relative;">
            <iframe src="<?= $page->vimeolink() ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="scifi not pretend short"></iframe>
            <script src="https://player.vimeo.com/api/player.js"></script>
        </div>
        <h2 class="video-name"><?= $page->vidtitle() ?></h2>
        <h3 class="artist-name"><?= $page->title() ?></h2>
    </div>
    <div class="col-sm-3 artists">
    <img src="https://cooperlovano.com/presents_old/img/Lg-bow.png" class="lg-bow start" alt="Bow wiggly and made of red ribbon">
        <h3 class="score-title">Score</h3>
        <p class="score"><?= $page->scoretext() ?></p>
    </div>
</div>
<div class="row next-section">
    <div class="col-sm-12">
    <?php snippet('artistgrid') ?>
    </div>
</div>


<?php snippet('footer') ?>