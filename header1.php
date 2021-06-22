<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grandinėlė</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/ae58c7a07e.js" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
</head>
<body>
<div class="nav-login">
                        <?php
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit">Atsijungti</button></form>';
                            } else {
                                echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="uid" placeholder="Username" />
                            <input type="password" name="pwd" placeholder="Password" />
                            <button type="submit" name="submit">Prisijungti</button>
                        </form>
                        <a href="signup.php">Registruotis</a>';
                            }
                        ?>      
                    </div>
                
    <h5 id="cf"><i class="fas fa-envelope-square"></i>Parašyk mums</h5>
    <br>
    
    <div id="cf1">
    <form action="<?php $_PHP_SELF; ?>" method="POST">
Turite klausimų, pastebėjimų ar idėjų? Parašykite mums!
<br>
<br>
Jūsų vardas:
<br>
     <input type="text" placeholder="Jūsų vardas" name="vardas" required method="POST">
     <br>
Jūsų el. pašto adresas: 
<br>
<input type="email" placeholder="Jūsų el. paštas" name="email" required method="POST">
<br>
Jūsų žinutė: 
<br>
<textarea rows="10" placeholder="Žinutė" name="message" required method="POST"></textarea>
<br>
<button type="submit" class="formbtn1">Siųsti</button>
    </form>
    </div>

    <h5><i class="fas fa-book-reader"></i>Kaip žaisti:</h5>
    <p>Sudaryk žodžių grandinėlę pakeisdamas po vieną raidę žodyje. Pvz.: <em>katė -matė-metė</em></p>
</p>        