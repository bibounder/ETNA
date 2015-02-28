<?php
// recupimg.php for  in /home/diman/ImagePanel/diman_i/ImagePanel/include
// 
// Made by Diman Ioan-Adrian
// Login   <diman_i@etna-alternance.net>
// 
// Started on  Thu Oct 30 09:20:47 2014 Diman Ioan-Adrian
// Last update Thu Oct 30 17:43:53 2014 PAOLINI Tom
//
function recupimg($url)
{
  mkdir ("./imgdir");
  $content = @file_get_contents($url);
  if (preg_match_all('#<img[^>]*>#', $content, $matches))
    {
      //      print_r($matches);                                                                                                                                                                          
      for ($i = 0; isset($matches[0][$i])  ; $i++)
        {
          if (preg_match_all('#http:\/\/[^"]+#', $matches[0][$i], $img))
            {
              if (preg_match_all("(gif|jpg|jpeg|png)", $img[0][0], $ext))
                {
                  if ($ext[0][0] == 'jpg')
                    $ext[0][0] = 'jpeg';
                  // print_r ($img[0][0]."\n");                                                                                                                                                           
                  $imagecreate = "imagecreatefrom" . $ext[0][0];
                  $imagesave = "image" . $ext[0][0];

                  $new = $imagecreate($img[0][0]);
                  if ($ext[0][0] == 'jpeg')
                    $ext[0][0] = 'jpg';
                  $imagesave ($new, "./imgdir/$i.{$ext[0][0]}");
                  @imagedestroy($new);
                }
            }
        }
    }
  else if (preg_match_all('#http:\/\/[^"]+#', $url, $img))
    if (preg_match_all("(gif|jpg|jpeg|png)", $img[0][0], $ext))
      {
	if ($ext[0][0] == 'jpg')
	$ext[0][0] = 'jpeg';
	   // print_r ($img[0][0]."\n");                                                                                                                                                                                                                               
      $imagecreate = "imagecreatefrom" . $ext[0][0];
      $imagesave = "image" . $ext[0][0];
      
      $new = $imagecreate($img[0][0]);
      if ($ext[0][0] == 'jpeg')
	$ext[0][0] = 'jpg';
      $imagesave ($new, "./imgdir/$i.{$ext[0][0]}");
      @imagedestroy($new);
      
    }
}