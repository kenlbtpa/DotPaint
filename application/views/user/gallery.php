
<?php echo HTML::script( 'system/media/media/dropzone/dropzone/downloads/dropzone.js' ); ?>
<?php //echo HTML::style( 'system/media/media/dropzone/dropzone/downloads/css/basic.css' ); ?>
<?php //echo HTML::style( 'system/media/media/dropzone/dropzone/downloads/css/dropzone.css' ); ?>

<div class = 'container-fluid' style = 'position:relative; left:-18%;'> 

<div class = 'span3' > <!-- Login User Group -->

<div class = 'well sidebar-nav'  >
<ul class = 'nav nav-list'>
	<li>  
		<form class = 'form-search'>
            <span class = 'input-append' style = 'position:relative;left:-12px;'  
            	id = 'tag-search-group' data-placement='bottom'  title='search stuff'  >
              <input type="text" class="input-medium search-query" placeholder="Search" />
              <button type = 'submit' class = 'btn'> <i class = 'icon-search'> </i></button>
            </span>		
		</form>
	</li>
	<li class = 'divider' > </li>
	<li><a href ='#upload'>Upload Images</a></li>
</ul>
</div>

</div> <!-- Create User Group End -->

<div class = 'span13' > 
	<div class = 'gallerycontainer' id = 'upload_section' > <!-- Upload Section -->
		<form action = '../gallery/upload' class ='dropzone well well-lg ' id= 'dropzone-area'  >
		</form>
		<!-- Images are Loaded Here. -->
		<?php /*echo $galleryData;*/ ?>
	</div>
</div> <!-- Create User Group End -->

</div> <!-- Control Row Group End -->

<script type = 'text/javascript' >
$('#tag-search-group').tooltip(); 

Dropzone.options.dropzoneArea =
{
	dictDefaultMessage: "Do not Drop Files Here",
}; 	

</script>
