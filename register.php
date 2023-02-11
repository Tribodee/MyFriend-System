<?php 
    session_start();
    include('server.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body style="background:#f4f4f4f4;">
    
    <div class="col m-auto mt-5 text-center w-25 rounded-top border border-5 p-3 bg-success">
        <h2>Register</h2>
    </div>

    <form class="col m-auto p-3 bg-white text-center w-25 rounded-bottom rounded-0 border border-5" action="register_db.php" method="post">
        <?php include('errors.php'); ?>
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
        <div class="text-center">
            <input class="text-center mb-1" type="text" name="username" placeholder="Username">
        </div>
        <div class="text-center">
            <input class="text-center mb-1" type="password" name="password_1" placeholder="Password">
        </div>
        <div class="text-center">
            <input class="text-center" type="password" name="password_2" placeholder="Confirm Password">
        </div>
        <div class="text-center">
            <button type="submit" name="reg_user" class="mt-3">Register</button>
        </div>
        <p>Already a member? <a href="login.php">Sign in</a></p>
    </form>

</body>
</html>