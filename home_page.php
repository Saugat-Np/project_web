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
</head>
<body>
    <section>
        <main>
           <h1>
            <?php
            if(isset($_SESSION["unm"])){
                echo "hello ".$_SESSION["unm"];
            }
            ?>
            <br> <p>you are wellcome</p>
           </h1>
           <form method="POST">
               <button type="submit" name="logout">logout</button>
           </form>

        </main>
    </section>
</body>
</html>