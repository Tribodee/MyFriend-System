<?php
    session_start();

    //Check login
    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: login.php');
    }

    //Check logout
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header('location: login.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stats ma teams</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link to css -->
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <div class="col text-center w-100 p-3 bg-success">
        <h2>
            Welcome home
        </h2>
    </div>
    <div class="col text-center w-100 p-3 ">
        <!-- notification msg-->
        <?php if(isset($_SESSION['success'])):?>
            <div class="success">
                <h3>
                    <?php
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
        <!-- user information -->
        <div class="fs-2 text d-flex justify-content-between">
            <?php if(isset($_SESSION['username'])):?>
                <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
            <?php endif ?>
            <p><a href="index.php?logout='1'" style="color:blue;">LOGOUT</a></p>
        
        </div>
        <!--                   Text class="text-end"            -->
        <!-- <div class="text-end">
            <p><a href="index.php?logout='1'" style="color:blue;">LOGOUT</a></p>
        </div> -->
        <!-- <div class="textprofile2">
            <p>Home</p>
        </div> -->
    </div>
    <div class="row bg-danger text-light">
        <p class="col m-auto p-3" style="cursor:pointer;">
            Dota 2
        </p>
        <p class="col m-auto p-3" style="cursor:pointer;">
            Apex
        </p>
        <p class="col m-auto p-3" style="cursor:pointer;">
            Valorant
        </p>
        <p class="col m-auto p-3" style="cursor:pointer;">
            League of Legends
        </p>
        <p class="col m-auto p-3" style="cursor:pointer;">
            Overwatch
        </p>
        <p class="col m-auto p-3" style="cursor:pointer;">
            Hunt Showdown
        </p>
        <p class="col m-auto p-3" style="cursor:pointer;">
            CS:GO
        </p>
    </div>
    <div class="bg-success text-light text-center p-4 fs-1">
        Member
    </div>
    <div class="row">
        <div class="col m-auto w-100 text-center" style="cursor:pointer;">
            <img class="img-thumbnail" src="https://cdn-icons-png.flaticon.com/512/992/992651.png" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        <div class="col m-auto w-100 text-center">
            <img class="img-thumbnail" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
        </div>
        
    </div>
</body>
</html>