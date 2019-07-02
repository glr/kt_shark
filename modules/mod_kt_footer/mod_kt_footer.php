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

$date =& JFactory::getDate();
$cur_year	= $date->toFormat('%Y');
$csite_name	= $mainframe->getCfg('sitename');

$line1 = '<div>Copyright &#169; ' . $cur_year . '</div>';
$line2 = '<div>' . $csite_name . '</div>';
$line3 = '<div>All Rights Reserved</div>';
$line4 = '<div><a href="http://krahstek.com">Web Design by krahSTek, LLC</a></div>';

$footer = $line1.$line2.$line3.$line4;

require(JModuleHelper::getLayoutPath('mod_kt_footer'));
