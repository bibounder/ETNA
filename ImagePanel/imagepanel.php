#!/usr/bin/env php
<?php
// imagetests.php for  in /home/diman
// 
// Made by Diman Ioan-Adrian
// Login   <diman_i@etna-alternance.net>
// 
// Started on  Tue Oct 28 09:02:48 2014 Diman Ioan-Adrian
// Last update Fri Oct 31 09:47:44 2014 PAOLINI Tom
//
require_once ("./include/resizeimage.php");
require_once ("./include/mettre_image.php");
require_once ("./include/manuel.php");
require_once ("./include/verif_url.php");
require_once ("./include/recupimg.php");
require_once ("./include/def_img.php");
require_once ("./include/mosaic.php");

if ($argc == 1)
  {
    man("erreur");
    exit();
  }
else if ($argv[1] == "man")
  man("man");
else if ($argc <= 2 && verif_url($argv[1]) === false)
  {
    man("lien_faux");
    exit();
  }

unset($argv[0]);
foreach ($argv as $url)
  {
    @recupimg($url);
  }

@def_img();
@resizeImage($SrcImage, $DestImage, $MaxLarg, $MaxHaut, $Quality);
@mettre_image();
?>