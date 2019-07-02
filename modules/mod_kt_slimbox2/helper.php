<?php
/**
* @version		$Id: helper.php 10043 2008-02-16 21:50:49Z ian $
* @package		Joomla
* @copyright	Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
* @license		GNU/GPL, see LICENSE.php
* Joomla! is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See COPYRIGHT.php for copyright notices and details.
*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );


class modKtSlimbox2Helper
{
	function getSmallImage (&$params, $folder) {
		
		$image = new stdClass();
		
		$file = $params->get('smallFile');
		$width = $params->get('smallWidth');
		$height = $params->get('smallHeight');
		
		$size = getimagesize (JPATH_BASE.DS.$folder .DS. $file);

		if ($width == '') {
			$width = 100;
		}

		if ($size[0] < $width) {
			$width = $size[0];  
		}

		$coeff = $size[0]/$size[1];
		if ($height == '') {
			$height = (int) ($width/$coeff);
		} else {
			$newheight = min ($height, (int) ($width/$coeff));
			if ($newheight < $height) {
				$height = $newheight;
			} else {
				$width = $height * $coeff;
			}
		}

		$image->width = $width;
		$image->height = $height;
		$image->file = $file;
		$image->caption = $params->get('smallCaption');
		$image->alt = $params->get('smallAlt');
		$image->title = $params->get('smallTitle');
		$image->folder = str_replace( '\\', '/', $folder );

		return $image;
	}
	
	function getSlimboxImages (&$params, $folder) {
		$imageArray = explode("\n", $params->get('images'));
		$captionArray = explode("\n", $params->get('captions'));
		
		$slimboxImageArray = array();
		foreach($imageArray as $key=>$value) {
			$slimboxImageArray[$key]->file = $value;
		}
		
		foreach($captionArray as $key=>$value) {
			$slimboxImageArray[$key]->caption = $value;
		}
		
		return $slimboxImageArray;
	}

	function getFolder(&$params)
	{
		$folder = $params->get('folder');

		$LiveSite = JURI::base();

		// if folder includes livesite info, remove
		if ( JString::strpos($folder, $LiveSite) === 0 ) {
			$folder = str_replace( $LiveSite, '', $folder );
		}
		// if folder includes absolute path, remove
		if ( JString::strpos($folder, JPATH_SITE) === 0 ) {
			$folder = str_replace( JPATH_BASE, '', $folder );
		}
		$folder = str_replace('\\',DS,$folder);
		$folder = str_replace('/',DS,$folder);

		return $folder;
	}

	function getGroup(&$params) {
		$group = $params->get('group');
		
		if (!count($group)) {
			$group = 'kt';
		}
		return $group;
	}
}

