<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center><a href="index.php">กลับหน้าหลัก</a></center>
<div class="header">

เข้าสู่ระบบ
</div>
<?php
session_start();
?>
    <form action="login_db.php" method="POST">

    <?php if(isset($_SESSION['error'])) : ?>
        <div class="error">
        <h3>
            <?php 
                echo $_SESSION['error'];
                unset($_SESSION['error']);
            ?>
        </h3>
        <?php endif ?>
        </div>


      <div class="input-group">
        <label>Username </label>    
        <input type="text" name="username">
      </div>
      <div class="input-group">
        <label>Password </label>    
        <input type="password" name="password">
      </div>
      <div class="input-group">
        <button type="submit" name="login_user" class="btn">เข้าสู่ระบบ</button>
      </div>


      <p>ยังไม่เป็นสมาชิก ? <a href="register.php">สมัครสมาชิก</a> </p> 

      
    </form>

</body>
</html>