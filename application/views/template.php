<!DOCTYPE html > 
<head> 
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" /> 
<meta name="description" content="Example Auth with ORM for Kohana 3.1" /> 
<meta name="author" content="JDStraughan" /> 
<meta name="copyright" content="Copyright 2011. JDStraughan.com" />
<meta name="language" content="en-us" /> 
<title>Auth with ORM tutorial for Kohana 3.1</title> 
<style type="text/css">
.error {
	color: red;
}
.message {
	padding: 10px;
	background-color: lightgray;
}
</style>

<?php 
  /*JQuery JS*/
  // echo HTML::script( 'system/media/media/jquery/js/jquery.js' ); 
  echo HTML::script( 'system/media/media/bootstrap/js/jquery.js' );  
	/*Bootstrap CSS*/
	echo HTML::style( 'system/media/media/bootstrap/css/bootstrap.css' ); 	
	echo HTML::style( 'system/media/media/bootstrap/css/bootstrap.min.css' ); 	
	echo HTML::style( 'system/media/media/bootstrap/css/bootstrap-responsive.css' ); 	
	echo HTML::style( 'system/media/media/bootstrap/css/bootstrap-responsive.min.css' ); 	
	/*Bootstrap JS*/
	echo HTML::script( 'system/media/media/bootstrap/js/bootstrap.js' ); 	
	echo HTML::script( 'system/media/media/bootstrap/js/bootstrap.min.js' )
?>

</head> 
<body>
	<!-- <h1>DotPaint</h1> -->
	<!-- NavBar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">Dot•Paint</a>

            <ul class="nav" >  
              <li><a href="<?php echo URL::base(); ?>">Home</a></li>
              <li><a href="<?php echo URL::site('gallery/index'); ?>">Gallery</a></li>
            </ul>

            <ul class="nav" style = 'margin-left:auto; margin-right:auto;%;'>
            <form class = 'form-search' >
            <div class = 'input-append' style = 'position:relative;top:4px;' >
              <input type="text" class="search-query" placeholder="Search" >
              <button type = 'submit' class = 'btn'> <i class = 'icon-search'> </i>   </button>
            <div>
            </form>
            </ul>
            

            <ul class = 'nav pull-right ' >
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class = 'divider-vertical' ></li>

              <?php echo $logged_status; /* Look at SYSPATH/classes/Kohana/Controller/Template.php. */ ?> 
            </ul>

            


          </div><!--/.nav-collapse -->

        </div>
      </div>
    </div>

    <!-- Actual Content -->
    <div class = 'container-fluid' >
    <div class = 'span16' >
	<div id="content" style = 'position:relative; top:60px;' >
		<?php echo $content; ?>
	</div> <!-- End of div.content -->
	<div> <!-- End of div.span10 -->
	</div> <!-- End of div.container-fluid -->
</body>

<script type = 'text/javascript' >
  /*Activates the Drop-Downs.*/
  $('.dropdown-toggle').dropdown() 
</script>


</html>