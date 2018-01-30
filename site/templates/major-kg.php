<?php snippet('header') ?>
<body class="kg-wrap">
  <?php snippet('menu') ?>
  <?php snippet('banner', array('bgClass' => 'bg-kg', 'colorClass' => 'color-white')) ?>
  <div id="content-wrap">
    <div id="intro" class="section">
      <div class="container headerHead">
        <div class="row">

          <div class="col s12 clear-left">
            <?= $page->introText()->kirbytext() ?>
          </div>

          <div class="col s12 m12 l6 xl6">
            <?= $page->introText1()->kirbytext() ?>
          </div>
          
          <div class="col s12 m12 l6 xl6">
            <?= $page->introText2()->kirbytext() ?>
          </div>

          
        </div>

        <div class="row">
          <div class="col s12 m12 l6 xl6 u-pull-left">
            <?= $page->introDokumente()->kirbytext() ?>
          </div>

          <div class="col s12 m12 l6 xl6 right-align u-pull-right">
            <?php if($introBubbleImage = $page->introBubbleImage()->toFile()): ?>
            <img class="bubble margin-right" src="<?= $introBubbleImage->url(); ?>">
            <?php endif ?>
          </div>
          
        </div>
        
      </div>
    </div>
      
    <?php snippet('section-image', array('picture' => $page->schwerpunkteContainerImage()->toFile())) ?>
    <div id="hierarbeiten" class="section">
      
      <div class="container">
        <div class="row">
          <div class="col s12">
            <h1 class="color-kg"><?= $page->schwerpunkteHead()->text() ?></h1>
          </div>
          <div class="col s12">
            <?= $page->schwerpunkteText()->kirbytext() ?>
          </div>
        </div>
        <?php snippet('photogrid', array('photogrid' => $page->schwerpunkteListe()->toStructure(),'type' => 'struct2')) ?>
        
        <div class="row">
          
          <div class="col s12 m12 l6 flex-bottom">
            <?= $page->schwerpunkteLink()->kirbytext() ?>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <h1><?= $page->schwerpunkteArbeitenTitle()->text() ?></h1>
          </div>
          <div class="col s12 two-column">
            <?= $page->schwerpunkteArbeitenText()->kirbytext() ?>
          </div>
        </div>

      </div>
      <?php snippet('carousel', array('gallery' => $page->projekteGallery()->toStructure())) ?>
    </div>
    <?php snippet('section-image', array('picture' => $page->bewerbDichContainerImage()->toFile())) ?>
    <div id="nochfragen" class="section">
      
      <div class="container">
        <div class="row">
          <div class="col s12 m12 l6">
            <?= $page->bewerbDichText()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6">
            <?= $page->bewerbDichFrag()->kirbytext() ?>
          </div>
        </div>
        
        
        <div class="row">
          <div class="col s12 center-align">
            <div class="button-bewerben bg-kg">
              <h4><?= $page->bewerbDichButtonText()->text() ?></h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <?php snippet('footer', array('bgClass' => 'bg-kg')) ?>