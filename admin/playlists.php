<?php

include '../components/connect.php';

if(isset($_COOKIE['tutor_id'])){
   $tutor_id = $_COOKIE['tutor_id'];
}else{
   $tutor_id = '';
   header('location:login.php');
}

if(isset($_POST['delete'])){
   $delete_id = $_POST['playlist_id'];
   $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

   $verify_playlist = $conn->prepare("SELECT * FROM `playlist` WHERE id = ? AND tutor_id = ? LIMIT 1");
   $verify_playlist->execute([$delete_id, $tutor_id]);

   if($verify_playlist->rowCount() > 0){

   $delete_playlist_thumb = $conn->prepare("SELECT * FROM `playlist` WHERE id = ? LIMIT 1");
   $delete_playlist_thumb->execute([$delete_id]);
   $fetch_thumb = $delete_playlist_thumb->fetch(PDO::FETCH_ASSOC);
   unlink('../uploaded_files/'.$fetch_thumb['thumb']);
   $delete_bookmark = $conn->prepare("DELETE FROM `bookmark` WHERE playlist_id = ?");
   $delete_bookmark->execute([$delete_id]);
   $delete_playlist = $conn->prepare("DELETE FROM `playlist` WHERE id = ?");
   $delete_playlist->execute([$delete_id]);
   $message[] = 'playlist dihapus!';
   }else{
      $message[] = 'playlist sudah dihapus!';
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Playlists</title>
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">
</head>
<body>

<?php include '../components/admin_header.php'; ?>

<section class="playlists">
   <!-- jangan dihapus -->
   <!-- <div style="display: flex; flex-direction:row;">
      <h1 style="align-items: center; padding-top: 15px;" class="heading">daftar playlists</h1>
      <div class="box" style="text-align: center; margin-left: 20px; align-items:first baseline; border-bottom: .1rem solid rgba(0,0,0,.2);">
            <a href="add_playlist.php" class="btn">tambah playlist baru</a>
      </div>
   </div> -->
   <div style="display: flex; flex-direction:row;" class="heading">
      <h1 style="align-items: center; padding-top: 15px; font-size: 2.5rem;">daftar playlists</h1>
      <div class="box" style="text-align: center; margin-left: 20px; align-items:first baseline;">
            <a href="add_playlist.php" class="btn">tambah playlist baru</a>
      </div>
   </div>

   <div class="box-container">
   
      <!-- <div class="box" style="text-align: center;">
         <h3 class="title" style="margin-bottom: .5rem;">buat playlist baru</h3>
         <a href="add_playlist.php" class="btn">tambah playlist baru</a>
      </div> -->

      <?php
         $select_playlist = $conn->prepare("SELECT * FROM `playlist` WHERE tutor_id = ? ORDER BY date DESC");
         $select_playlist->execute([$tutor_id]);
         if($select_playlist->rowCount() > 0){
         while($fetch_playlist = $select_playlist->fetch(PDO::FETCH_ASSOC)){
            $playlist_id = $fetch_playlist['id'];
            $count_videos = $conn->prepare("SELECT * FROM `content` WHERE playlist_id = ?");
            $count_videos->execute([$playlist_id]);
            $total_videos = $count_videos->rowCount();
      ?>
      <div class="box">
         <div class="flex">
            <div><i class="fas fa-circle-dot" style="<?php if($fetch_playlist['status'] == 'active'){echo 'color:limegreen'; }else{echo 'color:red';} ?>"></i><span style="<?php if($fetch_playlist['status'] == 'active'){echo 'color:limegreen'; }else{echo 'color:red';} ?>"><?= $fetch_playlist['status']; ?></span></div>
            <div><i class="fas fa-calendar"></i><span><?= $fetch_playlist['date']; ?></span></div>
         </div>
         <div class="thumb">
            <span><?= $total_videos; ?></span>
            <img src="../uploaded_files/<?= $fetch_playlist['thumb']; ?>" alt="">
         </div>
         <h3 class="title"><?= $fetch_playlist['title']; ?></h3>
         <p class="description"><?= $fetch_playlist['description']; ?></p>
         <form action="" method="post" class="flex-btn">
            <input type="hidden" name="playlist_id" value="<?= $playlist_id; ?>">
            <a href="update_playlist.php?get_id=<?= $playlist_id; ?>" class="option-btn">update</a>
            <input type="submit" value="delete" class="delete-btn" onclick="return confirm('hapus playlist ini?');" name="delete">
         </form>
         <a href="view_playlist.php?get_id=<?= $playlist_id; ?>" class="btn">lihat playlist</a>
      </div>
      <?php
         } ?>
      <!-- <div class="box" style="text-align: center;">
         <h3 class="title" style="margin-bottom: .5rem;">buat playlist baru</h3>
         <a href="add_playlist.php" class="btn">tambah playlist baru</a>
      </div> -->
      <?php
      }else{
         echo '<p class="empty">belum ada playlist yang ditambahkan!</p>';
      }
      ?>

   </div>

</section>













<?php include '../components/footer.php'; ?>

<script src="../js/admin_script.js"></script>

<script>
   document.querySelectorAll('.playlists .box-container .box .description').forEach(content => {
      if(content.innerHTML.length > 100) content.innerHTML = content.innerHTML.slice(0, 100);
   });
</script>

</body>
</html>