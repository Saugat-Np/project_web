<?php session_start();
if(!isset($_SESSION["unm"])){
   header("location:login.php");
   exit();
}
if(isset($_POST["logout"])){
    session_destroy();
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home_page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <section class="nav-section">
            <nav>
                <div id ="nav">
                    <div class="greet">    
                        <?php
                        if(isset($_SESSION["unm"])){
                            echo "HI, ".$_SESSION["unm"];
                        }
                        ?></div>
                    <div class="right">
                        <div> <a href="#"> <button class="nav-btn">home </button> </a> </div>
                        <div> <a href="#"> <button class="nav-btn">about</button> </a> </div>
                        <div> <a href="#"> <button class="nav-btn">profile </button> </a> </div>
                        <div> <a href="#">
                            <form method="POST">
                                <button class="nav-btn"type="submit" name="logout">logout</button>
                            </form>
                          </div>
                    </div>
                </div>
            </nav>
        </section>
        <section class="body-section">
            <div class="middle">
               
            </div>
        </section>
    </main>
</body>
</html>