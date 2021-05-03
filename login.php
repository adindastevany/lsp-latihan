<?php include 'template/session.php' ?>
<?php
  if($user){
    header("Location:index.php");
  }else{
?>
<?php include 'template/header.php' ?>
<?php include 'template/navbar.php' ?>
<?php isset($_COOKIE['error_login']) ? $error = $_COOKIE['error_login'] : $error = null ?>
<form action="process/login.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  <?php if($error){ ?>
  <div class="alert alert-danger"><?php echo $error ?></div>
  <?php } ?>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php include 'template/footer.php' ?>
<?php } ?>