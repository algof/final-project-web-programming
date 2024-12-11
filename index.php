<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Page</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <style>
      body {
         display: flex;
         justify-content: center;
         align-items: center;
         height: 100vh;
         margin: 0;
         font-family: Arial, sans-serif;
         background-color: #f4f4f4;
      }

      .login-container {
         text-align: center;
         background-color: #fff;
         padding: 40px;
         border-radius: 10px;
         box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }

      h2 {
         font-size: 24px;
         margin-bottom: 30px;
         font-weight: bold;
         color: #333;
      }

      .login-options {
         display: flex;
         justify-content: space-around;
         gap: 30px;
      }

      .login-button {
         display: flex;
         flex-direction: column;
         align-items: center;
         justify-content: center;
         padding: 20px 40px;
         font-size: 18px;
         text-decoration: none;
         color: white;
         border-radius: 10px;
         width: 180px;
         height: 180px;
         background-color: #4CAF50;
         box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         transition: all 0.3s ease;
      }

      .login-button span {
         margin-top: 10px;
         font-size: 16px;
      }

      .tutor-btn {
         background-color: #008CBA;
      }

      /* Hover effects */
      .login-button:hover {
         transform: scale(1.05);
         box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
      }

      .login-button i {
         font-size: 40px;
      }
   </style>
</head>
<body>

   <div class="login-container">
      <h2>Selamat Datang! Silakan pilih role di bawah:</h2>

      <div class="login-options">
         <a href="login.php" class="login-button student-btn">
            <i class="fas fa-user-graduate"></i>
            <span>Login sebagai Pelajar</span>
         </a>
         <a href="admin/login.php" class="login-button tutor-btn">
            <i class="fas fa-chalkboard-teacher"></i>
            <span>Login sebagai Pengajar</span>
         </a>
      </div>
   </div>

</body>
</html>
