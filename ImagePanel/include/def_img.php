<?php
// def_img.php for  in /home/diman/ImagePanel/diman_i/ImagePanel/include
// 
// Made by Diman Ioan-Adrian
// Login   <diman_i@etna-alternance.net>
// 
// Started on  Thu Oct 30 09:22:15 2014 Diman Ioan-Adrian
// Last update Thu Oct 30 09:23:13 2014 Diman Ioan-Adrian
//
function def_img()
{
  mkdir ("./imgdir/newimg");
  ini_set('max_execution_time', 0);

  $ImgDir    = "./imgdir/";
  $DestImgDir    = "./imgdir/newimg/";
  $NewImgLarg      = 90;
  $NewImgHaut     = 90;
  $Quality        = 80;

  if($dir = opendir($ImgDir))
    {
      while(($file = readdir($dir))!== false)
        {
          $imgPath = $ImgDir.$file;
          $destPath = $DestImgDir.$file;
          $verifValidImage = @getimagesize($imgPath);

          if(file_exists($imgPath) && $verifValidImage)
            {
              if(resizeImage($imgPath,$destPath,$NewImgLarg,$NewImgHaut,$Quality))
                {
                  echo "- $file"." resize Success!\n";
                }
              else
                {
                  echo "- $file"." resize Failed!\n";
                }
            }
        }
      closedir($dir);
    }
}
