<?php
  $con = mysql_connect("localhost","root","") or die("Error in connection");
  if($con)
  {
    echo"Connected Succesfully";
  }
  $db = mysql_select_db('music_store', $con);
  if(isset($_POST['song_name']))
  {
    date_default_timezone_set ( 'Asia/Kathmandu' );
    $new_date = date("d-m-Y H:i:s a");
    $name = $_POST['song_name'];
    $genre = $_POST['genre'];
    $created_at = $new_date;
  }
  $encrypted_password = crypt($password);


  $sql = "INSERT INTO tbl_user (Name, Address, Email, Password) VALUES (''". $name ."','". $address ."','".$email."','".$encrypted_password."');";
  echo $sql;

  $result = mysql_query($sql);
  if (!$result) {
      die('Invalid query: ' . mysql_error());
  }
 
?>