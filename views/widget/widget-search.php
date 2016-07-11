<?php $view->style('search', 'search:assets/css/search.css') ?>
<?php $view->script('autocomplete', 'app/assets/uikit/js/components/autocomplete.min.js', 'js') ?>
<?php $view->script('search', 'app/assets/uikit/js/components/search.min.js', 'js') ?>
<div 
<?php if ($css_enabled) : ?>
class="tm-search uk-hidden-small"
<?php endif ?>
>
<form id="search-<?php echo $widget->id; ?>" class="uk-search" action="<?= $view->url('@search/submit') ?>" method="post" role="search" <?php if($widget->position !== 'offcanvas'):?>data-uk-search="{'source': '<?= $view->url('@search/site')?>?tmpl=raw&type=json&itemid=<?php echo $widget->id; ?>&ordering=&searchphrase=all&searchword=', 'param': 'searchword', 'msgResultsHeader': '<?php echo __('Search Results'); ?>', 'msgMoreResults': '<?php echo __('More Results'); ?>', 'msgNoResults': '<?php echo __('No results found'); ?>', 'minLength': '<?php  echo $triggering_chars; ?>',flipDropdown: 1}"<?php endif;?>>
	<input class="uk-search-field" type="search" name="search[searchword]" placeholder="<?php echo __('search...'); ?>">
	<input type="hidden" name="search[task]"   value="searchwidget">

	<?php $view->token()->get() ?>
</form>
</div>