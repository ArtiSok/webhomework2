<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->

<?php
require_once './student.php';

$RDKRstudent[] = new Student("Vasili", "Petrov", "153687");
$RDKRstudent[] = new Student("Irina", "Sidorova", "152548");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>Keemiatehnoloogia</title>
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
                    <h4 class="card-title">Keemiatehnoloogia</h4>
                    <p class="card-text">Enamik meie igapäevaelus kasutatavaid materjale, sealhulgas kütused, ravimid, toiduained ja olmekemikaalid on tänapäeval vähemal või suuremal määral seotud keemiatööstusega. Rohelised keemiatehnoloogiad aitavad aga ennetada keskkonnasaastamist, sünteesida biolagunevaid aineid või keskkonnasõbralikke materjale.
                        Kaasaegsed keemiatehnoloogiad arenevad väga kiiresti. Just sina võid saada selleks tehnoloogiks, kes aitab luua esimese vetikatest tehtud biokütuse või leiab viisi reovee töötlemiseks nii, et seda kõlbaks joogiveena kasutada. Keemiatehnoloogiaga seotud erialad kuuluvad maailmas kümne kõige nõutavama hulka ja väljavaated karjääriks on väga head. Tule õpi endale elukutse, mida oskavad vähesed, aga vajavad paljud!</p>
                </div>
            </div>
            <div class="card border-dark mb-3" style="max-width: 20rem;">
                <div class="card-header">Students</div>
                <div class="card-body text-dark">
                    <p class="card-text"> 
                        <?php
                        foreach ($RDKRstudent as $RDKRstudents) {
                            echo $RDKRstudents->__toString() . "<br/>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</html>


