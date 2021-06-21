<!-- 
    - Creare una variabile con un paragrafo di testo a vostra scelta. 👌
    - Stampare a schermo il paragrafo e la sua lunghezza.👌
    - Una parola da censurare viene passata dall'utente tramite parametro GET.
    - Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
 -->
<?php 

#Variabili
$testo = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos porro nisi provident animi fugiat amet obcaecati quae eveniet dolore. Veritatis, sunt dolore voluptate magni nesciunt maxime inventore corrupti recusandae. Ullam nisi saepe eius dolor cupiditate quis quasi, perferendis reiciendis tempora rem laborum assumenda aperiam similique hic aspernatur asperiores placeat ab?
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos porro nisi provident animi fugiat amet obcaecati quae eveniet dolore. Veritatis, sunt dolore voluptate magni nesciunt maxime inventore corrupti recusandae. Ullam nisi saepe eius dolor cupiditate quis quasi, perferendis reiciendis tempora rem laborum assumenda aperiam similique hic aspernatur asperiores placeat ab?
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos porro nisi provident animi fugiat amet obcaecati quae eveniet dolore. Veritatis, sunt dolore voluptate magni nesciunt maxime inventore corrupti recusandae. Ullam nisi saepe eius dolor cupiditate quis quasi, perferendis reiciendis tempora rem laborum assumenda aperiam similique hic aspernatur asperiores placeat ab?
Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos porro nisi provident animi fugiat amet obcaecati quae eveniet dolore. Veritatis, sunt dolore voluptate magni nesciunt maxime inventore corrupti recusandae. Ullam nisi saepe eius dolor cupiditate quis quasi, perferendis reiciendis tempora rem laborum assumenda aperiam similique hic aspernatur asperiores placeat ab?';

$parolaCensuraGet = $_GET["UserWordIs"];
$censored = "***";
#String Functions
var_dump($testo);
var_dump($parolaCensuraGet);
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
        Questo è il paragrafo preso da PHP : <?php echo $testo?>
    </p>
    <p>
        La sua lunghezza è <?php echo strlen($testo) ?> 

        e questo è la parola presa con meotodo $_GET : "<?php echo $parolaCensuraGet ?>", ma qui la censurianmo come tre asterischi <?php echo str_replace($parolaCensuraGet, $censored, $parolaCensuraGet); ?>
    </p>

    <p>
        Questo è il mio testo censurato: <?php echo str_replace( $parolaCensuraGet, $censored, $testo); ?>
    </p>
</body>
</html>


 