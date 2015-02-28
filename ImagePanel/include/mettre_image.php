<?php
// mettre_image.php for imagepanel in /home/diman/projectimage
//
// Made by Diman Ioan-Adrian
// Login   <diman_i@etna-alternance.net>
//
// Started on  Wed Oct 29 11:47:01 2014 Diman Ioan-Adrian
// Last update Fri Oct 31 11:14:04 2014 PAOLINI Tom
//

function	mettre_image()
{
  $dir = './imgdir/newimg/';
  $imgs = scandir($dir);
  //  print_r ($imgs);
  $x = 0;
  $y = 0;
  $image_blanche = imagecreatetruecolor(1000, 1000);
  $white = imagecolorallocate($image_blanche, 245, 245, 245);

  imagefilledrectangle($image_blanche, 0, 0, 1000, 1000, $white);
  foreach ($imgs as $key => $value)
    {
      if ($value != '.' && $value != '..')
	{
	  $data = file_get_contents($dir.$value);
	  $tab2 = imagecreatefromstring($data);
	  if ($x > 900)
	    {
	      $x = 0;
	      $y = $y + 95;
	    }
	  if ($y > 900)
	    {
	      $y = 0;
	      $x = $x + 95;
	    }
	  imagecopy($image_blanche, $tab2, $x, $y, 0, 0, imagesx($tab2), imagesy($tab2));
	  $x = $x + 95;
	}
    }    
  imagejpeg($image_blanche, "mosaic.jpeg");
      mosaic();
    
}