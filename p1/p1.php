<?php

# This is the controller


#Game logic will go here
*/
//Two players draw from their own deck of 40 cards (1-10) until cards run out
//Each player's card draw will be presented
//High cards wins
*/
#Card War Game between two players with a deck of cards each

for ($turn = 0; $turn <= 40; $turn++) {
    $cardDeck = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $player1Move = $cardDeck[rand(0, 9)];
    $player2Move = $cardDeck[rand(0, 9)];

    // var_dump($player1Move);
    // var_dump($player2Move);

    if ($player1Move > $player2Move) {
        // var_dump('Player 1 card:' . $player1Move);
        // var_dump('Player 2 card:' . $player2Move);
        // var_dump('Player 1 wins');
    } elseif ($player1Move < $player2Move) {
        // var_dump('Player 1 card:' . $player1Move);
        // var_dump('Player 2 card:' . $player2Move);
        // var_dump('Player 2 wins');
    } elseif ($player1Move == $player2Move) {
        // var_dump('Player 1 card:' . $player1Move);
        // var_dump('Player 2 card:' . $player2Move);
        // var_dump('TIE! No one wins.');
    }
}


// require 'p1-view.php';