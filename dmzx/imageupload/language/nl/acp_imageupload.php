<?php
/**
*
* @package phpBB Extension - Image Upload
* @copyright (c) 2017 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
	$lang = [];
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

$lang = array_merge($lang, [
	'ACP_IMAGEUPLOAD_SAVED'									=> 'Upload Afbeelding instellingen opgeslagen',
	'ACP_IMAGEUPLOAD_VERSION'								=> 'Versie',
	'ACP_IMAGE_UPLOAD_CONFIGURATION'						=> 'Afbeelding Uploader configuratie',
	'ACP_IMAGEUPLOAD_ENABLE'								=> 'Schakel Afbeelding Uploader in',
	'ACP_IMAGEUPLOAD_ENABLE_EXPLAIN'						=> 'Globale instellingen voor Afbeelding Uploader in te schakelen.',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE'							=> 'Schakel afbeeldingen in op index',
	'ACP_IMAGEUPLOAD_INDEX_ENABLE_EXPLAIN'					=> 'Globaal aan/uit van afbeeldingen op de index voor alle leden.<br>Leden kunnen in UCP instellen of ze hun geuploade afbeeldingen wensen te bekijken op de index.',
	'ACP_IMAGEUPLOAD_NUMBER'								=> 'Grootte van de upload',
	'ACP_IMAGEUPLOAD_NUMBER_EXPLAIN'						=> 'Kies de grootte van de upload, standaard is 2 MB.',
	'ACP_IMAGEUPLOAD_NEW_DOWNLOAD_SIZE'						=> 'De maximum grootte dat je php.ini toelaat is <strong>%1$s %2$s</strong>!',
	'ACP_IMAGEUPLOAD_REALLY_DELETE_IMAGE'					=> 'Afbeelding echt verwijderen?',
	'ACP_IMAGEUPLOAD_TITLE'									=> 'Afbeelding naam',
	'ACP_IMAGEUPLOAD_TITLE_REAL'							=> 'Afbeelding echte naam',
	'ACP_IMAGEUPLOAD_PREVIEW'								=> 'Voorbeeld',
	'ACP_IMAGEUPLOAD_WIDTH_HEIGHT'							=> 'Breedte/Hoogte',
	'ACP_IMAGEUPLOAD_FOLDER_SIZE'							=> 'Totale folder grootte',
	'ACP_IMAGEUPLOAD_USERNAME'								=> 'Geüpload door',
	'ACP_IMAGEUPLOAD_SIZE'									=> 'Grootte',
	'ACP_MULTI_IMAGES'		=>	[
		1 => '%s afbeelding',
		2 => '%s afbeeldingen',
	],
	'ACP_IMAGEUPLOAD_SORT_USERNAME'							=> 'Gebruikersnaam',
	'ACP_IMAGEUPLOAD_SORT_DATE'								=> 'Datum',
	'ACP_IMAGEUPLOAD_NOT_SELECTED'							=> 'Geen afbeeldingen geselecteerd',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE'							=> 'Schakel posten van afbeeldingen in mChat in',
	'ACP_IMAGEUPLOAD_CHAT_ENABLE_EXPLAIN'					=> 'Stel in op ja om geüploade afbeeldingen op de index toe te voegen met een muisklik.',
	'ACP_IMAGEUPLOAD_POST_ENABLE'							=> 'Schakel de knop voor het uploaden van afbeeldingen in op het plaatsen van pagina’s',
	'ACP_IMAGEUPLOAD_POST_ENABLE_EXPLAIN'					=> 'Stel in op ja om de upload knop op postpagina’s weer te geven.',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE'						=> 'Schakel afbeeldingen van gebruikers in op postpagina’s',
	'ACP_IMAGEUPLOAD_POSTTAB_ENABLE_EXPLAIN'				=> 'Globaal aan/uit voor afbeeldingen op postpagina’s.',
	'ACP_IMAGEUPLOAD_EXT'									=> 'Toegestane extensies',
	'ACP_IMAGEUPLOAD_EXT_EXPLAIN'							=> 'Toegestane extensies om op te nemen, gescheiden door een komma (voorbeeld: gif,jpeg,jpg,png)',
	'ACP_IMAGE_UPLOAD_LINK_SETTINGS'						=> 'URL instellingen voor het uploaden van afbeeldingen',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK'					=> 'Schakel directe link-URL in',
	'ACP_IMAGEUPLOAD_ENABLE_DIRECT_LINK_EXPLAIN'			=> 'Directe URL naar afbeelding.',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK'						=> 'Schakel URL-tags in',
	'ACP_IMAGEUPLOAD_ENABLE_URL_LINK_EXPLAIN'				=> '[url=BESTANDSNAAM]FORUMNAAM[/url]',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK'						=> 'Schakel IMG-tags in',
	'ACP_IMAGEUPLOAD_ENABLE_IMG_LINK_EXPLAIN'				=> '[img]BESTANDSNAAM[/img]',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK'					=> 'Schakel URL-IMG-tags in',
	'ACP_IMAGEUPLOAD_ENABLE_URL_IMG_LINK_EXPLAIN'			=> '[url=BESTANDSNAAM][img]BESTANDSNAAM[/img][/url]',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE'							=> 'Schakel meerdere uploads in',
	'ACP_IMAGEUPLOAD_MULTI_ENABLE_EXPLAIN'					=> 'Globaal aan/uit voor meerdere upload afbeeldingen.',
]);
