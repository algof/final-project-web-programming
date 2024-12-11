<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Kenapa memilih kami?</h3>
         <p>Kami menawarkan kursus online dengan materi berkualitas, terstruktur dengan baik, dan mudah dipahami. Instruktur kami berpengalaman dan mengutamakan pendekatan praktis agar Anda bisa belajar dengan fleksibel, sesuai waktu Anda. Dapatkan dukungan penuh dari komunitas belajar kami dan akses sertifikat resmi untuk memperkuat portofolio Anda. Semua ini tersedia dengan harga yang terjangkau, memberikan nilai luar biasa untuk pengembangan karier Anda.</p>
         <!-- <a href="courses.php" class="inline-btn">kelas kami</a> -->
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>pelajar sukses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>tutor berpengalaman</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>diterima kerja</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">ulasan pengguna</h1>

   <div class="box-container">

      <div class="box">
         <p>Saya sangat menyukai kursus ini! Materinya jelas, ringkas, dan mudah diikuti. Instruktur sangat baik dalam menjelaskan topik yang kompleks dengan cara yang mudah dimengerti. Saya juga sangat menghargai kuis interaktif di akhir setiap modul. Sekarang saya merasa jauh lebih percaya diri dengan pengetahuan saya dan sangat antusias untuk menerapkannya. Sangat saya rekomendasikan!</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Algof Kristian Zega</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Kursus online ini melebihi ekspektasi saya! Materi kursusnya sangat terorganisir dengan baik, dan saya bisa belajar dengan kecepatan saya sendiri. Video-video pembelajaran sangat menarik dan informatif, serta dukungan dari instruktur sangat luar biasa. Saya merasa mendapatkan banyak pengetahuan praktis yang bisa langsung saya terapkan. Saya pasti akan mengambil lebih banyak kursus di sini!</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Valensio Arvin Putra Setiawan</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Saya sangat senang telah mendaftar di kursus ini. Kursusnya mudah diikuti, dan pelajaran-pelajarannya penuh dengan wawasan yang berguna. Contoh-contoh praktis membantu saya untuk lebih memahami teori, dan sumber daya tambahan yang disediakan juga sangat bermanfaat. Saya merasa sudah mengembangkan keterampilan nyata yang bisa langsung saya gunakan di karier saya. Kursus yang sangat bernilai!</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Gregorius Setiadharma</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Ini adalah salah satu pengalaman belajar online terbaik yang saya alami! Kursusnya terstruktur dengan baik, dan materi yang disampaikan kaya akan informasi namun mudah dipahami. Saya sangat menikmati aspek komunitas di kursus ini, di mana kami bisa berdiskusi dan berbagi pengalaman. Tugas-tugas yang diberikan menantang namun memuaskan, dan sekarang saya lebih percaya diri dengan kemampuan saya. Kursus yang luar biasa!</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Muhammad Davin Aulia Rizky</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Kursusnya luar biasa! Saya sangat menyukai bagaimana pelajaran dibagi menjadi bagian-bagian kecil yang mudah diikuti, bahkan dengan jadwal saya yang padat. Kursus ini mencakup banyak contoh nyata, yang membuat pembelajaran menjadi lebih menarik. Saya juga sangat menghargai respon cepat dari instruktur terhadap pertanyaan yang diajukan di forum diskusi. Saya sangat merekomendasikan kursus ini bagi siapa saja yang ingin memperluas pengetahuan.</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Filbert Hainsly Martin</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Awalnya saya ragu untuk mengikuti kursus online, tapi kursus ini benar-benar mengesankan. Kualitas materi sangat fantastis, dan instruktur membuat semuanya mudah dipahami. Saya belajar keterampilan praktis yang sudah saya gunakan di pekerjaan saya. Kursus ini berjalan dengan baik, dan saya sangat suka bisa mengulang pelajaran kapan saja saya butuh. Sangat sepadan dengan harga yang saya bayar!</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Muhammad Aditya Handrian</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>