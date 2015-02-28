<?php
// manuel.php for  in /home/diman/TestImagePanel/include
//
// Made by Diman Ioan-Adrian
// Login   <diman_i@etna-alternance.net>
//
// Started on  Mon Oct 27 10:18:34 2014 Diman Ioan-Adrian
// Last update Thu Oct 30 08:50:02 2014 Diman Ioan-Adrian
//
function man($param)
{
  if ($param == "erreur")
    echo "\nVous n'avez pas mis assez d'arguments !\nConsultez l'aide en tapant \"./imagepanel.php man\"\n\n";
  else if ($param == "man")
    {
      echo "\n\n";
      echo "./imagepanel [-gjpnNsl] lien(s)_de_page(s)_html [nom(s)_image(s)]\n";
      echo "\n\n";
      echo "\n\n";
      echo "OPTIONS :\n\n";
      echo "    -g : Les images générées seront en GIF.\n\n";
      echo "    -j : Les images générées seront en JPEG.\n\n";
      echo "    -l : Décide le nombre d'images prit en compte dans la page web.\n\n";
      echo "    -n : Affiche sous les images le nom sans l'extension.\n\n";
      echo "    -N : Affiche sous les images le nom avec l'extension\n\n";
      echo "    -p : Les images générées seront en PNG.\n\n";
      echo "    -s : Trie les images par ordre alphabétique\n\n";
    }
  else if ($param == "lien_faux")
    echo "\nUn des liens rentrés n'est pas valide\n\n";
  else
    echo "\nLe programme n'a pas comprit votre demande consultez le manuel en tapant \"./imagepanel.php man\"\n\n";
  return (0);
}