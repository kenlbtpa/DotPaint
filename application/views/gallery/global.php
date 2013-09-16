<div class = 'container-fluid' style = 'position:relative; left:-18%;'> 

<div class = 'span3' > <!-- Login User Group -->

<div class = 'well sidebar-nav'  >
<ul class = 'nav nav-list'>
	<li>  
		<form class = 'form-search'>
            <span class = 'input-append' style = 'position:relative;left:-12px;'  
            	id = 'tag-search-group' data-placement='bottom'  title='how to use tags:...'  >
              <input type="text" class="input-medium search-query" placeholder="Tag Search" />
              <button type = 'submit' class = 'btn'> <i class = 'icon-search'> </i></button>
            </span>		
		</form>
	</li>
	<li class = 'divider' > </li>
	<li><a href ='#'>Popular Tags Go Here...</a></li>
</ul>
</div>

</div> <!-- Create User Group End -->

<div class = 'span13' > <!-- Login User Group -->
	<div class = 'well gallerycontainer'>
		<!-- Images are Loaded Here. -->
		<?php echo $galleryData; ?>
	</div>
</div> <!-- Create User Group End -->

</div> <!-- Control Row Group End -->

<script type = 'text/javascript' >
	$('#tag-search-group').tooltip(); 
</script>