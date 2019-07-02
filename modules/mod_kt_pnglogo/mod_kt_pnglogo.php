<?php
/**
* @version		$Id: mod_footer.php 10079 2008-02-28 13:39:08Z ircmaxell $
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
defined('_JEXEC') or die('Restricted access');

global $mainframe;

$csite_name	= $mainframe->getCfg('sitename');

$filename = $params->get('filename');
$width = $params->get('width');
$height = $params->get('height');

$title = $params->get('title');
$alt = $params->get('alt');

if (!strlen($title)) {
	$title=$csite_name;
}

if (!strlen($alt)) {
	$alt=$csite_name . ' Logo';
}

require(JModuleHelper::getLayoutPath('mod_kt_pnglogo'));
