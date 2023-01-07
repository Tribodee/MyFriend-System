<?php include('server.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <img src="img\protecter.jpg" id="protecter" alt="img bg not found">
        <form action="login_db.php" method="post">
            <?php include('error.php');?>
            <?php if(isset($_SESSION['error'])):?>
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
                <label for="password">Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" name="log_user" class="btn">Login</button>
            </div>
            <p>
                Are you not a member <a href="register.php">Sign-up</a>
            </p>
        </form>
    </section>
    <div class="sec">
        <p>
            Contact<br>
            Tell: 094-495-4446<br>
            E-mail: riggker@gmail.com<br>
            GitHub:<br>
            <img src="img\qrcodetogithub.png" id="qr" alt="img qrcode not found">
        </p>
    </div>
</body>
</html>