<?php
// echo.php for  in /home/paolin_t/MicroShell/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Fri Oct 17 14:29:54 2014 PAOLINI Tom
// Last update Fri Oct 17 19:31:06 2014 PAOLINI Tom
//
function my_echo($saisie)
{
  if (isset($saisie[1]))
    {
      for ($i = 1; isset($saisie[$i]); $i++)
	{
	  if (isset($saisie[$i + 1]))
	    echo $saisie[$i]." ";
	  else
	    echo $saisie[$i]. "\n"; 
	}
    }
  else
    echo "\n";
}
?>