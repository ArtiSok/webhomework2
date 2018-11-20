<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->

<?php
require_once './student.php';

$PDDRstudent[] = new Student("Vladislav", "Tamm", "152489");
$PDDRstudent[] = new Student("Martin", "Trust", "155688");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>Masinaehitus- ja energiatehnoloogia protsesside juhtimine(Tehnoloogiliste protsesside juhtimine)</title>
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
                    <h4 class="card-title">Masinaehitus- ja energiatehnoloogia protsesside juhtimine 
                        (Tehnoloogiliste protsesside juhtimine)</h4>
                    <p class="card-text">Energeetika, masinaehitustehnoloogia ning mäendus on Eesti traditsioonilised tööstusharud, kus tootmise efektiivsemaks muutmiseks võetakse pidevalt kasutusele uusi tehnoloogiaid, masinaid ja roboteid. See tingib üha suureneva vajaduse kaasaegsete tehnikateadmistega haritud spetsialistide järele. TTÜ Virumaa kolledžis just selliseid hinnatud spetsialiste õpetataksegi. Meie lõpetajad on tõelised leiutajad ja innovaatorid, kelle ülesandeks on kujundada uusi tööstus- ja tootmistehnoloogiaid!</p>
                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">Students</div>
                <div class="card-body text-dark">
                    <h8 class="card-title"> </h8>
                    <p class="card-text"> 
                        <?php
                        foreach ($PDDRstudent as $PDDRstudents) {
                            echo $PDDRstudents->__toString() . "<br/>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</html>
