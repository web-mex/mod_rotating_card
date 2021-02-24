<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_rotating_card
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$document = JFactory::getDocument();
//$document->addScript('http://maps.google.com/maps/api/js?sensor=true&language='.$params->get('lang','en-GB'));
///var/www/html/webmex/modules/mod_rotating_card/mod_rotating_card.php

//$document->addScript('https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js');

//$document->addStyleSheet('modules/mod_rotating_card/css/bootstrap.css');
$document->addStyleSheet('modules/mod_rotating_card/css/rotating-card.css');

//$document->addStyleSheet('https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet');


if ($params->def('prepare_content', 1))
{
	JPluginHelper::importPlugin('content');
	$module->content = JHtml::_('content.prepare', $module->content, '', 'mod_rotating_card.content');

}
$articles = $params->get('selectarticle');

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'), ENT_COMPAT, 'UTF-8');
$box_title = htmlspecialchars($params->get('box-title'), ENT_COMPAT, 'UTF-8');
$box_subtitle = htmlspecialchars($params->get('box-subtitle'), ENT_COMPAT, 'UTF-8');


$box1_start= $params->get('box1-start');
$box1_back_teaser = $params->get('box1-back-teaser');

$box2_start= $params->get('box2-start');
$box2_back_teaser = $params->get('box2-back-teaser');

$box3_start= $params->get('box3-start');
$box3_back_teaser = $params->get('box3-back-teaser');


//var_dump(count($articles));

if (count($articles) < 3 ){
    //echo "Bitte mindsetens 3 Articel wählen";
    JFactory::getApplication()->enqueueMessage(JText::_('Bitte mindsetens 3 Artikel wählen'), 'error');
    return;
}


$db = JFactory::getDbo();

$query = $db->getQuery(true);
$query->select('*')
    ->from($db->quoteName('#__content'))
    ->where($db->quoteName('id') .' IN (' . $articles[0] . ','.$articles[1].','.$articles[2].')');

//echo $query->dump();


$db->setQuery($query);

$box = $db->loadObjectList();


//$box1_content = substr($box[1]->fulltext,0, 50);
$img1 = json_decode($box[0]->images);  //->image_intro | -> image->fulltext | ->image_intro_caption | ->image_fulltext_caption
$img2 = json_decode($box[1]->images);
$img3 = json_decode($box[2]->images);

$url1 = json_decode($box[0]->urls);
$url2 = json_decode($box[1]->urls);
$url3 = json_decode($box[2]->urls);



require JModuleHelper::getLayoutPath('mod_rotating_card', $params->get('layout', 'default'));
