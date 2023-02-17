<?php 

    // testo
    $myText = "Quel cazzo di cliente mi ha mandato a quel paese dicendomi di andare a fanculo. Non so cosa cazzo gli sia preso, ma mi ha fatto salire una rabbia incredibile, per questo gli ho spaccato quella faccia di cazzo. Dopo pochi giorni abbiamo fatto la pace, ma ieri si è comportato nuovamente così e dunque gli ho spaccato di nuovo la faccia a quella testa di cazzo!";

    // lunghezza del testo
    $textLength = strlen($myText);

    // parola da censurare
    $censordeWord = $_GET['word'];

    // testo censurato 
    $censoredText = str_replace($censordeWord, '***', $myText);

    // lunghezza del testo censurato
    $censoredTextLength = strlen($censoredText);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Badwords</title>
    </head>
    <body>

        <main>

            <h1>PHP Badwords</h1>

            <h2>Inserisci la parola da censurare</h2>

            <form action="" method="get">

                <input type="text" name="word" placeholder="Inserisci parola...">

                <button>Censura</button>

            </form>

            <p> <b> Testo: </b> <?php echo $myText; ?> </p>

            <p> <b> Lunghezza testo: </b> <?php echo $textLength; ?> caratteri </p>

            <p> <b> Testo censurato: </b> <?php echo $censoredText; ?> </p>

            <p> <b> Lunghezza testo censurato: </b> <?php echo $censoredTextLength; ?> caratteri </p>
        
        </main>
        
    </body>
</html>