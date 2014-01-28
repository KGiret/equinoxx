<!DOCTYPE html>
<html lang="fr">
	<head>
        <title>EquinoXx - Administration</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../web/css/admin.css"/>
        <link rel="shortcut icon" href="../web/img/favicon.ico" />
	</head>
	<body id="cms">
		<h1>EquinoXx</h1>
		<h2>Administration</h2>
		<div id="formulaire">
			{if isset($error) }
				<p id="form_error">*{$error}</p>
			{/if}
			<form method=post action="">
			<input type="text" name="login" required placeholder="Login" {if isset($login)}value={$login}{/if}>
			
			<input type="password" name="password" required placeholder="Password">
			
			<input type="submit" name="connec" value="Se connecter">
			</form>
		</div>
	</body>
</html>