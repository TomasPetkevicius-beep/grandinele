<?php
    include_once 'header.php';
?>
    <section class="main-container">
        <div class="main-wrapper-signup">
            <h2>Registracija</h2>
            <form id="regform" class="signup-form" action="includes/signup.inc.php" method="POST">
                <input type="text" name="first" placeholder="Jūsų vardas">
                <input type="text" name="last" placeholder="Jūsų pavardė">
                <input type="text" name="email" placeholder="Jūsų el. pašto adresas">
                <input type="text" name="uid" placeholder="Vartotojo vardas">
                <input type="password" name="pwd" placeholder="Slaptažodis">
                <button type="submit" name="submit">Registruotis</button>
            </form>
        </div>
    </section>
<footer><?php echo '&copy;'.date('Y');?></footer>