<?php
    session_start();
    include "functions.php";
    createdeck();

    if(isset($_SESSION['playertotal']))
    {
        $playertotal = $_SESSION['playertotal'];
        if(isset($_SESSION['aceChecker']))
        {
            $aceChecker = $_SESSION['aceChecker'];
        }
        else
        {
            $aceChecker = [];
        }
        //array_push($aceChecker, $_SESSION['aceChecker']);
    }
    else
    {
        $_SESSION['playertotal'] = 0;
        $playertotal = 0;  
    }

    if(isset($_POST['draw']))
    {
        shuffledeck();
        drawCardplayer();
        $_SESSION['playertotal'] = $playertotal;
        echocardvalue();
        aceChecker();
        $_SESSION['aceChecker'] = $aceChecker;
        checkCardValue();
    }

    if(isset($_POST['unset']))
    {     
        unset($_SESSION['playertotal']);
        unset($_SESSION['aceChecker']);
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