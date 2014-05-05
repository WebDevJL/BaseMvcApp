<div class="container theme-showcase" role="main">

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron">
    <h3><?php echo $resx["h3_title"]; ?></h3>
    <div class="form-group">
      <input class="form-control" placeholder="<?php echo $resx["input_1_placeholder"]; ?>">
    </div>
    <div class="form-group">
      <input class="form-control" placeholder="<?php echo $resx["input_2_placeholder"]; ?>">
    </div>
    <div class="form-group">
      <textarea class="form-control resize-vertical" rows="5" placeholder="<?php echo $resx["input_3_placeholder"]; ?>"></textarea>
    </div>
    <p>
      <a href="<?php echo $submit_url; ?>" class="btn btn-primary btn-lg" role="button">
        <?php echo $resx["submit_link_text"]; ?>
      </a>
    </p>
  </div>
</div> <!-- /container -->