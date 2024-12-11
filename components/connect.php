<?php
   // connect asli
   // $db_name = 'mysql:host=localhost;dbname=course_db';
   // connect hosting
   $db_name = 'mysql:host=sql312.infinityfree.com;dbname=if0_37898271_course_db';
   $user_name = 'if0_37898271';
   $user_password = 'r3koJF3Y7xS9fM';

   $conn = new PDO($db_name, $user_name, $user_password);

   function unique_id() {
      $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $rand = array();
      $length = strlen($str) - 1;
      for ($i = 0; $i < 20; $i++) {
          $n = mt_rand(0, $length);
          $rand[] = $str[$n];
      }
      return implode($rand);
   }

?>