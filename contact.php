<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

if(isset($_POST['submit'])){

   $name = $_POST['name']; 
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $email = $_POST['email']; 
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $number = $_POST['number']; 
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $msg = $_POST['msg']; 
   $msg = filter_var($msg, FILTER_SANITIZE_STRING);

   $select_contact = $conn->prepare("SELECT * FROM `contact` WHERE name = ? AND email = ? AND number = ? AND message = ?");
   $select_contact->execute([$name, $email, $number, $msg]);

   if($select_contact->rowCount() > 0){
      $message[] = 'message sudah dikirimkan!';
   }else{
      $insert_message = $conn->prepare("INSERT INTO `contact`(name, email, number, message) VALUES(?,?,?,?)");
      $insert_message->execute([$name, $email, $number, $msg]);
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- contact section starts  -->

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>Pesan untuk kami?</h3>
         <input type="text" placeholder="Nama lengkap" required maxlength="100" name="name" class="box">
         <input type="email" placeholder="Alamat surel" required maxlength="100" name="email" class="box">
         <input type="number" min="0" max="9999999999" placeholder="Nomor telepon" required maxlength="10" name="number" class="box">
         <textarea name="msg" class="box" placeholder="Masukkan pesanmu!" required cols="30" rows="10" maxlength="1000"></textarea>
         <input type="submit" value="kirim pesan" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>Phone Number</h3>
         <a href="http://wa.me/6285932842699" target="_blank">0859-3284-2699</a>
         <a href="http://wa.me/6281226927168" target="_blank">0812-2692-7168</a>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>Email Address</h3>
         <a href="mailto:algofkz@gmail.com">algofkz@gmail.com</a>
         <a href="mailto:">valensioarvin@gmail.com</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Our Place</h3>
         <a href="https://maps.app.goo.gl/2FEwxwUad5phwVth7">Apartment Educity Lt. 15 No. 5029</a>
      </div>

   </div>

</section>

<!-- contact section ends -->











<?php include 'components/footer.php'; ?>  

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>