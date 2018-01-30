<?php

// nested menu
$items = $pages->visible();

// only show the menu if items are available
if($items->count()):

?>

<div class="navbar-mobile">
	<nav class="bg-white">
		<div class="nav-wrapper">
			<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			<a href="" style="height: 100%;" class="brand-logo"><img src="<?= url()?>/assets/images/hfg-logo.png" style="max-height: 100%;"></a>
		</div>
		<div class="dropdown-nav-mobile bg-white-full">
			<ul class="">
				<li class="divider"></li>
				<li>
					<a href="sass.html">Übersicht</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="sass.html">Studiengänge</a>
				</li>
				<li class="divider"></li>
				<li class="small-height">
					<a href="sass.html">Internet of Things</a>
				</li>
				<li class="divider"></li>
				<li class="small-height">
					<a href="sass.html">Produktgestaltung</a>
				</li>
				<li class="divider"></li>
				<li class="small-height">
					<a href="sass.html">Kommunikationsgestaltung</a>
				</li>
				<li class="divider"></li>
				<li class="small-height">
					<a href="sass.html">Interaktionsgestaltung</a>
				</li>
				<li class="divider"></li>
				<li>
					<a href="sass.html">Bewerbung</a>
				</li>
			</ul>
		</div>
	</nav>
</div>
<div class="navbar-fixed">
	<nav class="bg-white">
		<div class="nav-wrapper">
			<a href="" style="height: 100%;" class="brand-logo"><img src="<?= url()?>/assets/images/hfg-logo.png" style="max-height: 100%; padding-left: 2.25rem"></a>
			<ul class="u-pull-right">
				<?php foreach($items as $item): ?>
					<li>
						<?php $children = $item->children()->visible(); ?>
						<?php if($children->count() > 0): ?>  
						<a class="dropdown-nav" <?php e($item->isOpen(), ' class="active" data-activates="dropdown1"') ?> href="#"><?php echo $item->title()->html() ?></a>	
							<ul id="study-drop" class="grow dropdown-content">	
								<div class="measuringWrapper">
								<?php foreach($children as $child): ?>
									<li class="divider"></li>
									<li<?php e($child->isOpen(), ' class="active"') ?> href="<?php echo $child->url() ?>"><a href="<?php echo $child->url()?>"><?php echo $child->title()->html() ?></a></li>
						    	<?php endforeach ?>
					    		</div>
					    	</ul>
						<?php else: ?>
							<a class="dropdown-nav" <?php e($item->isOpen(), ' class="active" data-activates="dropdown1"') ?> href="<?php echo $item->url() ?>"><?php echo $item->title()->html() ?></a>
						<?php endif ?>
					     
					</li>
				<?php endforeach ?>

				
			

			</ul>
		</div>
	</nav>
</div>
<?php endif ?>



										
