<?php
// update_student.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Tue Jan  6 09:26:28 2015 PAOLINI Tom
// Last update Tue Jan  6 09:26:31 2015 PAOLINI Tom
//

function	update_student($login)
{
  global $collection;
  echo "Que voulez-vous modifier ? (nom, promo, email, telephone ou retour pour annuler): ";
  $a = rtrim(fgets(STDIN));
  if ($a == "nom")
    {
      echo "Veuillez renseigner le nouveau nom: ";
      $b = rtrim(fgets(STDIN));
      $collection->update(array("Login" => "$login"), array('$set' => array("Nom" => "$b")));
      echo "\e[32mLe nom de l'utilisateur $login à bien été modifié ! \e[0m\n";
    }
  else if ($a == "promo")
    {
      echo "Veuillez renseigner la nouvelle promotion: ";
      $b = rtrim(fgets(STDIN));
      $collection->update(array("Login" => "$login"), array('$set' => array("Promo" => "$b")));
      echo "\e[32mLa promotiom de l'utilisateur $login à bien été modifiée ! \e[0m\n";
    }
  else if ($a == "email")
    {
      echo "Veuillez renseigner la nouvelle adresse mail: ";
      $b = rtrim(fgets(STDIN));
      $collection->update(array("Login" => "$login"), array('$set' => array("Email" => "$b")));
      echo "\e[32mL'adresse mail de l'utilisateur $login à bien été modifiée ! \e[0m\n";
    }
  else if ($a == "telephone")
    {
      echo "Veuillez renseigner le nouveau numéro de téléphone: ";
      $b = rtrim(fgets(STDIN));
      $collection->update(array("Login" => "$login"), array('$set' => array("Telephone" => "$b")));
      echo "\e[32mLe numéro de téléphone de l'utilisateur $login à bien été modifiée ! \e[0m\n";
    }
  else if ($a == "retour"){
    system(clear);
    return (0); }
  else
    {
      echo "\e[31mLa donnée que vous voulez modifiée n'existe pas \e[0m\n";
      update_student($login);
    }
}