<div class="container">
	<h2 style="text-align: center;">CARDÁPIOS</h2>
	<h2>Tradicionais</h2>
	<div class="list-group dishesList">
		<?php foreach($traditionais as $itemTrad): ?>
	<ul class="list-group">
		<li class="list-group-item d-flex justify-content-between align-items-center">
			<a href="" onclick="return confirm('Agradecemos a preferência, pedidos pelos fones: 99986-8391 ou 99826-5497');"><strong><?php echo $itemTrad['name']; ?>:</strong>
			<span class="descrip"><?php echo $itemTrad['description'] ?></span></a>
		</li>
	</ul>
<?php endforeach; ?>
<h2>Linha Gourmet</h2>
	<div class="list-group dishesList">
		<?php foreach($lineGourmet as $itemGour): ?>
	<ul class="list-group">
		<li class="list-group-item d-flex justify-content-between align-items-center">
			<a href="" onclick="return confirm('Agradecemos a preferência, pedidos pelos fones: 99986-8391 ou 99826-5497');"><strong><?php echo $itemGour['name']; ?>:</strong>
			<span class="descrip"><?php echo $itemGour['description'] ?></span></a>
		</li>
	</ul>
<?php endforeach; ?>
<h2>Linha Gigante</h2>
	<div class="list-group dishesList">
		<?php foreach($lineGiant as $itemGiant): ?>
	<ul class="list-group">
		<li class="list-group-item d-flex justify-content-between align-items-center">
			<a href="" onclick="return confirm('Agradecemos a preferência, pedidos pelos fones: 99986-8391 ou 99826-5497');"><strong><?php echo $itemGiant['name']; ?>:</strong>
			<span class="descrip"><?php echo $itemGiant['description'] ?></span></a>
		</li>
	</ul>
<?php endforeach; ?>
</div>