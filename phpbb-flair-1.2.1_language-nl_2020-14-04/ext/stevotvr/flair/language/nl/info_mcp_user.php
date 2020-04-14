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
	'MCP_FLAIR'			=> 'Profiel Flair',
	'MCP_FLAIR_EXPLAIN'	=> 'Hier kun je %s’s profiel flair beheren.<ul><li>Klik de <b>Set</b> button om de telling in te stellen op de opgegeven waarde.</li><li>Klik de <b>&times;</b> button om een ​​item te verwijderen.</li><li>Klik de <b>+</b> button om een ​​item toe te voegen met de opgegeven telling.</li></ul>',

	'MCP_FLAIR_USER'	=> 'Beheer gebruiker’s flair',
	'MCP_FLAIR_FRONT'	=> 'Voorpagina',

	'MCP_FLAIR_USER_FLAIR'		=> '%s’s flair',
	'MCP_FLAIR_AVAILABLE'		=> 'Beschikbaar flair',
	'MCP_FLAIR_NO_FLAIR'		=> 'Er is geen flair toegewezen aan het profiel van deze gebruiker.',
	'MCP_FLAIR_NO_AVAILABLE'	=> 'Er zijn geen flair-items beschikbaar.',
	'MCP_FLAIR_ADD_TITLE'		=> 'Voeg “%1$s” toe aan %2$s’s profiel',
	'MCP_FLAIR_SET_COUNT_TITLE'	=> 'Stel het aantal “%1$s” in op %2$s’s profiel',
	'MCP_FLAIR_REMOVE_TITLE'	=> 'Verwijder “%1$s” van %2$s’s profiel',
	'MCP_FLAIR_REMOVE_CONFIRM'	=> 'Weet u zeker dat u dit item wilt verwijderen?',

	'MCP_FLAIR_SET'	=> 'Stel in',
));
