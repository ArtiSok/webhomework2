<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->

<?php
require_once './student.php';

$RDIRstudent[] = new Student("Artur", "Sokolov", "154637");
$RDIRstudent[] = new Student("Daniil", "Alekseev", "154578");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>Rakendus infotehnoloogia</title>
    </head>
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="img\TTU_peamine_logo_EST_print.jpg" width="120,1271186440678" height="30" class="d-inline-block align-top" alt="">
            Virumaa Kolledz
        </a>
    </nav>
    <div  class="d-flex justify-content-center" style="margin-top: 1%;">  
        <div class="card-deck">
            <div class="card border-dark mb-3" style="max-width: 60rem;">
                <div class="card-header">Information</div>
                <div class="card-body text-dark">
                    <h4 class="card-title">Rakendus infotehnoloogia</h4>
                    <p class="card-text">Info- ja kommunikatsioonitehnoloogiate (IKT) rakenduste arendamine on suure hoo sisse saanud just viimastel aastatel. Asjade internet, küberfüüsikalised süsteemid ning pilve- ja tarkvaratehnoloogiad on loonud täiesti uusi võimalusi alates iseliikuvatest sõidukitest kuni tööstusrobotiteni. Seetõttu on oluliselt kasvanud nõudlus telemaatika inseneride järele, kes suudavad välja töötada ja rakendada nii tööstuslikku tarkvara kui arukaid süsteeme.
                        See on valdkond, mida iseloomustavad innovaatilisus ja kiire arengutempo. Kui tuled õppima telemaatikat ja arukaid süsteeme, garanteerid endale põneva ning võimalusterohke tuleviku!</p>
                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">Students</div>
                <div class="card-body text-dark">
                    <h8 class="card-title"> </h8>
                    <p class="card-text"> 
                        <?php
                        foreach ($RDIRstudent as $RDIRstudents) {
                            echo $RDIRstudents->__toString() . "<br/>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</html>






