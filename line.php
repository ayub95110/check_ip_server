<!DOCTYPE html>
<html lang="en">
<head>
  <title>ระบบ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta http-equiv="refresh" content="5"> 
  </head>
  <body class="style1">

    <?php

    function send_line_notify($message,$token)
{
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://notify-api.line.me/api/notify");
  curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, "message=$message");
  curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
  $headers = array( "Content-type: application/x-www-form-urlencoded", "Authorization: Bearer $token", );
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
  $result = curl_exec( $ch );
  curl_close( $ch );
  return $result;
}
// $token = 'kzmp9PQJUqJzWDWmHeRYB1BW23kkAwiaVx3oBrkWkgz';
$token = 'd0VXdRqR0dfdStLd22bQNLP5MoHhWYJYDF27ULZPknX';

//To_day
date_default_timezone_set("Asia/Bangkok");
$date_now = date('d-m-Y');
$time_now = date('h:i:s');
     ?>


 <?php

$cnn_hos = new mysqli("localhost", "root", "123456789", "authen");$cnn_hos->set_charset("utf8");


 $q_hos = $cnn_hos -> query("select * from ip    ");
 while( $f_host = $q_hos -> fetch_assoc()) {
 $ip = $f_host['ipaddress']; 
 $ip_name = $f_host['ip_name']; 
  //$ip='192.168.111.3';
$exe = shell_exec("ping -n 1 $ip");
if(strrpos($exe,"unreac") <> ""){
  
echo "$ip : ❌ ไม่สามาถติดต่อได้ เมื่อ $date_now <br> ";
  if($f_host['ip_status'] == 1)
  {
    $q_insert = $cnn_hos -> query("insert into log (id_log, id_ip, date_time, log_status) values ('','$ip', now(), '2')");
    $q_insert = $cnn_hos -> query("update ip set ip_status='2' where id ='$f_host[id]'");
    send_line_notify("\n IP : $ip ❌\nNAME : $ip_name\nไม่สามาถติดต่อได้ \n🕐 $time_now \n📆 $date_now ", $token);
  }




}else
{ echo "$ip : ✅ สามาถติดต่อได้ปกติ เมื่อ $date_now <br>";
  if($f_host['ip_status'] == 2)
  {
    $q_insert = $cnn_hos -> query("insert into log (id_log, id_ip, date_time, log_status) values ('','$ip', now(), '1')");
    $q_insert = $cnn_hos -> query("update ip set ip_status='1' where id ='$f_host[id]'");
    send_line_notify("\n IP : $ip ✅\nNAME : $ip_name\nสามาถติดต่อได้ \n🕐 $time_now \n📆 $date_now ", $token);
  }


}
//$exe = shell_exec("ping -n 1 $ip");
//echo $exe;
 //$bbb = strrpos($exe,"unreac") ;
 //echo $bbb;
 }
 

 ?>
    
  </body>
  </html>
