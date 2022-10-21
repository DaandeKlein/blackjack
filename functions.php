<?php

global $dealer;
global $player;
global $deck;
global $nextCard;
global $playertotal;
global $aceChecker;
$aceChecker = array();
$dealer = 0;
$player = 0;

function createdeck()
{
    global $deck;
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
}
 
function shuffledeck()
{
    global $deck;
    shuffle($deck);
    shuffle($deck);
}

// function nextCard($deck)
// {
//     $nextCard = $deck[0];
//     array_splice($deck, 0, 1);
//     return [$nextCard, $deck];
// }

function drawCardplayer()
{
    global $nextCard;
    global $deck;
    global $aceChecker;
    $aceChecker = array();
    $nextCard = $deck[0];
    $aceChecker = $deck[0];
    array_splice($deck, 0, 1);
    echo $nextCard . "<br />";
    cardvalue();
}

function cardvalue()
{
    global $nextCard;
    global $playertotal;
    $kaartinfo = explode("-", $nextCard);
    // $typeCard = $kaartinfo[0];
    $valueCard = $kaartinfo[1];
    if ($valueCard == "A")
    {
        $playertotal += 1;
    }
    else if ($valueCard == 'J' or $valueCard == 'Q' or $valueCard == 'K')
    {
        $playertotal += 10;
    }
    else
    {
        $playertotal += intval($valueCard);
    }
    return $playertotal . "<br />";

}

function checkCardValue()
{
    global $playertotal;
    if ($playertotal > 21)
    {
        echo "you are over 21";
    }
    else if ($playertotal == 21)
    {
        echo "wow you have 21";
    }
    else
    {
        echo "you are below 21";
    }
}

function aceChecker()
{
    global $aceChecker;
    foreach($aceChecker as $card)
    {
        echo "$card";
    }
}

function echocardvalue()
{
    global $playertotal;
    echo $playertotal;
}

// createdeck();
// shuffledeck();
// drawCardplayer();
// drawCardplayer();
// drawCardplayer();
// echocardvalue();
// checkCardValue();

//     switch($typeCard)
//     {
//         case 'C':
//             echo "dit is een klaveren";
//             break;
//         case 'D':
//             echo "dit is een ruiten";
//             break;
//         case 'H':
//             echo "dit is een harten";
//             break;
//         case 'S':
//             echo "dit is een schoppen";
//             break;
//     }
