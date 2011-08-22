

<?php if( ! empty($pages)) :?>

	<ul class="sortable-container mr20" id="rssPageList">
	
		<?php foreach($pages as $page) :?>
			
			<?php
				$title = ( ! empty($page['title'])) ? $page['title'] : $page['name'] ;
			?>
			
			<li class="sortme">
		
				<a class="left link-img page" ></a>
		
				<!-- Unlink icon -->
				<a class="icon unlink right" rel="<?= $page['id_page'] ?>"></a>
		
				<!-- Title -->
				<a id="link_title" style="overflow:hidden;height:16px;display:block;" class="pl5 pr10" title="<?= $title ?>"><?= $title ?></a>
		
			</li>
		
		<?php endforeach ;?>
	
	</ul>

<?php endif ;?>

<script type="text/javascript">

	/**
	 * Unlink event on each page
	 */
	$$('#rssPageList li .unlink').each(function(item)
	{
		ION.initRequestEvent(item, '<?= base_url() ?>admin/module/rss/rss/remove_page', {'id_page': item.getProperty('rel')});
	});

</script>

