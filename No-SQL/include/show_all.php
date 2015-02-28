<?php
// show_all.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Fri Jan  9 16:15:17 2015 PAOLINI Tom
// Last update Fri Jan  9 16:15:23 2015 PAOLINI Tom
//

function show_all()
{
	system('clear');
	global $collection;
	$cursor = $collection->find();
	$cursor->sort(array('Login' => 1));
	foreach ($cursor as $document) {
      echo "Login: ".$document["Login"]."   Nom: ".$document["Nom"]
      ."   Promo: ".$document["Promo"]."   Email: ".$document["Email"]
      ."   Téléphone: ".$document["Telephone"]."\n";
   }
echo "\n";
}