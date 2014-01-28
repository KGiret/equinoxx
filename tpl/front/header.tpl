<!DOCTYPE html>
<html lang="fr">
<head>
        <title>EquinoXx - {$title}</title>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
		<meta name="description" content="Site officiel de la guilde PvE hl EquinoXx." />
		<link rel="stylesheet" type="text/css" href="web/css/style.css"/>
        <link rel="shortcut icon" href="web/img/favicon.ico" />
        <!-- On importe jQuery -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		{if $page == 'accueil'}
			<script type="text/javascript" src="web/js/infiniteCarousel/jquery.infinitecarousel.js"></script>
			{else if $page == 'media'}
				<link rel="stylesheet" href="web/js/fancyBox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
				<script type="text/javascript" src="web/js/fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		{/if}		
</script>
</head>
<body id="cms">
	<header>
		<a href="?page=accueil" id="home"></a>
		<ul id="top_menu">
			<li id="top1"><a href="http://www.wowprogress.com/guild/eu/archimonde/EquinoXx" target="blank">WoW Progress</a></li>
			<li id="top2"><a href="http://www.worldoflogs.com/guilds/213315/" target="blank">World of log</a></li>	
			<li id="top3"><a href="http://eu.battle.net/wow/fr/guild/archimonde/EquinoXx/" target="blank">Armurerie</a></li>
		</ul>
		
		<ul id="nav">
			<li id="nav1" {if $page=='accueil'}class="selected"{/if}><a href="?page=accueil">News</a></li>
			<li id="nav2"><a href="http://equinoxx.forumpro.fr/" target="blank">Forum</a></li>
			<li id="nav3" {if $page=='roster'}class="selected"{/if}><a href="?page=roster" >Roster</a></li>
			<li id="nav4" {if $page=='media'}class="selected"{/if}><a href="?page=media">Média</a></li>
			<li id="nav5"><a href="http://equinoxx.forumpro.fr/f3-candidature" target="blank">Apply</a></li>
			<li id="nav6" {if $page=='archives'}class="selected"{/if}><a href="?page=archives">Archives</a></li>
		</ul>
	</header>
	<div id="column">
	<h1 id="titre_{$page}">{$titre}</h1>
	{if isset($page) }
		{if $page=='accueil'}
			<script type="text/javascript">
				$(function(){
					$('#carousel').infiniteCarousel();
				});
			</script>
			
			<div id="carousel">
				<ul>
					{foreach from=$fiveImages item=image}
						{if $image.screen_nom != 'Pas de screenshot'}
							<li>
								<img src="web/img/news/t{$image.tier_numero}/{$image.screen_nom}.jpg" width="892" height="350"/>
							</li>
						{/if}
					{/foreach}
				</ul>
			</div>
			{elseif $page != 'accueil' && $page != 'mentions'}
				<img src="web/img/{$page}.jpg" id="page_img" />
		{/if}
		{if $page == 'media'}
			<script type="text/javascript">
				$(document).ready(function() {
					$(".fancybox").fancybox();
				});
			</script>
		{/if}
		
		
	{/if}	