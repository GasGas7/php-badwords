<!-- 
    - Creare una variabile con un paragrafo di testo a vostra scelta. 👌
    - Stampare a schermo il paragrafo e la sua lunghezza.👌
    - Una parola da censurare viene passata dall'utente tramite parametro GET.
    - Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->
<?php 

#Variabili
$nome = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Architecto excepturi laboriosam adipisci incidunt, maxime quas doloremque ipsum dicta ducimus possimus!';

$nomeGet = $_GET["UserWordIs"];

#String Functions
var_dump($nome);
var_dump($nomeGet);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>

</head>
<body>
    <H1>Hello PHP</H1>

    <p>
        Questo è il paragrafo preso da PHP : <?php echo $nome?>
    </p>
    <p>
        La sua lunghezza è <?php echo strlen($nome) ?> 

        and <?php echo $nomeGet ?> ma qui la censurianmo come tre asterischi <?php  ?>
    </p>
</body>
</html>


 