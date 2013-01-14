<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright (C) 2005-2012 Leo Feyer
 *
 * Formerly known as TYPOlight Open Source CMS.
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 3 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at <http://www.gnu.org/licenses/>.
 *
 * PHP version 5
 * @copyright  DMA Dortmund
 * @author     Janosch Skuplik <skuplik@dma.do>
 * @package    FlexContentSlider - Flexslider
 * @license    LGPL
 * @filesource
 */


/**
 * Table tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['flex_content_slider']['additional'] = '{fcs_additional_legend:hide},flexAnimation,flexDirection,animationLoop,flexSlideshow,slideshowSpeed,animationSpeed,initDelay,randomize,pauseInAction,flexPauseOnHover,useCSS,touch,flexControlNav,directionNav,prevText,nextText,keybord,mousewheel,pausePlay,playText;flexUseOwnCSS;';

$GLOBALS['TL_DCA']['tl_content']['fields']['flexAnimation'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flexAnimation'],
	'default'									=> 'slide',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('fade', 'slide'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flexDirection'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flexDirection'],
	'default'									=> 'horizontal',
	'exclude'                 => true,
	'inputType'               => 'select',
	'options'                 => array('horizontal', 'vertical'),
	'reference'               => &$GLOBALS['TL_LANG']['MSC'],
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flexPauseOnHover'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flexPauseOnHover'],
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flexControlNav'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flexControlNav'],
	'default'									=> true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flexSlideshow'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flexSlideshow'],
	'default'									=> true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['flexUseOwnCSS'] = array
(
	'label'                   => &$GLOBALS['TL_LANG']['tl_content']['flexSlideshow'],
	'default'									=> true,
	'inputType'               => 'checkbox',
	'eval'                    => array('tl_class'=>'w50'),
	'sql'                     => "char(1) NOT NULL default ''"
);


/*animation fade*,slide
direction horizontal*,vertical
animationLoop: true
slideshow: true
slideshowSpeed: 7000
animationSpeed: 600
initDelay: 0
randomize: false

pauseInAction: true
pauseOnHover: false
useCSS: true
touch: true

controlNav: true
directionNav: true
prevText: Previous
nextText: Next

keybord: true
mousewheel: false
pausePlay: false
pauseText: Pause
playText: Play*/


?>