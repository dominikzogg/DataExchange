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
$GLOBALS['TL_LANG']['tl_dataexchange_config']['name']               = array('Name', 'Bitte geben Sie einen Namen für die Konfiguration an.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['addExportInDCA']     = array('Export-Button hinzufügen', 'Wählen Sie diese Option, um im ausgewählten DCA einen globalen Export-Button zu generieren.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['tableName']          = array('Tabellenname', 'Bitte wählen Sie den DCA Tabellennamen.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['exportType']         = array('Export-Format', 'Bitte wählen Sie das gewünschte Export-Format.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['exportCSVSeparator'] = array('CSV-Trennzeichen', 'Bitte wählen Sie das gewünschte Trennzeichen für den Datenexport. Standardmäßig werden die Datenfelder mit einem Komma getrennt.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['exportCSVExcel']     = array('Excel für Windows', 'Erstelle eine mit Excel für Windows kompatible Ausgabekodierung.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['includeHeader']      = array('Kopfdatensatz einfügen', 'Wählen Sie diese Option, wenn der erste Datensatz ein Kopfdatensatz sein soll und die Spaltennamen definiert.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['sqlWhere']           = array('SQL "WHERE" Bedingung', 'Hier können Sie die Ergebnismenge der Abfrage über benutzerdefinierte SQL-Befehle filtern.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['sqlOrderBy']         = array('SQL "ORDER BY" Bedingung', 'Hier können Sie die Ergebnismenge der Abfrage über benutzerdefinierte SQL-Befehle sortieren.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['prependString']      = array('Dateinamen-Präfix', 'Dem Ausgabedateinamen ein Präfix voranstellen. Inserttags werden entsprechend ersetzt.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['exportToFile']       = array('Ausgabe in eine Datei', 'Die Daten werden in eine Datei exportiert und nicht an den Browser weitergeleitet.');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['storeDir']           = array('Ausgabeverzeichnis', 'Wählen Sie das gewünschte Ausgabeverzeichnis, wo der Datenexport gespeichert werden soll.');


/**
 * Buttons
 */
$GLOBALS['TL_LANG']['tl_dataexchange_config']['new']        = array('Neue Konfiguration', 'Erstellt eine neue Konfiguration für den Datenaustausch');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['edit']       = array('Felder bearbeiten', 'Die Felder der Konfiguration ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['editheader'] = array('Konfiguration bearbeiten', 'Die Konfiguration ID %s bearbeiten');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['copy']       = array('Konfiguration duplizieren', 'Die Konfiguration ID %s duplizieren');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['export']     = array('Konfiguration exportieren', 'Die Konfiguration ID %s exportieren');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['delete']     = array('Konfiguration löschen', 'Die Konfiguration ID %s löschen');
$GLOBALS['TL_LANG']['tl_dataexchange_config']['show']       = array('Konfigurationsdetails', 'Die Details der Konfiguration ID %s anzeigen');


/**
 * Legends
 */
$GLOBALS['TL_LANG']['tl_dataexchange_config']['config_legend'] = 'Konfiguration';
$GLOBALS['TL_LANG']['tl_dataexchange_config']['csv_legend']    = 'CSV-Export';
$GLOBALS['TL_LANG']['tl_dataexchange_config']['expert_legend'] = 'Experten-Einstellungen';
$GLOBALS['TL_LANG']['tl_dataexchange_config']['output_legend'] = 'Optionen für die Datenspeicherung';

