<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2018, Steve Guidetti, https://github.com/stevotvr
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 */

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'UCP_FLAIR'			=> 'Beheer profiel flair',
	'UCP_FLAIR_EXPLAIN'	=> 'Hier kun je jouw profielflair beheren.<ul><li>Klik de <i class="fa fa-star"></i>/<i class="fa fa-star-o"></i> button om een item als favoriet / onfavoriet markeren. Favorieten worden als eerste weergegeven op jouw profiel.</li><li>Klik de<b>&times;</b> button om een ​​item te verwijderen. Deze optie is mogelijk niet voor alle items beschikbaar.</li><li>De <b>Beschikbare Flair</b> paneel toont items die je aan jouw eigen profiel kunt toevoegen.</li></ul>',

	'UCP_USER_FLAIR'			=> 'Jouw flair',
	'UCP_FLAIR_AVAILABLE'		=> 'Beschikbare flair',
	'UCP_FLAIR_NO_FLAIR'		=> 'Je hebt geen flair',
	'UCP_FLAIR_NO_AVAILABLE'	=> 'Er is geen flair beschikbaar',
	'UCP_FLAIR_ADD'				=> '“%s” Toevoegen',
	'UCP_FLAIR_REMOVE'			=> '“%s” Verwijderen',
	'UCP_FLAIR_FAV'				=> 'Voeg “%s” toe aan favorieten',
	'UCP_FLAIR_UNFAV'			=> 'Verwijder “%s” van favorieten',
	'UCP_FLAIR_REMOVE_CONFIRM'	=> 'Weet je zeker dat je dit item wilt verwijderen?',

	'UCP_FLAIR_ADD_BUTTON'	=> 'Voeg toe aan profiel',
));
