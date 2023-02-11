<?php 
	session_start();
	include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background:#f4f4f4f4;">
    <div class="col m-auto mt-5 text-center w-25 rounded-top border border-5 p-3 bg-success">
        <h1>Login</h1>
    </div>
    <form class="col m-auto p-3 bg-white text-center w-25 rounded-bottom border border-5" action="login_db.php" method="post" >
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
        <div class="text-center">
            <input class="text-center mb-1" type="text" name="username" placeholder="Username">
        </div>
        <div class="text-center">
            <input class="text-center" type="password" name="password" placeholder=Password>
        </div>
        <div class="text-center">
            <button type="submit" name="log_user" class="btn">Login</button>
        </div>
        <p>
            Are you not a member <a href="register.php">Sign-up</a>
        </p>
    </form>
</body>
</html>