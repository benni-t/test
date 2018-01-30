
<?php snippet('header') ?>
<body class="start-wrap">
  <?php snippet('menu') ?>
  <?php snippet('banner', array('bgClass' => 'bg-grey', 'colorClass' => 'color-white')) ?>
  <div id="content-wrap">
    <div id="intro" class="section">
      <div class="container headerHead">
        <div class="row">
         
          <div class="col s12 clear-left">
            <?= $page->introText()->kirbytext() ?>
          </div>
        </div>
        <div class="row">
          <?php foreach($page->majors()->toStructure() as $major): ?>
          
          <div class="col s12 l6">
            <h5><?= $major->text()->text() ?></h5>
          </div>
          <?php endforeach ?>
          
        </div>
      </div>
    </div>
    <?php snippet('section-image', array('picture' => $page->hfgContainerImage()->toFile())) ?>
    <div id="welovehfg" class="section">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <?= $page->hfgHead()->kirbytext() ?>
          </div>
          <div class="col s12 clear-left">
            <?= $page->hfgText()->kirbytext() ?>
          </div>

          <?php snippet('photogrid', array('photogrid' => $page->hfgGallery1()->toStructure(),'type' => 'desc')) ?>
        </div>

        <div class="row flex">
          <div class="col s12 l6">
            <?= $page->hfgBild()->kirbytext() ?>
          </div>
          <div class="col s12 m12 l6 right-align u-pull-right flex-bottom">
            <?php if($hfgBubbleImage = $page->hfgBubbleImage()->toFile()): ?>
            <img class="bubble margin-right" src="<?= $hfgBubbleImage->url(); ?>">
            <?php endif ?>
          </div>
        </div>
        
      </div>
    </div>

    <?php snippet('section-image', array('picture' => $page->fragenContainerImage()->toFile())) ?>
    <div id="nochfragen" class="section">
      <div class="container">
        <div class="row">
          <div class="col s12">
            <?= $page->fragenHead()->kirbytext() ?>
          </div>
          <div class="col s12 clear-left">
            <?= $page->fragenText()->kirbytext() ?>
          </div>
        </div>

        <?php snippet('photogrid', array('photogrid' => $page->fragenStudiengaenge()->toStructure(),'type' => 'struct1')) ?>
        
        <div class="row">
          
          <div class="col s12 center-align">
            <div class="button-bewerben bg-grey">
              <h4><?= $page->fragenButtonText()->text() ?></h4>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  
  <?php snippet('footer', array('bgClass' => 'bg-grey')) ?>