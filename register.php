<?php 
    session_start();
    include('dbconnect.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<center><a href="index.php">กลับหน้าหลัก</a></center>
 
    <div class="header">
        <h2>สมัครสมาชิก</h2>
    </div>

    <form action="register_db.php" method="post">
        <?php include('error.php'); ?>
        <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email">
        </div>
        <div class="input-group">
            <label for="password_1">Password</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn">สมัคร</button>
        </div>
        <p>มีสมาชิกแล้ว ? <a href="login.php">เข้าสู่ระบบ</a></p>
    </form>

</body>
</html>