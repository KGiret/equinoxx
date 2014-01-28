<!DOCTYPE html>
<html lang="fr">
	<head>
        <title>EquinoXx - Administration</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<link rel="stylesheet" type="text/css" href="../web/css/admin.css"/>
        <link rel="shortcut icon" href="../web/img/favicon.ico" />
		{if $page == 'accueil' || $page == 'roster' || $page == 'recrutement'}
			{if $page == 'accueil' || $page == 'recrutement'}
				<script type="text/javascript" src="../web/js/tinymce/tinymce.min.js"></script>
				
				<script type="text/javascript">
					tinymce.init({
						selector: "textarea",
						width : 650,
						height : 200,
						resize : false,
						plugins: [
									"advlist lists charmap hr",
									"searchreplace wordcount code",
									"table emoticons template paste textcolor"],
						toolbar: "insertfile undo redo | styleselect | bold italic forecolor emoticons | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent "
		

					});
				</script>
			{/if}
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
			<script src="../web/js/jquery.chained.js" type="text/javascript" charset="utf-8"></script>
			<script type="text/javascript" charset="utf-8">
			$(function(){
				{if $page == 'accueil'}
					$("#screenId").chained("#articleNumeroTier");
					$("#videoId").chained("#articleNumeroTier");
					{else if $page == 'roster'}
						$("#idSpe").chained("#idClass");
				{/if}
			});
			</script>
		{/if}
	</head>

	<body id="cms">	
		<h1>EquinoXx</h1>
		<h2>Administration</h2>
		<ul id="nav">
		<li id="nav1"><a href="?page=accueil">News</a></li>
		<li id="nav2"><a href="?page=recrutement">Recrutement</a></li>
		<li id="nav3"><a href="?page=roster">Roster</a></li>
		<li id="nav4"><a href="?page=screenshots">Screenshots</a></li>
		<li id="nav5"><a href="?page=videos">Vidéos</a></li>
		<li id="nav6"><a href="?page=tiers">Tiers</a></li>
	</ul>


<div id="column">
{if isset($affirmation)}
	<div id="affirmation">
		{$affirmation}
	</div>
	{elseif isset($error)}
		<div id="error">
			{$error}
		</div>
{/if}



		