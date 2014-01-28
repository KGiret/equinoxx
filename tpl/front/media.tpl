	<h2 id="media_title">{$titre2}</h2>
		{if $type == 'screen'}
			<div id="media">
				{foreach from=$media item=screen}
					{if $screen.screen_nom != 'Pas de screenshot'}
						<a class="fancybox" rel="group" href="web/img/news/t{$tier}/{$screen.screen_nom}.jpg"><img class="media_screen" src="web/img/news/t{$tier}/{$screen.screen_nom}.jpg" title="{$screen.screen_nom}"/></a>
					{/if}
				{/foreach}
			</div>
		{else}
			<div id="media">
				{foreach from=$media item=video}
					{if $video.video_lien != 'vide'}
						<iframe width="315" height="195" class="media_video" src="http://www.youtube.com/embed/{$video.video_lien}?feature=player_detailpage" frameborder="0" allowfullscreen></iframe>
					{/if}
				{/foreach}
			</div>
		{/if}
