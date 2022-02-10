<?php
enum Suit: string
{
    case Hearts = 'H';
    case Diamonds = 'D';
    case Clubs = 'C';
    case Spades = 'S';
}
?>

<?php
print Suit::Clubs->value;
// Prints "C"
?>
