<?php
# Postiion  0       1          2
$moves = ['rock', 'paper', 'scissors']; # Ann array of strings

# Postiion       0  1  2  3  4  5
$strawLengths = [2, 2, 2, 2, 2, 1];

$mixed = ['rock', 1, .04, true];

#echo $moves[0]; # "rock'

#echo $moves[1];

#echo $moves[2];

#echo $moves[3]; #Notice: going outside bounds of range Undefined offset:3

#var_dump($moves);


#rand($min, $max);

#$randomNumber = rand(0, 2);

#var_dump($randomNumber);

#$move = $moves[$randomNumber];

#var_dump($move);

# Associative arrays

# $penny_value = .01;
# $nickel_value = .05;
# $dime_value = .10;
# $quarter_value = .25;

// $coin_values = [
//     'penny' => .01,
//     'nickle' => .05,
//     'dime' => .10,
//     'quarter' => .25
// ];


# $pennies = 100;
# $nickels = 25;
# $dimes = 100;
# $quarters = 24;

// $coin_counts = [
//     'penny' => 100,
//     'nickle' => 25,
//     'dime' => 100,
//     'quarter' => 34,
// ];

#Multi-dimensional array

// $coins = [
//     'penny' => [100, .01],
//     'nickel' => [25, .05],
//     'dime' => [100, .10],
//     'quarter' => [34, .25],
//     'halfDollar' => [10, .50]
// ];

#ALTERNATIVELY

$coins = [
    'penny' => [
        'count' => 100, 
        'value' => .01
    ],
    'nickel' => [
        'count' => 25, 
        'value' => .05
    ],
    'dime' => [
        'count' => 100, 
        'value' => .10
    ],
    'quarter' => ['
        count' => 34, 
        'value' => .25
    ],
    'halfDollar' => [
        'count' => 10, 
        'value' => .50
    ]
];

# var_dump($coin_values['quarter']); # .25

#asort($coin_counts); #sort array in ascending value order

#arsort($coin_counts); #sort array in reverse value order

#ksort($coin_counts); #sort array alphabetically

#krsort($coin_counts); #sort array  alphabetically in reverse

#var_dump($coin_counts);

#$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9];

#shuffle($cards);

#var_dump($cards);

#foreach($coin_counts as $coin => $count) {
#    var_dump($coin);
#   var_dump($count);
#}

// $total = 0;

// foreach($coin_counts as $coin => $count) {
//     $total = $total + ($count * $coin_values[$coin]);
// }

// foreach ($coins as $coin => $info) {
//     $total = $total + ($info['count'] * $info['value']);
// }

// var_dump($total);


// $cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14];
// shuffle($cards);
// $playerCards = array_splice($cards, 0, 5); #static

// $playerCards = array_splice($cards, 0, count($cards) / 2); #dynamic as cards increase
// var_dump($playerCards);

// $computerCards = $cards;


// var_dump($playCards);
// var_dump($cards);

//Play draw cards alternatively

// $playerDraw = $playerCards[4]; #hardcoding

// $playerDraw = $playerCards[count($playerCards) -1]; #count makes it more dynamic

// #Second technique to draw cards that take away from player's cards

// $playerDraw = array_pop($playerCards); #array_pop gives last element in array

// var_dump($playerCards);
// var_dump($playerDraw);

// #Date function example
// var_dump(date('F j Y'));

#Change string cases
// var_dump(strtolower('abDDDDD'));
// var_dump(strtoupper('abDDDDD'));

#Generate a random number within a range

// var_dump(rand());
// var_dump(rand(0,10));

#CONTROLLED STRUCTURES: CONDITIONALS 

$coin = ['heads', 'tails'];

#Player's choice
// $randomNumber = rand(0, 1);
// $player1Choice = $coin[$randomNumber];

// var_dump($player1Choice);

#Actual coin flip
// $randomNumber = rand(0, 1);
// $flip = $coin[$randomNumber];

#Basic boolean expressions

//var_dump(4 > 5); #False
//var_dump(6 . 5); #True
//var_dump(6 == 6); #True, "==" comparison, not assignment

// if($player1Choice == $flip) {
//     // var_dump('Player 1 wins!');
// } else {
//     // var_dump('Player 1 lost :(');
// }

// $moves = ['rock', 'paper', 'scissors']; # Ann array of strings
// $player1Move = $moves[rand(0, 2)];
// $player2Move = $moves[rand(0,2)];

// var_dump($player1Move);
// var_dump($player2Move);

// if ($player1Move == $player2Move) {
//     var_dump('Tie');
// } elseif($player1Move == 'rock' and $player2Move == 'paper') {
//     var_dump('Player 2 wins');
// } elseif($player1Move == 'rock' and $player2Move == 'scissors') {
//     var_dump('Player 1 wins');
// } 


#LOOPS

#simple loop: made for working with arrays

// $numbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// foreach ($numbers as $key => $number) {
//     var_dump($number);
// }

#Basic for loop used for a set number (upper limit i.e. 1 - 10)

#i = iterator

// for ($i = 0; $i <= 10; $i++) {
//     var_dump($i);
// }

#While loop used when you don't know how many times it has to happen


// while ($i < 10) {
//     var_dump($i);
//     $i++;
// }

#WHILE LOOP GUESSING GAME EXAMPLE

$answer = 5;
$guess = null;

while ($guess != $answer) {
    $guess = rand(0, 10);
    var_dump('Guess: ' . $guess);
}