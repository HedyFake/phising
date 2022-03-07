<?php

if (!empty($_SERVER['HTTP_CLIENT_IP']))
    {
      $ipaddress = $_SERVER['HTTP_CLIENT_IP']."\r\n";
    }
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    {
      $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR']."\r\n";
    }
else
    {
      $ipaddress = $_SERVER['REMOTE_ADDR']."\r\n";
    }
function get_client_browser() {
      $browser = '';
      if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
          $browser = 'Netscape';
      else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
          $browser = 'Firefox';
      else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
          $browser = 'Chrome';
      else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
          $browser = 'Opera';
      else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
          $browser = 'Internet Explorer';
      else
          $browser = 'Other';
      return $browser;
  }
$file = 'ip.txt';
$victim = "IP: ";
$asu = "Browser: ";
$google = get_client_browser();
$fp = fopen($file, 'w');
fwrite($fp, $victim);
fwrite($fp, $ipaddress);
fwrite($fp, $asu);
fwrite($fp, $google);

fclose($fp);
?>
