<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Grandinėlė login</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <header>
            <nav>
                <div class="main-wrapper">
                    <ul>
                        <li><a href="/php/tomas_projektas/login.php">Atgal į prisijungimo puslapį</a></li>
                    </ul>
                    <div class="nav-login">
                        <?php
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit">Atsijungti</button></form>';
                            } else {
                                echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="uid" placeholder="Prisijungimo vardas" />
                            <input type="password" name="pwd" placeholder="Slaptažodis" />
                            <button type="submit" name="submit">Prisijungti</button>
                        </form>';
                            }
                        ?>      
                    </div>
                </div>
            </nav>
        </header>