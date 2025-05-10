<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login-Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="login_section">
        <main>
            <div class="card">
                <div class="heading">
                    <h1>LOGIN</h1>
                </div>
                <div class="error">
                    <?php
                    if(isset($_GET["error"])){
                        echo "<p style='color:red;'>".$_GET["error"]."</p>";
                    }
                    ?>
                </div>
                <div class="form_area">
                    <form action="backend.php" method="POST">
                        <fieldset>
                            <legend>
                                <label for="uname">USERNAME</label>
                            </legend>
                            <input  class="input" type="text" placeholder="input your username" name="uname" required>
                        </fieldset>
                        <fieldset>
                            <legend>
                                <label for="pword">PASSWORD</label>
                            </legend>
                            <input class="input" type="password" placeholder="input your password" name="pword" required>
                        </fieldset>
                        <fieldset>
                            <button class="log"type="submit">LOGIN</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </main>
    </section>
</body>
</html>