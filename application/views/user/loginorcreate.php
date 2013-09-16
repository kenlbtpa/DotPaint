<div class = 'container-fluid well' > 

<div class = 'span7' style = 'border-right: 1px solid #bbb;'> <!-- Login User Group -->

<?php 
	function controlWrap( $stuff )
	{
return "<div class = 'row' >
<div class = 'span5'>  
	$stuff 
</div>
</div>"; 
	} 
?>

<h2>Login</h2>

<?php if ($login_message && trim($login_message) != '' ) {echo "<h6 class='message'>"; echo $login_message; echo "</h6>"; } ?> 

<?php echo Form::open('user/login' , array( 'class' => 'form-signin' ) ); ?>

<?php echo controlWrap( Form::input('username', HTML::chars(Arr::get($_POST, 'username'))  , array( 'class' => 'input-block-level' , 'placeholder' => 'Username'  )  ) ); ?>


<?php echo controlWrap( Form::password('password'  , null,  array( 'class' => 'input-block-level' , 'placeholder' => 'Password'  ) ) ); ?>


<?php echo "<div class = 'row'> <div class = 'span5' >";  echo "<label class = 'checkbox' >"; echo Form::input('remember' , null, array( 'type'  => 'checkbox' ) ); echo " Remember Me </label> </div> </div> " ;   ?>

<?php echo Form::submit('login', 'Login' , array( 'class' => 'btn btn-large btn-primary'  ) ); ?>
<?php echo Form::close(); ?>


</div> <!-- Login User Group End -->

<div class = 'span1'>
</div>


<div class = 'span7' > <!-- Create User Group -->

<h2>Create a New User</h2>

<?php if ($register_message && trim($register_message) != '' ) {echo "<h6 class='message'>"; echo $register_message; echo "</h6>"; } ?> 

<?php echo Form::open( 'user/create' , array( 'class' => 'form-signin'  )   ); ?>

<?php echo controlWrap( Form::input('username', HTML::chars(Arr::get($_POST, 'username'))  , array( 'class' => 'input-block-level' , 'placeholder' => 'Username' ) ) ); ?>
<div class="error">
	<?php echo Arr::get($errors, 'username'); ?>
</div>

<?php echo controlWrap( Form::input('email', HTML::chars(Arr::get($_POST, 'email')) , array( 'class' => 'input-block-level' , 'placeholder'  => 'Email Address'  ) )  ); ?>
<div class="error">
	<?php echo Arr::get($errors, 'email'); ?>
</div>

<?php echo controlWrap( Form::password('password', null, array('class' => 'input-block-level' , 'placeholder' => 'Password'  )  )  ); ?>
<div class="error">
	<?php echo Arr::path($errors, '_external.password'); ?>
</div>

<?php echo controlWrap( Form::password('password_confirm' , null, array( 'class' => 'input-block-level' , 'placeholder' => 'Confirm Password' ) ) ); ?>
<div class="error">
	<?php echo Arr::path($errors, '_external.password_confirm'); ?>
</div>

<?php echo Form::submit('create', 'Create User' , array('class' => 'btn btn-large btn-success' ) ); ?>
<?php echo Form::close(); ?>


</div> <!-- Create User Group End -->

</div> <!-- Control Row Group End -->