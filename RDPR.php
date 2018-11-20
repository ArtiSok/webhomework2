<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->

<?php
require_once './student.php';

$RDPRstudent[] = new Student("Andress", "Samm", "154879");
$RDPRstudent[] = new Student("Anna", "Fokina", "152358");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>Tootmise automatiseerimine</title>
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
                    <h4 class="card-title">Tootmise automatiseerimine</h4>
                    <p class="card-text">Tänu teaduse ja tehnika arengule saavad inimesed oma elu üha enam masinate abil lihtsamaks muuta. Leiutatakse ja kasutatakse erinevaid automaatikavahendeid ja -süsteeme. Ei mingeid masinaõliseid hammasrattaid ega teosammul liikuvaid konveierlinte – 21. sajandi tootmine on sulam automaatikast, kõrgtehnoloogilisest elektroonikast, nutilahendustest ja paljust muust.
                        Tootmise automatiseerimise eriala lõpetajad on leiutajad ja innovaatorid, kelle ülesandeks on vabastada inimesed tüütust ja üksluisest tööst ning leida viise, kuidas toota kiiremini ja väiksemate kuludega. Tutvu lähemalt, mida erialal sinu tulevikule pakkuda on!</p>
                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">Students</div>
                <div class="card-body text-dark">
                    <h8 class="card-title"> </h8>
                    <p class="card-text"> 

                        <?php
                        foreach ($RDPRstudent as $RDPRstudents) {
                            echo $RDPRstudents->__toString() . "<br/>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</html>
