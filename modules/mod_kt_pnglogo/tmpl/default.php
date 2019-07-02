<?php // no direct access
defined('_JEXEC') or die('Restricted access');
?>
<span style="width:<?php echo $width; ?>px;height:<?php echo $height; ?>px;display:inline-block; filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='<?php echo $filename;?>')">
	<img style="filter:progid:DXImageTransform.Microsoft.Alpha(opacity=0);" src="<?php echo $filename; ?>" title="<?php echo $title; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>px" />
</span>
