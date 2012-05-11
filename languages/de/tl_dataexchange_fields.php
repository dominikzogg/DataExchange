<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright © 2005-2011 Leo Feyer
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
 * @copyright  Stefan Lindecke 2012
 * @author     Stefan Lindecke <stefan@chektrion.de>
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['dcaField']   = array('DCA-Feld', 'Wählen Sie eine Auswahloption, wenn das Feld aus der DCA-Konfiguration abgerufen werden soll.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['label']      = array('Feldbezeichnung', 'Hier können Sie eine Feldbezeichnung setzen bzw. überschreiben.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['fieldQuery'] = array('Benutzerdefinierter Query', 'Geben Sie die entsprechende SQL-Abfrage ein, wenn Sie den Feldwert manuell abfragen wollen.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['enabled']    = array('Export', 'Aktivieren Sie diese Option, um dieses Feld dem Datenexport hinzuzufügen.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['useFilter']  = array('Feldfilter anwenden', 'Falls die DCA-Konfiguration eine Filterbedingung für dieses Feld vorsieht, wird die Ergebnismenge entsprechend dem vorgegebenen Wert gefiltert.');


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['new']        = array('Neues Feld', 'Ein neues Feld in dieser Konfiguration erstellen.');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['edit']       = array('Feld bearbeiten', 'Feld ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['editheader'] = array('Konfiguration bearbeiten', 'Die Konfiguration bearbeiten');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['copy']       = array('Feld duplizieren', 'Feld ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['cut']        = array('Feld verschieben', 'Feld ID %s verschieben');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['delete']     = array('Feld löschen', 'Feld ID %s löschen');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['toggle']     = array('Feld veröffentlichen/unveröffentlichen', 'Feld ID %s veröffentlichen/unveröffentlichen');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['show']       = array('Felddetails', 'Details des Feldes ID %s anzeigen');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['pasteafter'] = array('Oben einfügen', 'Nach dem Feld ID %s einfügen');
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['pastenew']   = array('Neues Feld oben erstellen', 'Neues Element nach dem Feld ID %s erstellen');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['field_legend']  = 'Feld-Einstellungen';
$GLOBALS['TL_LANG']['tl_dataexchange_fields']['config_legend'] = 'Konfiguration';

