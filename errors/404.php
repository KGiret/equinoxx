<!DOCTYPE html>
<html>
<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<meta http-equiv="Refresh" content="5;URL=/KevinGiret-Rendu"> <!-- Redirection au bout de 5 secondes sur l'acceuil -->
</head>
<body>
	La page demandée n'existe pas. Redirection dans <span id="timer_redirection">5</span> secondes.
	<script>
	jQuery(document).ready(function($)
	{
		function timer_redi()
		{
			var temps_restant = parseInt(jQuery('#timer_redirection').text());
			if(temps_restant != 0)
			{
				jQuery('#timer_redirection').text(temps_restant - 1);
			}
			else
			{
				window.location.href="/KevinGiret-Rendu";
			}
		}
		setInterval(function(){timer_redi()}, 1000);
	});
	</script>
</body>
</html>