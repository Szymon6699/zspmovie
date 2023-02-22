<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="S1">
        <h1>LOGOWANIE</h1>
        <form method="POST">
            e-mail<input type="text" name="email"><br>
            haslo <input type="password" name="password"><br>
            <input type="submit" name="submit"> 
        </form>

    </div>
    <?php
        session_start();
        $con = NEW MYSQLI("127.0.0.1","root","","zspmovie");
        print_r($_POST);

        if(isset($_POST['email']) && isset($_POST['password'])){
            $sql = "SELECT * FROM user WHERE email='".$_POST['email']."'AND password='".$_POST['password']."'";
            $res= $con->query($sql);

            $user = $res->fetch_array(MYSQLI_ASSOC);
            if (count($user)>0){
                $_SESSION["user_email"]=$user["email"];
                $_SESSION["user_id"]=$user["id"];
                header("location: mp.php");
            }
        }

    ?>
</body>
</html>