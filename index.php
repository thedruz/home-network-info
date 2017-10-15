<?php include 'NetworkInfo.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>

<body>
  <div class="container" style="height:100vh;">
    <div class="row">
      <div class="col-12 col-lg-12" style="margin-top:50px; margin-bottom:50px; text-align:center;">
        <h1>Home Network Info</h1>
        <form action="PingNetwork.php" method="post">
          <button type="submit" class="btn btn-info">Refresh Network</button>
        </form>
      </div>
      <div class="col-12 col-lg-6">
        <div class="border p-3 m-3">
          <h5 class="text-center">Server info</h5>
          <div class="p-2">
            <h6>Server name</h6>
            <var><?php echo $_SERVER['SERVER_NAME'] ?></var>
          </div>
          <div class="p-2">
            <h6>Server address</h6>
            <var><?php echo $_SERVER['SERVER_ADDR'] ?></var>
          </div>
          <div class="p-2">
            <h6>Server software</h6>
            <var><?php echo $_SERVER['SERVER_SOFTWARE'] ?></var>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="border p-3 m-3">
          <h5 class="text-center">User info</h5>
          <div class="p-3">
            <h6>User address</h6>
            <var><?php echo $_SERVER['REMOTE_ADDR'] ?></var>
          </div>
          <div class="p-3">
            <h6>User software</h6>
            <var><?php echo $_SERVER['HTTP_USER_AGENT'] ?></var>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-12 border row m-3 p-3">
        <div class="col-12 col-lg-12">
          <h5 class="text-center">Network Info</h5>
        </div>
        <div class="col-12 col-lg-6">
          <div class="p-3 m-3">
            <h6>PC's in Windows domain</h6>
            <?php echo get_networked_pcs(); ?>
          </div>
        </div>
        <div class="col-12 col-lg-6">
          <div class="p-3 m-3">
            <br>
            <h6>All networked devices</h6>
            <?php echo get_networked_pcs_all(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<style>
  @media screen and (max-width: 1024px) {
    html{
      font-size: 30px;
    }
  }
</style>

</html>