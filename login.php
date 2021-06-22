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
</head>
<body>
    <section>
        <img src="img/titul1.png" alt="Grandinele_picture">
    <
    <p style="font-family: 'Merriweather', serif;">Įdomus, interaktyvus žaidimas tau, tavo šeimai ir draugams!</p>
    <br>
    <br>

    <h3>Prisijunkite!</h3>    
    <br>
    <a href="signup.php">Registruotis</a>
    <br>
    <div class="main-wrapper login">
    <?php
        if(isset($_SESSION['u_id'])) {
            echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" name="submit">Atsijungti</button></form>';
        } else {
            echo '<form action="includes/login.inc.php" method="post">
        <input type="text" name="uid" placeholder="Vartotojo vardas" />
        <input type="password" name="pwd" placeholder="Slaptažodis" />
        <button type="submit" name="submit">Prisijungti</button>
    </form>';
        }
    ?>  
    
    
    <div class="start">
<a href="index.php"><i class="fas fa-space-shuttle"></i>Žaisti neprisijungus</i></a>
    </div>
    </section>
    
</div>
    
    <footer><?php echo '&copy;'.date('Y');?></footer>
</body>
</html>