<?php
// bienvenue.php for  in /Users/paolin_t/Documents/NoSQL/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Tue Jan  6 09:25:58 2015 PAOLINI Tom
// Last update Fri Jan  9 16:10:10 2015 PAOLINI Tom
//

function	bienvenue()
{
  system('clear');
  echo "\n Bonjour, voici les commandes qui permettent de réaliser des actions dans la base de donnée Mongo \n";
  echo "\e[31m(attention certaines ces commandes prennent en paramètre le login de l'étudiant)\e[0m\n\n";
  echo "> add_student \e[1mlogin_de_l'étudiant\e[0m\n";
  echo "> del_student \e[1mlogin_de_l'étudiant\e[0m\n";
  echo "> update_student \e[1mlogin_de_l'étudiant\e[0m\n";
  echo "> show_student (login facultatif)\n";
  echo "> show_all \n";
  echo "> delete_all (supprime tous les utilisateurs de la base)\n";
  echo "> add_comment \e[1mlogin_de_l'étudiant \e[0m\n";
  echo "> \e[1mquit pour quitter le programme \e[0m\n\n";
  echo "Veuillez saisir une commande : ";
}
