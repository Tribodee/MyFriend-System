<?php
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['log_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        //Check empty textbox
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0) {
            $password = md5($password);
            $sql = "SELECT*FROM user WHERE username='$username' AND password='$password'";
            $result=mysqli_query($conn, $sql);

            if(mysqli_num_rows($result)==1){
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
            }
            else{
                array_push($errors, "Wrong username/password");
                $_SESSION['error'] = "Wrong username/password";
                header('location: login.php');
            }
        }
        else{
            array_push($errors, "Wrong username/password");
            $_SESSION['error'] = "Wrong username/password";
            header('location: login.php');
        }
    }
    else {
        array_push($errors, "Wrong username/password combination");
        $_SESSION['error'] = "Wrong username/password";
        header('location: login.php');
    }
    
?>