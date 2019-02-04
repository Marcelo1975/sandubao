<div class="container sendEmail">
  <?php if(!empty($warning)):?>
  <div class="alert alert-success"><?php echo $warning; ?></div>
  <?php endif; ?>
  <h2>FALE CONOSCO</h2>
  <form method="POST">
  	<div class="form-group">
      	<label for="name">Nome</label>
      	<input type="text" class="form-control" name="name" id="name" placeholder="Fulano de tal" />
    	</div>

    	<div class="form-group">
      	<label for="email">Email</label>
      	<input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" />
    	</div>

    	<div class="form-group">
      	<label for="subjectmatter">Assunto</label>
      	<input type="text" class="form-control" name="subjectmatter" id="subjectmatter" />
    	</div>

    	<div class="form-group">
      	<label for="msg">Mensagem</label>
      	<textarea name="msg" class="form-control" id="msg" rows="3"></textarea>
    	</div>
      <button type="submit" class="btn btn-primary">Enviar e-mail</button>
  </form>
</div>