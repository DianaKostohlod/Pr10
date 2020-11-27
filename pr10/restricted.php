<?php
 session_start();
 if(!isset($_SESSION['logged_user'])){
     header('Location: login.html');
     exit;
 }
 ?>
 <html>
 <body>
 <p>Здравствуйте, <?php echo $_SESSION['logged_user']; ?>, вы успешно вошли <p/>
 </body>
 </html>