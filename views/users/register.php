<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">Register User</h3>
  </div>

  <div class="panel-body">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control" />
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
    </form>
  </div>
</div>