<?

// Testing the deck class
// Takes card ID from query string and sends binary image data to browser/client
// If no query string then it displays some useful links


// Use deck class
require_once('deck.php');

// Get card ID from query string
$cardID=$_GET['id'];

if(strlen($cardID)!=0){

	// Create new deck and shuffle
	$myDeck=new Deck();

	// Send card image to browser/client
	$myDeck->sendCardImageToClientByID($cardID);

} else {
	print("You need to supply a card ID!<br>");
	print("Test this script via <a href='test-deck-view.php'>test-deck-view.php</a> or <a href='test-deck-randomcard.php'>test-deck-randomcard.php</a><BR>");
	print("OR append '<a href='?id=a-s'>?id=a-s</a>' to this URL to display the Ace of Spades for example.");

}

?>
