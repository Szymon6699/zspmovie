<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="S1">
        <h1>REJESTRACJA</h1>

        <form method="POST">
            imie <input type="text" name="name"><br>
            nazwisko <input type="text" name="surname"><br>
            haslo <input type="password" name="password"><br>
            e-mail <input type="text" name="email"><br>
            <input type="submit" name="submit">

        </form>
        <a href="login.php"><input type="button" name="submit2" value="logowanie"></a>
        <a href="../index.php"><input type="button" name="przycisk" value="Strona główna"></a>

    </div>

    <?php
        $con = new mysqli("127.0.0.1","root","","zspmovie");
        print_r($_POST);
        if (isset($_POST["name"])){

            $sql="INSERT INTO user (`name`,`surname`,`password`,`email`) VALUES ('".$_POST['name']."'
            ,'".$_POST['surname']."','".$_POST['password']."','".$_POST['email']."' )";
            
            $res = $con->query($sql);
        }
        
    ?>
    
</body>
</html>