<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * additional areas for the top and the bottom.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['top']: Content in the top row.
 *   - $content['left']: Content in the left column.
 *   - $content['right']: Content in the right column.
 *   - $content['bottom']: Content in the bottom row.
 */
?>
<div class="bootstrap panel-display clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

	<div class="row">
		<div class="col-sm-12"><?php print $content['title']; ?></div>
	</div>

	<div class="row">
		<div class="col-sm-9">
			<div class="conteudo">
				<?php print $content['content']; ?>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="sidebar">
				<?php print $content['sidebar']; ?>
			</div>
		</div>
	</div>
  
    	
	
</div>
