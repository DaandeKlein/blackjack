<?php
    session_start();
    include "functions.php";

    if(isset($_SESSION['playertotal']))
    {
        $playertotal = $_SESSION['playertotal'];
    }
    else
    {
        $_SESSION['playertotal'] = 0;
        $playertotal = 0;  
    }

    if(isset($_POST['draw']))
    {

        createdeck();
        shuffledeck();
        drawCardplayer();
        $_SESSION['playertotal'] = $playertotal;
        echocardvalue();
        checkCardValue();
        
    }

    if(isset($_POST['unset']))
    {     
        unset($_SESSION['playertotal']);
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="draw.php" method="post">
            <button type="submit" name="draw">draw</button>
            <button type="submit" name="unset">unset</button>
        </form>
    </body>
    </html>