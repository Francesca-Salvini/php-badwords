<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    

    <?php

    /*
    ESERCIZIO :
    Creare una variabile con un paragrafo di testo. 
    Visualizzare a schermo il paragrafo con la relative lunghezza 
    e sostituire la badword passata in GET con tre *
    */

        // Paragrafo 
        $string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni soluta odit esse blanditiis quos, ratione quam hic, quia voluptate, nulla earum! Dignissimos, explicabo? Culpa soluta sapiente tempore ab enim repudiandae.";

        // Parola da censurare, la inserisce l'utente nella querystring
        $badworld = $_GET['badworld'];

        // Paragrafo censurato
        $censored_string = str_replace( $badworld, "***", $string);

    ?>

    <p><?php echo $string ?></p>
    <p><?php echo "Lunghezza paragrafo : ".strlen($string); ?></p>
    
    
    <p><?php echo $censored_string; ?></p>
    <p><?php echo "Lunghezza paragrafo : ".strlen($censored_string); ?></p>
    
    </body>
</html>

