<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import HfG Stylesheet-->
  <?= css('assets/css/normalize.css', 'screen,projection') ?>
  <?= css('assets/css/hfg.css', 'screen,projection') ?>

  <!--Import Library Stylesheets-->
  <?= css('assets/css/owl.carousel.min.css') ?>

  

</head>



<!--   </header> -->
