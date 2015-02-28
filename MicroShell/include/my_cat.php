<?php
// my_cat.php for  in /home/paolin_t/MicroShell/include
// 
// Made by PAOLINI Tom
// Login   <paolin_t@etna-alternance.net>
// 
// Started on  Fri Oct 17 18:32:13 2014 PAOLINI Tom
// Last update Fri Oct 17 19:32:29 2014 PAOLINI Tom
//
function my_cat()
{
  global $b;
  $argv = preg_split('/\s+/', rtrim($b));
  $argc = count($argv);
  $i = 1;
  while ($argc > $i)
    {
      if (!(file_exists($argv[$i])))
	{
	echo "cat: {$argv[$i]}: No such file or directory\n"; 
	}
      else if (is_dir($argv[$i]))
	{
	  echo "cat: {$argv[$i]}: Is a directory\n";
	}
      else if (!(is_readable($argv[$i])))
	{
	echo "cat: {$argv[$i]}: Permission denied\n";
	}
      else if ($open = fopen($argv[$i], "r"))
	{
	  echo fread($open, filesize($argv[$i]));
	  fclose($open);
	}
      else
	echo "cat: {$argv[$i]}: Cannot open file\n";
    $i++;
    }
}