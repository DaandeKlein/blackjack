<?php

    $suits = array('C-', 'D-', 'H-', 'S-');
    $cards = array('A', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K');

    $deck = array();
    
    foreach($suits as $suit) 
    {
        foreach($cards as $card) 
        {
            $deck[] = $suit . $card;
        }
    }
    
    shuffle($deck);
    shuffle($deck);


    // foreach($deck as $deckcard)
    // {
    //     echo $deckcard . "<br />";
    // }

    // echo "<br /> öof <br />";


    $firstCard = $deck[0];
    array_splice($deck, 0, 1);
    echo $firstCard . "<br /><br />";

    $kaartinfo = explode("-", $firstCard);
    $typeCard = $kaartinfo[0];
    $valueCard = $kaartinfo[1];
    
    $totaal = [];


    switch($typeCard)
    {
        case 'C':
            echo "dit is een klaveren";
            break;
        case 'D':
            echo "dit is een ruiten";
            break;
        case 'H':
            echo "dit is een harten";
            break;
        case 'S':
            echo "dit is een schoppen";
            break;
    }

    ?>
        <br />
    <?php

    switch($valueCard)
    {
        case 'A':
            echo "Dit heeft een waarde van 1 of 11";
            array_push($totaal, 11);
            break;
        case '2':
            echo "Dit heeft een waarde van 2";
            array_push($totaal, 2); 
            break;
        case '3':
            echo "Dit heeft een waarde van 3";
            array_push($totaal, 3); 
            break;
        case '4':
            echo "Dit heeft een waarde van 4";
            array_push($totaal, 4);
            break;
        case '5':
            echo "Dit heeft een waarde van 5";
            array_push($totaal, 5);
            break;
        case '6':
            echo "Dit heeft een waarde van 6";
            array_push($totaal, 6);
            break;
        case '7':
            echo "Dit heeft een waarde van 7";
            array_push($totaal, 7);
            break;
        case '8':
            echo "Dit heeft een waarde van 8";
            array_push($totaal, 8); 
            break;
        case '9':
            echo "Dit heeft een waarde van 9";
            array_push($totaal, 9);
            break;
        case '10';
        case 'J';
        case 'Q';
        case 'K';
            echo "Dit heeft een waarde van 10";
            array_push($totaal, 10);
            break;
    }

    ?>
        <br />
    <?php


    print($totaal[0]);
    

    

?>