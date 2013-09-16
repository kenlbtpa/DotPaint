<style type="text/css">
  body {
    padding-top: 20px;
    padding-bottom: 60px;
  }

  /* Custom container */
  .container {
    margin: 0 auto;
    max-width: 1000px;
  }
  .container > hr {
    margin: 60px 0;
  }

  /* Main marketing message and sign up button */
  .jumbotron {
    margin: 80px 0;
    text-align: center;
  }
  .jumbotron h1 {
    font-size: 100px;
    line-height: 1;
  }
  .jumbotron .lead {
    font-size: 24px;
    line-height: 1.25;
  }
  .jumbotron .btn {
    font-size: 21px;
    padding: 14px 24px;
  }

  /* Supporting marketing content */
  .marketing {
    margin: 60px 0;
  }
  .marketing p + h4 {
    margin-top: 28px;
  }
</style>

<div class="container" style = 'position:relative; left:30%; top:60px;' >

  <!-- Jumbotron -->
  <div class="jumbotron">
    <h1>DOT•PAINT</h1>
    <p class="lead"> <!-- Lead Start, Product Description -->
        DOT•PAINT is a quick project meant for quick image tagging, and sharing with various people, etc.
    </p> <!-- Lead End -->
    <a class="btn btn-large btn-success" href="<?php echo URL::site('/user/create'); ?>" >Get Started today</a>
  </div>

  <hr>

  <!-- Example row of columns -->
  <div class="row-fluid">
    <div class="span4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
    <div class="span4">
      <h2>Heading</h2>
      <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
   </div>
    <div class="span4">
      <h2>Heading</h2>
      <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
      <p><a class="btn" href="#">View details &raquo;</a></p>
    </div>
  </div>

  <hr>

  <div class="footer">
    <p>&copy; Company 2013</p>
  </div>

</div> <!-- /container -->