<?php

/**
 * Lazy Images for Contao Open Source CMS
 *
 * @copyright  DerHaeuptling 2016
 * @author     Martin Schwenzer <mail@derhaeuptling.com>
 * @author     Sebastijan Ribarić <sebastijan.ribaric@media-8.org>
 * @package    Lazy Images
 * @license    http://opensource.org/licenses/lgpl-3.0.html 
 */


if ('FE' === TL_MODE)
{
	$GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/lazy-images/assets/lazysizes-gh-pages/lazysizes.min.js|async';
	
	$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('\LazySizes', 'init');
}

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['texts']['text'] = 'LazyContentText';
$GLOBALS['TL_CTE']['media']['image'] = 'LazyContentImage';
