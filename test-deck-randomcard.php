<?

// Testing the deck class
// Show a random card


// Use deck class
require_once('deck.php');

// Create deck - this also shuffles
$myDeck=new Deck();

// Get a random card ID show the info
$id=$myDeck->getRandomCardID();
$cardName=$myDeck->getCardNameByID($id);
$cardSuitName=$myDeck->getSuitNameByID($id);
$cardRankName=$myDeck->getRankNameByID($id);
print("[<a href='test-deck-image.php?id=$id'>id=$id</a>] [suit=$cardSuitName] [rank=$cardRankName] <b>$cardName</b><BR><img alt='$cardName' width=72 height=96 src='test-deck-image.php?id=$id'><hr>\n");

print("<a href='?".mt_rand(0,1000000)."'>Hit Me</a>");
?>
