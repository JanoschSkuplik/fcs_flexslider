<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Flex_content_slider
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'fcsFlexslider'                      => 'system/modules/fcs_flexslider/classes/fcsFlexslider.php',
));
/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'flexslider_end' => 'system/modules/fcs_flexslider/templates',
	'flexslider_start' => 'system/modules/fcs_flexslider/templates',
));
