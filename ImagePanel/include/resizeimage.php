<?php

function resizeImage($SrcImage, $DestImage, $MaxLarg, $MaxHaut, $Quality)
{
  list($iLarg,$iHaut,$type) = @getimagesize($SrcImage);
  $ImageScale = @min($MaxLarg/$iLarg, $MaxHaut/$iHaut);
  $NewLarg = @ceil($ImageScale*$iLarg);
  $NewHaut = @ceil($ImageScale*$iHaut);
  $NewCanves = @imagecreatetruecolor($NewLarg, $NewHaut);
  
  switch(strtolower(image_type_to_mime_type($type)))
    {
    case 'image/jpg':
    case 'image/jpeg':
      $NewImage = imagecreatefromjpeg($SrcImage);
      break;
    case 'image/gif':
      $NewImage = imagecreatefromgif($SrcImage);
      break;
    case 'image/png':
      $NewImage = imagecreatefrompng($SrcImage);
      break;
    default:
      return false;
    }
  if(imagecopyresampled($NewCanves, $NewImage,0, 0, 0, 0, $NewLarg, $NewHaut, $iLarg, $iHaut))
    {
      if(imagejpeg($NewCanves,$DestImage,$Quality))
        {
	  imagedestroy($NewCanves);
	  return true;
        }
    }
}
?>