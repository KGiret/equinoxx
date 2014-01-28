<ul id="old_news">
			{foreach from=$allArticles item=article name=new}
			<li {if $smarty.foreach.new.last} id="last"{/if}>
				<h2>{$article.article_titre}</h2>
				<p class="date_video">{$article.article_date} - {if $article.video_lien != 'vide'}<a href="http://www.youtube.com/watch?v={$article.video_lien}" target="blank">Vidéo ici</a>{else}Pas de vidéo{/if}</p>
				<div class="contenu">{$article.article_contenu}</div>
				{if $article.screen_nom != 'Pas de screenshot'}
					<img src="web/img/news/t{$article.tier_numero}/{$article.screen_nom}.jpg"/>
					{else}
						<p class="screenSoon">Pas de screenshot !</p>
				{/if}	
			</li>
			{/foreach}
			
			</ul>