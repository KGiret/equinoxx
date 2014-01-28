<div id="roster">
	<div id="tank">
		<img src="web/img/tank.png"/>
		<ul>
		{foreach from=$alltank item=tank}
			<li>
				<ul class="player_info">
					<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/{$tank.player_nom}/advanced" class="classe{$tank.classe_id}" target="blank">{$tank.player_nom}</a></h2></li>
					<li>Classe : {$tank.classe_nom}</li>
					<li>Spécialité : {$tank.spe_nom}</li>
					<li>Rang de guilde : {$tank.rang_nom}</li>
				</ul>
			</li>
			{/foreach}
		</ul>
	</div>
	
	<div id="heal">
		<img src="web/img/heal.png"/>
		<ul>
		{foreach from=$allheal item=heal}
			<li>
				<ul class="player_info">
					<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/{$heal.player_nom}/advanced" class="classe{$heal.classe_id}" target="blank">{$heal.player_nom}</a></h2></li>
					<li>Classe : {$heal.classe_nom}</li>
					<li>Spécialité : {$heal.spe_nom}</li>
					<li>Rang de guilde : {$heal.rang_nom}</li>
				</ul>
			</li>
			{/foreach}
		</ul>
	</div>
	
	<div id="dps">
		<img src="web/img/dps.png"/>
		<ul>
		{foreach from=$alldps item=dps}
			<li>
				<ul class="player_info">
					<li class="player_name"><h2><a href="http://eu.battle.net/wow/fr/character/archimonde/{$dps.player_nom}/advanced" class="classe{$dps.classe_id}" target="blank">{$dps.player_nom}</a></h2></li>
					<li>Classe : {$dps.classe_nom}</li>
					<li>Spécialité : {$dps.spe_nom}</li>
					<li>Rang de guilde : {$dps.rang_nom}</li>
				</ul>
			</li>
			{/foreach}
		</ul>
	</div>
</div>