<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register User!</h3>
  </div>
  <div class="panel-body">
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    	<div class="form-group">
    		<label>Username</label>
    		<input type="text" name="username" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>E-mail</label>
    		<input type="emal" name="email" class="form-control" />
    	</div>
    	<div class="form-group">
    		<label>Password</label>
    		<input type="Password" name="pass" class="form-control" />
    	</div>
    	<input class="btn btn-primary" name="submit" type="submit" value="Submit" />
    </form>
  </div>
</div>