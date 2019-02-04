<div class="container about">
	<h2>SOBRE A LANCHONETE</h2>
	<?php foreach($about as $item): ?>
		<img src="<?php echo BASE_URL; ?>assets/images/media/about/<?php echo $item['url']; ?>"/>
		<p><?php echo $item['bodyabout']; ?>.</p>
	<?php endforeach; ?>
</div>