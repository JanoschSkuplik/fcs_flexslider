<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 *
 * The TYPOlight webCMS is an accessible web content management system that 
 * specializes in accessibility and generates W3C-compliant HTML code. It 
 * provides a wide range of functionality to develop professional websites 
 * including a built-in search engine, form generator, file and user manager, 
 * CSS engine, multi-language support and many more. For more information and 
 * additional TYPOlight applications like the TYPOlight MVC Framework please 
 * visit the project website http://www.typolight.org.
 * 
 * The Catalog extension allows the creation of multiple catalogs of custom items,
 * each with its own unique set of selectable field types, with field extendability.
 * The Front-End modules allow you to build powerful listing and filtering of the 
 * data in each catalog.
 * 
 * PHP version 5
 * @copyright  DMA - Dialog und Medien Agentur 2012
 * @author     Janosch Skuplik <skuplik@dma.do>
 * @package    dmaCatalogRadiussearch
 * @license    LGPL
 * @filesource
 */

class fcsFlexslider extends Frontend
{
	
	public function fcsParseStartdata($arrStartdata)
	{
		$arrToAdd = array();
		
		// check the each additional option 
		if ($arrStartdata['flexAnimation'] && $arrStartdata['flexAnimation'] != 'fade')
		{
			$arrToAdd[] = 'animation:' . "'" . $arrStartdata['flexAnimation'] . "'";
		}
		if (!$arrStartdata['flexControlNav'])
		{
			$arrToAdd[] = 'controlNav:false';
		}
		if (!$arrStartdata['flexSlideshow'])
		{
			$arrToAdd[] = 'slideshow:false';
		}
		
		
		// save the options ind startdata-array
		$GLOBALS['fcsSlider']['STARTDATA']['loadData'] = implode(',',$arrToAdd);
	}
}

?>