<?

// Testing the deck class
// Gets all card IDs and then displays all the info related


// Use deck class
require_once('deck.php');

// Create deck - this also shuffles
$myDeck=new Deck();

// Shuffle again (not required because its already done but i'm just showing function call)
$myDeck->shuffleDeck();

// Get all card IDs
$allCards=$myDeck->getIDS();

// Loop thru and extract info on cards
$counter=1;
foreach($allCards as $id){
	$cardName=$myDeck->getCardNameByID($id);
	$cardSuitName=$myDeck->getSuitNameByID($id);
	$cardRankName=$myDeck->getRankNameByID($id);
	print("$counter. [<a href='test-deck-image.php?id=$id'>id=$id</a>] [suit=$cardSuitName] [rank=$cardRankName] <b>$cardName</b><BR><img alt='$cardName' width=72 height=96 src='test-deck-image.php?id=$id'><hr>\n");
	$counter++;
}

?>
