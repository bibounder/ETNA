<?php
// my_ls.php for  in /home/paolin_t/MicroShell/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Fri Oct 17 14:54:16 2014 PAOLINI Tom
// Last update Fri Oct 17 19:33:54 2014 PAOLINI Tom
//
function my_ls($b)
{
  $arg = preg_split('/\s+/', $b);
  $dir = $arg[1];
  
  if (is_dir($dir)) 
    {
      if ($dh = opendir($dir))
	{
	  while (($file = readdir($dh)) !== false) 
	    {
	      if ($file[0] != '.')
		echo "$file". "\n";
	    }
	  closedir($dh);
	}
    }
  else if (!(is_dir($dir)))
    {
      $cmd = explode(" ", $b)[0];
      $file = explode(" ", rtrim($b))[1];
      echo ("$cmd: $file:  Not a directory\n");  
    }
}
?>