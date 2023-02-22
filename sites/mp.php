<html>

    <head>

        <link rel="stylesheet" href="../css/style.css">
        <meta charset="UTF-8">


    </head>

    <body>
    
            <div class="S1">

                <h1>Wypożyczalnia filmów</h1>
                
                <?php
                    session_start();
                    $con = new mysqli("127.0.0.1","root","","zspmovie");
                    echo 'jestes zalogowany jako: '.$_SESSION["user_email"].'<br>';
                
                ?>
                <a href="../index.php"><input type="submit" value="wyloguj sie"></a>
                <a href="movie-search.php"><input type="submit" value="wyszukaj film"></a>
                <a href="movie-add.php"><input type="submit" value="dodaj film"></a>
            

                
            </div>
    </body>


</html>