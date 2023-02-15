<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="S1">
        <h1>LOGOWANIE</h1>
        <form method="$_POST">
            imie <input type="text" name="name"><br>
            haslo <input type="password" name="password"><br>
            <input type="submit" name="submit"> 
        </form>

    </div>
    <?php
        session_start();
        $con = NEW MYSQLI("127.0.0.1","root","","zspmovie");
        print_r($_POST);

        if(isset($_POST['name']) && isset($_POST['password'])){
            $sql = "SELECT * FROM user WHERE name='".$_POST['name']."'AND password='".$_POST['password']."'";
            $res= $con->query($sql);

            $user = $res->fetch_array(MYSQLI_ASSOC);
            if (count($user)>0){
                $_SESSION["user_name"]=$user["name"];
                $_SESSION["user_id"]=$user["id"];
                header("location: ../index.php");
            }
        }

    ?>
</body>
</html>