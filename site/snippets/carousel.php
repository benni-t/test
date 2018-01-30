<div class="loop owl-carousel owl-theme">
  <?php foreach($gallery as $galleryItem): ?>
  <?php if($galleryItemImage = $galleryItem->image()->toFile()): ?>
  <div class="item">
    <figure>
      <img class="materialboxed" data-caption="<?= $galleryItemImage->caption()->text() ?>" width="100%" src="<?= $galleryItemImage->crop(300, 160)->url(); ?>" alt="<?= $galleryItemImage->caption()->text() ?>">
      <figcaption><?= $galleryItemImage->caption()->text() ?></figcaption>
    </figure>
  </div>
  <?php endif ?>
  <?php endforeach ?>
</div>