<?php
    session_start();

    //Check login
    if(!isset($_SESSION['username'])){
        $_SESSION['msg'] = "You should login first";
        header('location: login.php');
    }

    //Check logout
    if(isset($_GET['logout'])){
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

    <!-- link to css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <h2>
            Welcome home
        </h2>
    </div>
    <div class="content">
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
        <div class="textprofile1">
            <?php if(isset($_SESSION['username'])):?>
                <p>Welcome <strong><?php echo $_SESSION['username'];?></strong></p>
                <p><a href="index.php?logout='1'" style="color:blue;">LOGOUT</a></p>
            <?php endif ?>
        </div>
        <!-- <div class="textprofile2">
            <p>Home</p>
        </div> -->
    </div>
    <div class="boxgame">
        <p class="game">
            Dota 2
        </p>
        <p class="game">
            Apex
        </p>
        <p class="game">
            Valorant
        </p>
        <p class="game">
            League of Legends
        </p>
        <p class="game">
            Overwatch
        </p>
        <p class="game">
            Hunt Showdown
        </p>
        <p class="game">
            CS:GO
        </p>
    </div>
    <div class="member">
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_1
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_2
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_3
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_4
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_5
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_6
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_7
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_8
        </div>
        <div class="boxmember">
            <img class="img_member" src="https://wompampsupport.azureedge.net/fetchimage?siteId=7575&v=2&jpgQuality=100&width=700&url=https%3A%2F%2Fi.kym-cdn.com%2Fphotos%2Fimages%2Fnewsfeed%2F001%2F966%2F661%2Ffb8" alt="img_not_found">
            name_9
        </div>
    </div>
</body>
</html>
