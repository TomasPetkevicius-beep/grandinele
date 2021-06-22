<?php
if(isset($_POST['submit'])) {
    $vardas = trim($_POST['vardas']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    if(!empty($vardas) && !empty($email) && !empty($message)) {
    
    if(filter_var($_POST['message'], FILTER_VALIDATE_EMAIL)){
       $from = $_POST['email'];
       $to = "zodziu.grandinele@gmail.com";
       $subject = "Nauja žinutė nuo puslapio lankytojo";
       $autorius = 'Nuo:'.$_POST['vardas'].','.$_POST['message'];
       $zinute = htmlspecialchars($_POST['message']);
       //mail($to, $subject, $autorius, $zinute, $from);
       //echo "<script>alert('Dėkojame, jūsų žinutė gauta. Netrukus susisieksime.');</script>";
        }
    }
}

include 'db.php';
?>