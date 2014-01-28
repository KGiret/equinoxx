<div id="left_column_{$page}" class="left_column">
	{if $page == 'accueil' || $page =='recrutement' || $page =='roster'}
		<div id="recrutement">
			<h2> Recrutement </h2>
			<div id="class">
				<ul>
				{foreach from=$allClasse item=classe}
					<li class="classe{$classe.classe_id}">
						{$classe.classe_nom}
					</li>
				{/foreach}
				</ul>
			</div>
			<div id="spe">
				<ul>
					{foreach from=$allSpe item=spe}
						<li id="spe{$spe.spe_id}">
							<img src="web/img/recrut/{$spe.spe_nom}{$spe.spe_id}.jpg" alt="{$spe.spe_nom}" {if $spe.spe_etat == 0}class="no_recrut"{/if}/>			
						</li>
					{/foreach}
				</ul>
			</div>
		</div>
		<a href="?page=recrutement" class="recrut_lien" id="recrut_lien1">Voir détails</a>
		<a href="http://equinoxx.forumpro.fr/f3-candidature" id="recrut_lien2" class="recrut_lien" target="blank">Apply</a>
		{if $page == 'accueil'}		
			<div id="twolastvideo">
				<h2> Dernières vidéos </h2>
				<ul>
					{foreach from=$twoLastVideo item=video}
						{if $video.video_lien != 'vide'}
							<li>
								<iframe width="240" height="160" src="http://www.youtube.com/embed/{$video.video_lien}?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
							</li>
						{/if}
					{/foreach}
				</ul>
			</div>
			<a href="http://www.youtube.com/channel/UCSJrBDvG3Oksw50WIFUIM4A?feature=watch" id="youtube_link" target="blank"></a>
		{/if}
	{else if $page == 'media' || $page == 'archives'}
		<div id="{if $page == 'media'}screenshot{else if $page == 'archives'}tiers{/if}">
			<h2> {if $page == 'media'}Screenshots{else if $page == 'archives'}Tiers{/if}</h2>
				<ul>
					{foreach from=$allTiers item=tier}
						<li id="tier{$tier.tier_id}">
							{if $page == 'media'}
								<a href="?page=media&media=screen&tier={$tier.tier_numero}">{$tier.tier_nom}</a>
								{else if $page == 'archives'}
									{if $tier.tier_etat != '1'}
										<a href="?page=archives&tier={$tier.tier_numero}">{$tier.tier_nom}</a>
									{/if}
							{/if}
						</li>
					{/foreach}
				</ul>
		</div>
		{if $page == 'media'}
			<div id="video">
			<h2> Vidéos </h2>
				<ul>
					{foreach from=$allTiers item=tier}
						<li id="tier{$tier.tier_id}">
							<a href="?page=media&media=video&tier={$tier.tier_numero}">{$tier.tier_nom}</a>
						</li>
					{/foreach}
				</ul>
			</div>
		{/if}
	{/if}
</div>
		<div id="center_column">
		
	