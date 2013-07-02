<?php if (!defined('TL_ROOT')) die('You cannot access this file directly!');

/**
 * Contao Open Source CMS
 * Copyright � 2005-2011 Leo Feyer
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
 * @author     Kamil Kuzminski <kamil.kuzminski@codefog.pl>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


class ModuleDataExchange extends Module
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'mod_dataexchange';


	/**
	 * Display a wildcard in the back end
	 * @return string
	 */
	public function generate()
	{
		if (TL_MODE == 'BE')
		{
			$objTemplate = new BackendTemplate('be_wildcard');

			$objTemplate->wildcard = '### DATA EXCHANGE ###';
			$objTemplate->title = $this->headline;
			$objTemplate->id = $this->id;
			$objTemplate->link = $this->name;
			$objTemplate->href = 'contao/main.php?do=themes&amp;table=tl_module&amp;act=edit&amp;id=' . $this->id;

			return $objTemplate->parse();
		}

		$this->dataexchange_configs = deserialize($this->dataexchange_configs);

		// Return if there are no configs
		if (!is_array($this->dataexchange_configs) || empty($this->dataexchange_configs))
		{
			return '';
		}

		return parent::generate();
	}


	/**
	 * Generate the module
	 */
	protected function compile()
	{
		$objConfig = $this->Database->execute("SELECT * FROM tl_dataexchange_config WHERE id IN (" . implode(',', array_map('intval', $this->dataexchange_configs)) . ") ORDER BY " . $this->Database->findInSet('id', $this->dataexchange_configs));

		if (!$objConfig->numRows)
		{
			return;
		}

		$count = 0;
		$total = $objConfig->numRows;
		$arrConfigs = array();

		// Generate links
		while ($objConfig->next())
		{
			$arrConfigs[$objConfig->id] = $objConfig->row();
			$arrConfigs[$objConfig->id]['class'] = trim(((++$count == 1) ? ' first' : '') . (($count == $total) ? ' last' : '') . ((($count % 2) == 0) ? ' odd' : ' even'));
			$arrConfigs[$objConfig->id]['href'] = ampersand($this->Environment->request) . ((strpos($this->Environment->request, '?') !== false) ? '&amp;' : '?') . 'export=' . $objConfig->id;
		}

		$this->Template->configs = $arrConfigs;

		// Run the export
		if ($this->Input->get('export') != '' && isset($arrLinks[$this->Input->get('export')]))
		{
			$this->import('DataExchange');
			$this->DataExchange->exportTable($this->Input->get('export'), true);
		}
	}
}
