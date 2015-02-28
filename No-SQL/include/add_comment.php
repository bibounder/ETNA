<?php
// add_comment.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Fri Jan  9 16:16:17 2015 PAOLINI Tom
// Last update Fri Jan  9 16:16:23 2015 PAOLINI Tom
//

function	add_comment($login)
{
  system('clear');
  global $collection;
  $cursor = $collection->findOne(array("Login" => $login));
  $space = "                                   ";
  if (isset($cursor))
    {
      echo "Saisir le commentaire à ajouter :\n> ";
      $commentaire = rtrim(fgets(STDIN));
      while (($a = substr($commentaire, 0, 1)) != "\"") 
    	{
	  echo "\e[31mMerci de mettre votre commentaire entre guillemets (\"Votre commentaire\")\e[0m \n> ";
	  $commentaire = rtrim(fgets(STDIN));
    	}
      while (($b = substr($commentaire, strlen($commentaire) - 1)) != "\"") 
    	{
	  $commentaire = $commentaire . "\n";
	  echo "> ";
	  $commentaire = $commentaire . rtrim(fgets(STDIN));
    	}
      add_comment_in($collection, $login, $commentaire, $space);
      echo "\n\e[32mCommentaire ajouté avec succès !\e[0m\n";
    }
  else
    {
      echo "\e[31mCe login n'existe pas \e[0m\n";
      launcher();
    }
}

function add_comment_in($collection, $login, $commentaire, $space)
{
  date_default_timezone_set("Europe/Paris");
  setlocale(LC_TIME, 'fr_FR');
  $h = strftime('%A %d %B %Y');
  $commentaire = $h . ":\n" . $commentaire;
  $cursor = $collection->find(array("Login" => $login), array("Commentaire" => '$set'));
  foreach ($cursor as $document) 
    foreach ($document as $cle => $value) 
    {
      if ($cle == "Commentaire" && $value != "")
        $value = $value . "\n" . $commentaire . "\n\n". "------------------------------------------\n";
      else
        $value = $commentaire . "\n\n". "------------------------------------------\n";
	}
$collection->update(array("Login" => $login), array('$set' => array("Commentaire" => $value)));
}