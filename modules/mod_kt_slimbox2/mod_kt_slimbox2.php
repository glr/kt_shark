<?php
/**
* @version		$Id: mod_random_image.php 9764 2007-12-30 07:48:11Z ircmaxell $
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

// Include the syndicate functions only once
require_once (dirname(__FILE__).DS.'helper.php');

$group = modKtSlimbox2Helper::getGroup($params);
$folder	= modKtSlimbox2Helper::getFolder($params);

$small = modKtSlimbox2Helper::getSmallImage($params, $folder);

if (!count($small)) {
	echo JText::_( 'No small image ');
	return;
}

$slimboxImages = modKtSlimbox2Helper::getSlimboxImages($params, $folder);
if (!count($slimboxImages)) {
	echo JText::_( 'No slimbox images ');
	return;
}

require(JModuleHelper::getLayoutPath('mod_kt_slimbox2'));
