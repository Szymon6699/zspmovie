<html>

    <head>

        <link rel="stylesheet" href="../css/style.css">
        <meta charset="UTF-8">


    </head>

    <body>
    
            <div class="S2">

                <h1>dodawanie filmu</h1>
                
                <?php
                    session_start();
                    $con = new mysqli("127.0.0.1","root","","zspmovie");
                    echo 'jestes zalogowany jako: '.$_SESSION["user_email"].'<br>';
                    if(isset($_POST{"namef"}) && isset($_POST["description"]) && isset($_POST["type"])){
                        $sql="INSERT INTO film  (`name`,`description`,`type`) VALUES('".$_POST["namef"]."','".$_POST["description"]."','".$_POST["type"]."' )";
                        $res = $con->query($sql);
                    }
                
                ?>
                <a href="../index.php"><input type="submit" value="wyloguj sie"></a>
                <a href="mp.php"><input type="submit" value="powrot"></a>
                
                <div class="S3">

                    <form method="POST">

                        Nazwa filmu<input type="text" name="namef"><br>
                        opis<input type="text" name="description"><br>
                        gatunek<input type="text" name="type"><br>
                        <input type="submit" name="submit" class="przycisk">

                    </form>

                </div>

                
            </div>
           
    </body>


</html>