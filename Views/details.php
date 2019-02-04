<style type="text/css">
	body{		
		background-image: url(<?php echo BASE_URL; ?>assets/images/bg.jpg);
	}
	.container{
		width: 100%;
		height: 100%;
		margin-top: 5em;		
	}
	.itemDetails{
		width: 100%;
		height: 25em;
	}
	img{
		width: 20em;
		height: 20em;
		float: left;
		border-radius: 1em;
		margin-right: 2em;
		margin-left: 2em;
	}
	.title{
		font-weight: bold;
		font-size: 2em;
		color:#FFF;
	}
	.description{
		font-size: 1.5em;
		color:#FFF;
	}
	.btn{
		background-color: #00FF00;
		text-decoration: none;
		font-size: 1em;
		font-weight: bold;
		font-family: verdana;
		border-radius: 1em;
		padding:0.1em;
	}
	.goback{
		text-align: center;
	}
	.btn:hover{
		background-color: #000;
		color:#FFF;
		text-decoration: none;
		font-size: 1.5em;
		font-weight: bold;
		font-family: Arial;
		border-radius: 1em;
		padding:0.2em;
	}
	.navbar {
		display: none;
	}
	footer{
		display: none;
	}
	@media screen and (max-width: 425px) {
		img{
			width: 20em;
			height: 20em;
			border-radius: 1em;
			margin-left: 3em;
		}
		.title{
			margin-left: 2em;
		}
		.description{
			margin-left: 2em;
			color:#FFF;
		}
	}
	@media screen and (max-width: 375px) {
		img{
			width: 15em;
			height: 15em;
			border-radius: 1em;
			margin-left: 4em;
		}
		.title{
			margin-left: 1.5em;
		}
		.description{
			margin-left: 1em;
			color:#FFF;
		}
	}
	@media screen and (max-width: 320px) {
		img{
			width: 15em;
			height: 15em;
			border-radius: 1em;
			margin-left: 2em;
		}
		.title{
			font-size: 1.5em;
			margin-left: 1.9em;
		}
		.description{
			margin-left: 1em;
			margin-right: 1em;
			color:#FFF;
		}
	}
</style>
<div class="container">
	<div class="itemDetails">
		<?php foreach($detailsNews as $newDetail): ?>
		<img src="<?php echo BASE_URL; ?>assets/images/media/marketing/<?php echo $newDetail['url']; ?>" alt="Datalhes do Hamburger"/>
		<p class="title"><?php echo $newDetail['title'] ?></p>
		<p class="description"><?php echo $newDetail['description'] ?></p>
		<?php endforeach; ?>
		<div class="goback"><a class="btn" href="<?php echo BASE_URL; ?>">Voltar</a></div>
	</div>
</div>