<?php
if (!empty($_POST['connec'])) //si le formualire est validé
{  
	if($login = $_POST['login'] )//si le login est entré
	{
		if(Validate::isName($login))//et syntaxiquement valide
		{
			if($password = $_POST['password'] )//si le password est entré
			{
				if(Validate::isPasswd($password, 8))//et syntaxiquement valide
				{
					$login_save = $login; //on garde le login de côté
					$login = MD5($login);// hash le login
					$password = MD5($password);//hash le mdp
					
					if($login == $admin_login)//si le login est égal au login admin (dans /config/config_init)
					{
						$smarty->assign('login', $login_save);// on passe le login au template pour ne plus le rentré si le fomulaire n'est pas valide
						if($password == $admin_password)//si le mdp est égal au mdp admin (dans /config/config_init)
						{
							$_SESSION['account'] = 'officier';
							header('Location: /KevinGiret-Rendu/officier/'); 
						}
						//Gestion der erreurs
						else
						{
							$error = 'Mot de passe invalide';
						}
					}
					else
					{
						$error = 'Identifiant invalide';
					}
				}
				else
				{
					$error = 'Mot de passe manquant ou invalide';
				}
			}
		}
		else
		{
			$error = 'Identifiant manquant ou invalide';
		}
	}	
}

if (!empty($error))
{
	$smarty->assign('error', $error);
}


?>