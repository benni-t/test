<?php snippet('header') ?>
<body class="apply-wrap">
  <?php snippet('menu') ?>
  <?php snippet('banner', array('bgClass' => 'bg-white', 'colorClass' => 'color-grey')) ?>
  <div id="content-wrap">
    <div id="intro" class="section">
      <div class="container headerHead">
        <div class="row">
        
          <div class="col s12 clear-left">
            <?= $page->introText()->kirbytext() ?>
          </div>
        </div>
        
        <div class="row">
          <div class="col s12 l6">
            <?= $page->introText1()->kirbytext() ?>
          </div>
          <div class="col s12 l6">
            <?= $page->introText2()->kirbytext() ?>
          </div>
        </div>
      </div>
    </div>
    <?php snippet('section-image', array('picture' => $page->infosContainerImage()->toFile())) ?>
    <div id="dassindkgprojekte" class="section">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <?= $page->schritteHead()->kirbytext() ?>
          </div>
          <div class="col s12">
            <?= $page->schritteText()->kirbytext() ?>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <?= $page->schritteNummer1Head()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer1_1()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer1_2()->kirbytext() ?>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <?= $page->schritteNummer2Head()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer2_1()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer2_2()->kirbytext() ?>
          </div>
        </div>
        
       
    </div>
    <?php snippet('section-image', array('picture' => $page->schritteContainerImage()->toFile())) ?>

    <div class="container">
        
        <div class="row">
          <div class="col s12">
            <?= $page->schritteNummer3Head()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer3_1()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer3_2()->kirbytext() ?>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <?= $page->schritteNummer4Head()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer4_1()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer4_2()->kirbytext() ?>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <?= $page->schritteNummer5Head()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer5_1()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 xl6">
            <?= $page->schritteNummer5_2()->kirbytext() ?>
          </div>
        </div>

        <div class="row">
          <div class="col s12">
            <?= $page->schritteGeschafftHead()->kirbytext() ?>
          </div>
        </div>
        
    </div>
    
  </div>
  
  <?php snippet('footer', array('bgClass' => 'bg-grey')) ?>