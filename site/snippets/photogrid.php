
	<?php if($type == 'desc'): ?>
		<div id="photogrid" class="row">
		<?php foreach($photogrid as $photogridItem): ?>
			<?php if($photogridItemImage = $photogridItem->image()->toFile()): ?>
				<div class="col s12 m12 l6">
					<figure>
						<img class="materialboxed" data-caption="<?= $photogridItemImage->caption()->text() ?>" width="100%" src="<?= $photogridItemImage->crop(300, 200)->url(); ?>" alt="<?= $photogridItemImage->caption()->text() ?>">
						<figcaption><?= $photogridItemImage->caption()->text() ?></figcaption>
					</figure>
				</div>
			<?php endif ?>
		<?php endforeach ?>
		</div>
	<?php endif ?>

	<?php if($type == 'struct1'): ?>
		<div id="photogrid" class="row">
		<?php foreach($photogrid as $photogridItem): ?>
			<?php if($photogridItemImage = $photogridItem->image()->toFile()): ?>
				<div class="col s12 m12 l6">
					<figure>
						<img class="materialboxed" data-caption="<?= $photogridItemImage->caption()->text() ?>" width="100%" src="<?= $photogridItemImage->crop(300, 200)->url(); ?>" alt="<?= $photogridItemImage->caption()->text() ?>">
						<figcaption><?= $photogridItem->text() ?></figcaption>
					</figure>
				</div>
			<?php endif ?>
		<?php endforeach ?>
		</div>
	<?php endif ?>

	<?php if($type == 'struct2'): ?>
		<div id="photogrid" class="row">
		<?php $count = 0; ?>
		<?php foreach($photogrid as $photogridItem): ?>
			
			<?php if($count < 2): ?>
				<?php if($photogridItemImage = $photogridItem->image()->toFile()): ?>
					<div class="col s12 m12 l6">
						<figure>
							<img class="materialboxed" data-caption="<?= $photogridItemImage->caption()->text() ?>" width="100%" src="<?= $photogridItemImage->crop(300, 200)->url(); ?>" alt="<?= $photogridItemImage->caption()->text() ?>">
							<figcaption><?= $photogridItem->title() ?><br><?= $photogridItem->text() ?></figcaption>
						</figure>
					</div>
				<?php endif ?>
			<?php endif ?>
		<? $count++; ?>
		<?php endforeach ?>
		</div>
		<div id="photogrid" class="row">
		<?php $count = 0; ?>
		<?php foreach($photogrid as $photogridItem): ?>
			
			<?php if($count > 1): ?>
				<?php if($photogridItemImage = $photogridItem->image()->toFile()): ?>
					<div class="col s12 m12 l6">
						<figure>
							<img class="materialboxed" data-caption="<?= $photogridItemImage->caption()->text() ?>" width="100%" src="<?= $photogridItemImage->crop(300, 200)->url(); ?>" alt="<?= $photogridItemImage->caption()->text() ?>">
							<figcaption><?= $photogridItem->title() ?><br><?= $photogridItem->text() ?></figcaption>
						</figure>
					</div>
				<?php endif ?>
			<?php endif ?>
		<? $count++; ?>
		<?php endforeach ?>
		</div>
	<?php endif ?>

	<?php if($type == 'contact'): ?>
		<div id="photogrid" class="row">
		<?php foreach($photogrid as $photogridItem): ?>
			<?php if($photogridItemImage = $photogridItem->image()->toFile()): ?>
			<div class="col s12 m12 l6">
				<figure>
					<img class="materialboxed" data-caption="<?= $photogridItem->text() ?>" width="100%" src="<?= $photogridItemImage->crop(300, 200)->url(); ?>">
					<figcaption><?= $photogridItem->text() ?><br><a class="color-kg" href="mailto:<?= $photogridItem->email() ?>"><?= $photogridItem->email() ?></a></figcaption>
				</figure>
			</div>
			<?php endif ?>
		<?php endforeach ?>
		</div>
	<?php endif ?>

	<?php if($type == ''): ?>
		<div id="photogrid" class="row">
		<?php foreach($photogrid as $photogridItem): ?>
			<?php if($photogridItemImage = $photogridItem->image()->toFile()): ?>
				<div class="col s12 m12 l6">
					<img class="materialboxed" width="100%" src="<?= $photogridItemImage->crop(300, 200)->url(); ?>" alt="<?= $photogridItemImage->caption()->kirby() ?>">
				</div>
			<?php endif ?>
		<?php endforeach ?>
		</div>
	<?php endif ?>
