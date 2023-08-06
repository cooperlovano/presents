<?php snippet('header') ?>
</header>

<div class="row main">
    <div class="col-sm-9 video-holder screen">
            <div style="padding:56.25% 0 0 0;position:relative;margin: 5px 10px 10px 10px;">
                <iframe src="<?= $page->vimeolink() ?>" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="scifi not pretend short"></iframe>
                <script src="https://player.vimeo.com/api/player.js"></script>
            </div>
    </div>
    <div class="col-sm-3 artists">
    <?php snippet('artistlist') ?>
    </div>
</div>
<img src="https://cooperlovano.com/presents_old/img/FULL.png" class="ribbon-title" alt="Presents, written in red ribbon">

<?php snippet('footer') ?>