<?php
// my_cd.php for  in /home/paolin_t/MicroShell/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Sat Oct 18 09:24:01 2014 PAOLINI Tom
// Last update Sat Oct 18 11:32:12 2014 PAOLINI Tom
//
function my_cd($a)
{
  if (isset($a[1]))
    {
      if ($a[1] == '-')
	$a[1] = '..';      
      if (!(file_exists($a[1])))
	{
	  echo "cd: {$a[1]}: No such file or directory\n";
	}
      else if (is_file($a[1]))
	{
	  echo "cd: {$a[1]}: Not a directory\n";
	}
      else if (!(is_readable($a[1])))
	{
	  echo "cd: {$a[1]}: Permission denied\n";
	}
      else	     
	chdir($a[1]);
    }
  else
    chdir("/home");
}