<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Exercice 15</title>
</head>

<body>

    <?php
    function logVisite()
    {
        date_default_timezone_set('Europe/Paris');
        $date = date("d-m-y");
        $heure = date("H:i");
        $ip = $_SERVER['REMOTE_ADDR'];
        $file = fopen("./log.txt", "a+");
        file_put_contents("./log.txt", ("L'adresse suivante : " . "$ip" . " s'est connéctée le " . "$date" . " à " . "$heure \n"), FILE_APPEND);
        fclose($file);
    }
    logVisite();
    function afficherStatistiques(){
        $file2 = file_get_contents("./log.txt");
    }
    ?>


</body>

</html>