<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>

<div id="kt_slimbox2">
	<?php 
	foreach($slimboxImages as $key=>$image) {
		if ($key==0) {
			$text = JHTML::_('image', $folder.'/'.$small->file, $small->alt, array('width' => $small->width, 'height' => $small->height, 'class' => "init", 'title' => $small->title));
		} else {
			$text = JHTML::_('image', $folder.'/'.$small->file, $small->alt, array('style' => "display: none;", 'title' => $small->title));
		}
		echo JHTML::_('link', JURI::root(true).'/'.$folder.'/'.$image->file, $text, array('rel' => "lightbox-".$group, 'title' => $image->caption ));
	} ?>
	<p><?php echo $small->caption; ?></p>
</div>