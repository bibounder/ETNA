<?php
// verif_url.php for  in /home/diman/TestImagePanel/include
//
// Made by Diman Ioan-Adrian
// Login   <diman_i@etna-alternance.net>
//
// Started on  Mon Oct 27 10:20:58 2014 Diman Ioan-Adrian
// Last update Thu Oct 30 09:16:34 2014 Diman Ioan-Adrian
//
function verif_url($url)
{
  $site = $url;

  $file = @fopen($site, 'r');
  if ($file)
    {
      return (true);
    }
  else
    {
      return (false);
    }
}