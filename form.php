<html>
    <link rel="stylesheet" href="style.css">
    <body>
        <div class="heading">
            <h1>SIMPLE LOGIN FORM</h1>
            <p>below is the form:</p>
        </div>
        <hr>
        <form action="" method = "post">
        <label>UserName</label>
        <input type="text" name = "username"  minlength="3" maxlength="50">
        <br><br>
        <label for="">Password</label>
        <input type="password" name = "password" required minlength="3" maxlength="10">
        <hr>
        <input class="submit" type="submit" value = "login" >
        <br><br>
        <a href="form.php">Reset</a>
        <br><br><br>
        <div>
            <p id="username">Hello this is : <?=$_POST["username"]?></p>
            <br>
            <p id="password">my password is : <?=$_POST["password"]?></p>
        </div>
        </form>
    


    </body>
</html>