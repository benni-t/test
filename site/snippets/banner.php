<?php $overviewBanner = $page->overviewBanner()->toFile(); ?>

<div id="index-banner" class="banner-container">
  <div class="no-pad-bot relative" style="height: 100%;">
    <div class="row relative" style="height: 100%;">
      <div class="banner-text absolute" style="width: 100%;">
        
          <div class="row">
            <div class="col <?= $bgClass; ?>">
              <h1 class="header1 left font-bold no-pad no-margin <?= $colorClass; ?>" style="display: inline-block;"><?= $page->bannerTextH1()->text(); ?></h1>
            </div>
          </div>
        
      </div>
    </div>
  </div>
  <div class="banner-shot">
    <?php if($overviewBanner): ?>
      <img src="<?= $overviewBanner->url(); ?>" alt="">
    <?php endif ?>
  </div>
</div>
