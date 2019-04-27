<main role="main">
  <div class="top">
    <?php foreach($slides as $slide): ?>
      <div class="">
        <img src="<?php echo BASE_URL; ?>assets/images/media/slide/<?php echo $slide['url']; ?>" class="w-100" />
      </div><div class="text-heads">
          <h1><?php echo $slide['title']; ?></h1>
          <p><?php echo $slide['description']; ?></p>
          <p><a class="btn btn-md btn-primary" href="<?php echo BASE_URL; ?>contact" role="button">Fale conosco</a></p>
        </div>
    </div>    
    <?php endforeach; ?>
  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row conteud-center">
      <?php foreach($news as $new): ?>
      <div class="col-lg-4">
        <img class="rounded-circle" src="<?php echo BASE_URL; ?>assets/images/media/marketing/<?php echo $new['url']; ?>" alt="Generic placeholder image" width="140" height="140">
        <h2><?php echo $new['title']; ?></h2>
        <p><?php echo substr($new['description'], 0, 250); ?></p>
        <p><a class="btn btn-secondary" href="<?php echo BASE_URL; ?>home/details/<?php echo $new['id']; ?>" role="button">Ver Detalhes &raquo;</a></p>
      </div><!-- /.col-lg-4 -->
      <?php endforeach; ?>
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <?php foreach($featurettes as $featurette): ?>
    <div class="row featurette" data-anime="top">
      <div class="col-md-6">
        <h2 class="featurette-heading"><?php echo $featurette['featurettetitle']; ?></h2>
        <p class="lead"><?php echo substr($featurette['featurettedescription'], 0, 250); ?></p>
      </div>
      <div class="col-md-6">
        <img class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" src="<?php echo BASE_URL; ?>assets/images/media/featurettes/<?php echo $featurette['url']; ?>" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 500x500"/><title>Placeholder</title><rect fill="#eee" width="100%" height="100%"/>
      </div>
    </div>
    <hr class="featurette-divider">    
    <?php endforeach; ?>

    <!-- /END THE FEATURETTES -->

  </div><!-- /.container -->
</main>
