<div id="sidebars" class="clear">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sidebar") ) : ?>
	<? else: ?>
	<?php endif; ?>

	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Second Sidebar") ) : ?>
	<?php endif; ?>
</div>