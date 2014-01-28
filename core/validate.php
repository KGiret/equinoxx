<?php
//Cette classe permet de comparer les champ de formulaire à des expressions régulières

class Validate
{
	static public function isMd5($md5)
	{
		return preg_match('/^[a-z0-9]{32}$/ui', $md5);
	}
	
	static public function isName($name)
	{
		return preg_match('/^[^0-9!<>,;?=+()@#"°{}_$%:]*$/ui', stripslashes($name));
	}
	
	static public function isPasswd($passwd, $size)
	{
		return preg_match('/^[.a-z_0-9-!@#$%\^&*()]{'.$size.',32}$/ui', $passwd);
	}
	
	static public function isYoutubeLink($link)
	{
		return preg_match('/^http[s]?:\/\/www\.youtube\.com\/watch\?v=[a-zA-Z0-9_\-]{11}$/', $link);
	}
	
	static public function isVideoName($name)
	{
		return preg_match('/^[A-Za-z0-9\s\(\)\-]*$/', $name);
	}
	
	static public function isTierName($name)
	{
		return preg_match('/^[A-Za-z\s]*$/', $name);
	}
	
	static public function isTierNumero($numero)
	{
		return preg_match('/^[0-9]{2}$/', $numero);
	}
	
	static public function isScreenName($screen)
	{
		return preg_match('/^[A-Za-z0-9\-]*$/', $screen);
	}
	
	static public function isArticleTitre($titre)
	{
		return preg_match('/^[A-Za-z0-9\!\s]*$/', $titre);
	}
	
	static public function isContenuArticle($contenu)
	{
		return preg_match('/^[A-Za-z0-9\s\!\?]*$/', $contenu);
	}
}



?>