<?php 
  
// $date = new DateTime('now', new DateTimeZone('Asia/Kathmandu'));
// echo $date->format('d-m-Y H:i:s a');
date_default_timezone_set ( 'Asia/Kathmandu' );
$new_date = date("d-m-Y H:i:s a");
echo $new_date;
 ?>