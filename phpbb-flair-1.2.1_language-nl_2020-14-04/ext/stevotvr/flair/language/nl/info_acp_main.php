<?php
/**
 *
 * Profile Flair. An extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2017, Steve Guidetti, https://github.com/stevotvr
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
	'ACP_FLAIR_TITLE'	=> 'Profile Flair',

	'ACP_FLAIR_SETTINGS'					=> 'Instellingen',
	'ACP_FLAIR_SETTINGS_TITLE'				=> 'Profiel Flair instellingen',
	'ACP_FLAIR_OPTIONS'						=> 'Algemene opties',
	'ACP_FLAIR_NOTIFY_USERS'				=> 'Notificaties aanzetten',
	'ACP_FLAIR_NOTIFY_USERS_EXPLAIN'		=> 'Schakel dit in om gebruikers in staat te stellen meldingen te ontvangen wanneer een nieuwe flair aan hun profiel wordt toegevoegd.',
	'ACP_FLAIR_DISPLAY_OPTIONS'				=> 'Weergaveopties',
	'ACP_FLAIR_SHOW_ON_PROFILE'				=> 'Weergeven op profielen',
	'ACP_FLAIR_SHOW_ON_PROFILE_EXPLAIN'		=> 'Enable to have flair displayed on profile pages.',
	'ACP_FLAIR_SHOW_ON_POSTS'				=> 'Schakel in om de flair te laten zien op profielpaginas',
	'ACP_FLAIR_SHOW_ON_POSTS_EXPLAIN'		=> 'Schakel in om de flair te laten zien in het gedeelte met gebruikersinformatie van elk bericht.',
	'ACP_FLAIR_DISPLAY_LIMIT'				=> 'Limiet weergeven',
	'ACP_FLAIR_DISPLAY_LIMIT_EXPLAIN'		=> 'Beperk het aantal flairitems dat op berichten moet worden weergegeven. Voer 0 in voor geen limiet.',
	'ACP_FLAIR_SETTINGS_SAVED'				=> 'Profiel Flair-opties succesvol opgeslagen',

	'ACP_FLAIR_MANAGE_CATS'				=> 'Categorieën beheren',
	'ACP_FLAIR_MANAGE_CATS_EXPLAIN'		=> 'Flair-items kunnen worden gegroepeerd in categorieën, die hier worden beheerd',
	'ACP_FLAIR_CATS_EMPTY'				=> 'Geen categorieën',
	'ACP_FLAIR_ADD_CAT'					=> 'Voeg flaircategorie toe',
	'ACP_FLAIR_CATS_ADD_SUCCESS'		=> 'Flair-categorie succesvol toegevoegd',
	'ACP_FLAIR_EDIT_CAT'				=> 'Flaircategorie bewerken',
	'ACP_FLAIR_CATS_EDIT_SUCCESS'		=> 'Flair categorie details succesvol opgeslagen',
	'ACP_FLAIR_CAT_DETAILS'				=> 'Categorie details',
	'ACP_FLAIR_DELETE_CAT'				=> 'Categorie verwijderen',
	'ACP_FLAIR_CATS_DELETE_SUCCESS'		=> 'Flair categorie succesvol verwijderd',
	'ACP_FLAIR_CATS_DELETE_ERRORED'		=> 'Er is een fout opgetreden bij het verwijderen van de flaircategorie',
	'ACP_FLAIR_DELETE_FLAIR_CONFIRM'	=> 'Weet je zeker dat u dit item wilt verwijderen??',
	'ACP_FLAIR_FORM_CAT_NAME'			=> 'Categorie naam',
	'ACP_FLAIR_FORM_DELETE_ALL_FLAIR'	=> 'Verwijder alle flair',
	'ACP_FLAIR_FORM_MOVE_FLAIR_TO'		=> 'Verplaats flair naar',

	'ACP_FLAIR_MANAGE'				=> 'Beheer flair',
	'ACP_FLAIR_MANAGE_EXPLAIN'		=> 'Hier kun je flairitems toevoegen, bewerken of verwijderen.',
	'ACP_FLAIR_EMPTY'				=> 'Geen flair-items',
	'ACP_FLAIR_ADD'					=> 'Voeg flair-item toe',
	'ACP_FLAIR_ADD_SUCCESS'			=> 'Flair-item succesvol toegevoegd',
	'ACP_FLAIR_EDIT'				=> 'Flair-item bewerken',
	'ACP_FLAIR_EDIT_SUCCESS'		=> 'Flair-itemgegevens succesvol opgeslagen',
	'ACP_FLAIR_DETAILS'				=> 'Flair details',
	'ACP_FLAIR_APPEARANCE'			=> 'Flair uiterlijk',
	'ACP_FLAIR_AUTO_ASSIGN'			=> 'Flair automatische toewijzingen',
	'ACP_FLAIR_DELETE_SUCCESS'		=> 'Flair-item succesvol verwijderd',
	'ACP_FLAIR_DELETE_ERRORED'		=> 'Er is een fout opgetreden bij het verwijderen van het flair-item',
	'ACP_FLAIR_TYPE'				=> 'Flair type',
	'ACP_FLAIR_FORM_CAT'			=> 'Flair categorie',
	'ACP_FLAIR_FORM_NAME'			=> 'Flair naam',
	'ACP_FLAIR_FORM_DESC'			=> 'Flair beschrijving',
	'ACP_FLAIR_FORM_PREVIEW'		=> 'Flair voorbeeld',
	'ACP_FLAIR_FORM_COLOR'			=> 'Flair kleur',
	'ACP_FLAIR_FORM_ICON'			=> 'Flair icoon',
	'ACP_FLAIR_FORM_ICON_COLOR'		=> 'Flair icoon kleur',
	'ACP_FLAIR_FORM_IMG'			=> 'Flair afbeelding',
	'ACP_FLAIR_NO_IMGS'				=> 'Geen afbeeldingen gevonden in <b>images/flair</b>.',
	'ACP_FLAIR_FORM_FONT_COLOR'		=> 'Flair lettertypekleur',
	'ACP_FLAIR_FORM_GROUPS'			=> 'Groupstoevoegingen',
	'ACP_FLAIR_FORM_GROUPS_AUTO'	=> 'Wijs automatisch toe aan groepen',

	'ACP_FLAIR_DESC_EXPLAIN'		=> 'Een optionele korte beschrijving die in de flairlegenda zal verschijnen.',
	'ACP_FLAIR_COLOR_EXPLAIN'		=> 'De achtergrondkleur van het item. Laat leeg voor geen achtergrond.',
	'ACP_FLAIR_ICON_EXPLAIN'		=> 'Voer een optionele Font Awesome-pictogram-ID in om dit item te vertegenwoordigen. [&nbsp;<a href="https://fontawesome.com/v4.7.0/icons/" target="_blank">Font Awesome icon list</a>&nbsp;]',
	'ACP_FLAIR_ICON_COLOR_EXPLAIN'	=> 'De kleur van het pictogram, indien aanwezig.',
	'ACP_FLAIR_IMG_EXPLAIN'			=> 'Het aangepaste afbeeldingsbestand.',
	'ACP_FLAIR_FONT_COLOR_EXPLAIN'	=> 'De kleur van de flairtekst wanneer een gebruiker meerdere van hetzelfde item heeft. Laat leeg om de telling te verbergen.',
	'ACP_FLAIR_GROUPS_EXPLAIN'		=> 'Leden van hier geselecteerde groepen hebben automatisch toegang tot dit flairitem.',
	'ACP_FLAIR_GROUPS_AUTO_EXPLAIN'	=> 'Als deze optie is ingeschakeld, wordt dit item automatisch toegewezen aan leden van de hierboven geselecteerde groepen. Anders hebben groepsleden toegang om dit item toe te wijzen aan hun eigen profiel in de UCP.',

	'ACP_FLAIR_TRIGGER_POST_COUNT'				=> 'Aantal posts',
	'ACP_FLAIR_TRIGGER_POST_COUNT_EXPLAIN'		=> 'Stel het minimum aantal berichten in dat een gebruiker moet hebben om dit item automatisch te ontvangen. Laat leeg om uit te schakelen.',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS'			=> 'Dagen geregistreerd',
	'ACP_FLAIR_TRIGGER_MEMBERSHIP_DAYS_EXPLAIN'	=> 'Stel het minimum aantal dagen in dat een gebruiker moet zijn geregistreerd voordat dit item automatisch wordt ontvangen. Laat leeg om uit te schakelen.',

	'ACP_FLAIR_IMAGES'						=> 'Beheer afbeeldingen',
	'ACP_FLAIR_IMAGES_EXPLAIN'				=> 'Hier kun je aangepaste afbeeldingspictogrammen bekijken, uploaden of verwijderen. Je kunt geen afbeeldingen verwijderen die momenteel in gebruik zijn door een of meer flair-items.',
	'ACP_FLAIR_IMGS_EMPTY'					=> 'Er zijn geen custom afbeeldingen gevonden.',
	'ACP_FLAIR_ADD_IMG'						=> 'Voeg afbeelding toe',
	'ACP_FLAIR_ADD_IMGS'					=> 'Voeg afbeeldingen toe',
	'ACP_FLAIR_IMG_TABLE_EXPLAIN'			=> 'Je kunt jouw custom pictogrammen uploaden naar <b>images/flair</b>. SVG-afbeeldingen kunnen worden geüpload zoals ze zijn. Voor elk GIF-, PNG- of JPEG-pictogram zijn de volgende bestanden vereist:',
	'ACP_FLAIR_IMG_TABLE_NAME'				=> 'Bestandsnaam',
	'ACP_FLAIR_IMG_TABLE_SIZE'				=> 'Aanbevolen hoogte',
	'ACP_FLAIR_IMG_TABLE_PLACEHOLDER'		=> 'icoon_naam',
	'ACP_FLAIR_IMG_TABLE_PX'				=> 'px',
	'ACP_FLAIR_IMG_UPLOADING'				=> 'Automatisch uploaden van afbeeldingen',
	'ACP_FLAIR_UPLOAD_IMG'					=> 'Afbeelding uploaden',
	'ACP_FLAIR_IMG_ADD_SUCCESS'				=> 'Custom afbeelding succesvol toegevoegd',
	'ACP_FLAIR_IMG_DELETE_SUCCESS'			=> 'Custom afbeelding is met succes verwijderd',
	'ACP_FLAIR_IMG_DELETE_ERRORED'			=> 'Er is een fout opgetreden bij het verwijderen van de custom afbeelding',
	'ACP_FLAIR_DELETE_IMG_CONFIRM'			=> 'Weet u zeker dat u dit item wilt verwijderen?',
	'ACP_FLAIR_FORM_IMG_FILE'				=> 'Afbeeldingsbestand',
	'ACP_FLAIR_FORM_IMG_FILE_EXPLAIN'		=> 'Selecteer het bronbeeldbestand. Je kunt elk GIF-, PNG-, JPEG- of SVG-bestand uploaden. Een vierkante afbeelding van minimaal 66 px hoog wordt aanbevolen.',
	'ACP_FLAIR_FORM_IMG_OVERWRITE'			=> 'Overschrijf bestaande',
	'ACP_FLAIR_FORM_IMG_OVERWRITE_EXPLAIN'	=> 'Schakel dit in om alle bestaande afbeeldingen met dezelfde naam permanent te overschrijven.',

	'ACP_FLAIR_NAME'		=> 'Naam',
	'ACP_FLAIR_DISPLAY_ON'	=> 'Weergeven op',
	'ACP_FLAIR_PROFILE'		=> 'Profiel',
	'ACP_FLAIR_POSTS'		=> 'Posts',

	'ACP_FLAIR_TYPE_FA'		=> 'Font Awesome',
	'ACP_FLAIR_TYPE_IMG'	=> 'Custom Afbeelding',

	'ACP_ERROR_APPEARANCE_REQUIRED'	=> 'Je moet een kleur of een pictogram instellen voor het flair-item.',
	'ACP_ERROR_IMG_REQUIRED'		=> 'Je moet een afbeelding specificeren voor het flair-item.',
	'ACP_ERROR_NOT_WRITABLE'		=> 'De <b>images/flair</b> folder is niet beschrijfbaar.',
	'ACP_ERROR_NO_IMG_LIB'			=> 'U moet Imagemagick (aanbevolen) of GD installeren / inschakelen om deze functie met rasterafbeeldingen te gebruiken. Alleen SVG-afbeeldingen zijn toegestaan.',
	'ACP_ERROR_UPLOAD_INVALID'		=> 'Het geselecteerde bestand is geen geaccepteerd afbeeldingsbestand.',
	'ACP_ERROR_NOT_UPLOADED'		=> 'Het uploaden van de afbeelding is mislukt.',
));
