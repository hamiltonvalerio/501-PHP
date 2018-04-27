<?php 
	$user = ['id'=>'','name'=>'','email'=>'','pass'=>''];
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<a href="?r=home">Go Back</a>
<body>
	<form method="POST" action="?r=user/create">
	<input type="hidden" name="id" value="<?= $user['id'] ?>">
	<div class="form-group">
	<label>Name:</label>
	<input type="text" name="name" value="<?= $user['name'] ?>">	
	</div>
	<div class="form-group">
	<label>Email:</label>
	<input type="email" name="email" value="<?= $user['email'] ?>">
	</div>
	<?php if (!isset($id)): ?>
		<div>
		<label>Pass:</label>
		<input type="password" name="pass" value="<?= $user['pass'] ?>">
		</div>	
	<?php endif ?>	
	<div style="margin-top: 5px;">
		<input type="submit"  value="Save">
	</div>
</form>
</body>
</html>