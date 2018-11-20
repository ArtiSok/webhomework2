<!DOCTYPE html>
<!--
Artur Sokolov
RDIR 51
154637
-->


<?php
require_once './student.php';
$Groups[] = new Group("a", "a", "a");
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <title>Virumaa Kolledz</title>
    </head>

    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="img\TTU_peamine_logo_EST_print.jpg" width="120,1271186440678" height="30" class="d-inline-block align-top" alt="">
            Virumaa Kolledz
        </a>
    </nav>
    <div  class="d-flex justify-content-center" style="margin-top: 1%;">  
        <div  class="card border-dark mb-3" style="width: 10 rem;">
            <div  class="card-header">Please select your course</div>
            <div  class="card-body">

                <a class="btn btn-outline-secondary btn-lg btn-block" href="RDIR.php" role="button">RDIR</a> <br> 

                <a class="btn btn-outline-secondary btn-lg btn-block" href="RDKR.php" role="button">RDKR</a> <br> 

                <a class="btn btn-outline-secondary btn-lg btn-block" href="RDDR.php" role="button">RDDR</a> <br> 

                <a class="btn btn-outline-secondary btn-lg btn-block" href="RDPR.php" role="button">RDPR</a> 
            </div>
        </div>
    </div>
</html>
