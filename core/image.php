<?php

class Image
{
	public function createDiapoImage($chemin, $nom, $dossier)
	{	
		$width = 892;
		$height = 350;
		$src = imagecreatefromjpeg($chemin);
		$size = getimagesize($chemin);
		
		$img = imagecreatetruecolor($width, $height);
		imagecopyresampled($img, $src, 0, 0, 0, 0, $width, $height, $size[0], $size[1]);
		
		$diapoImg = "diapo_$nom";
		echo $diapoImg;
		ImageJpeg($img, $dossier.'/'.$diapoImg);
	}
}




?>