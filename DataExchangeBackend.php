<?php



class DataExchangeBackend extends Backend
{
	public function exportTable(DataContainer $dc)
	{
		
		$exportID = $dc->id;
		
		if ($this->Input->get("return"))
		{
			$exportID = $this->Input->get("id");
		}
		
		
		$objDataExchangeConfig = $this->Database->prepare("SELECT * FROM tl_dataexchange_config WHERE id=?")
								   ->limit(1)
								   ->execute($dc->id);

		if ($objDataExchangeConfig->numRows < 1)
		{
			return;
		}

		$objDataExchangeFields = $this->Database->prepare("SELECT * FROM tl_dataexchange_fields WHERE pid=? AND enabled=1 AND dcaTableName=? ORDER BY sorting")
								   ->execute($dc->id,$objDataExchangeConfig->tableName);

		$arrFields = array();	
		while ($objDataExchangeFields->next())
		{
			$arrFields[] = $objDataExchangeFields->dcaField;
		}	
		
		$objData = $this->Database->prepare("SELECT ".implode(',',$arrFields)." FROM ".$objDataExchangeConfig->tableName)->execute();
				
					
		$objExportFile = new CsvWriter();
		$arrData = array();
		
		
		$this->loadDataContainer($objDataExchangeConfig->tableName);
		
		while ($objData->next())
		{	
			$arrFieldData = $objData->row();
			
			
			//if (strlen($objDataExchangeConfig->exportRAW)==0)
			{	
				foreach ($arrFields as $field)
				{	
					$arrDataItem = $GLOBALS['TL_DCA'][$objDataExchangeConfig->tableName]['fields'][$field];
					
					
					$strClass = $GLOBALS['TL_FFL'][$arrDataItem['inputType']];
		
					if (!$this->classFileExists($strClass))
					{
						continue;
					}
		
					$arrDataItem['eval']['required'] = $arrDataItem['eval']['mandatory'];
		
					$arrDataItem['default'] = $arrFieldData[$field];
					
					$arrWidget = $this->prepareForWidget($arrDataItem, $field, $arrDataItem['default']);
					$objWidget = new $strClass($arrWidget);
					$objParsedWidget = $objWidget->parse();
					
					if ((is_array($arrWidget['options'])) && (count($arrWidget['options'])>0))
					{
						$arrFieldOptions = array();
						
						foreach ($arrWidget['options'] as $widgetField)
						{
							$arrFieldOptions[$widgetField['value']] = $widgetField['label'];
						
						}
						
						if (!is_array($objWidget->value))
						{
							$arrFieldData[$field]=$arrFieldOptions[$objWidget->value];
						}
						else 
						{
							$arrFieldData[$field]=$objWidget->value;	
						}
						
			
					} 
					else 
					{
						$arrFieldData[$field]=$objWidget->value;	
					}
		
					
			
				}	
				
			}
			
			$arrData[] = $arrFieldData;
		}

		$strStoreDir = $objDataExchangeConfig->storeDir;
		if (strlen($strStoreDir)==0)
			$strStoreDir = $GLOBALS['TL_CONFIG']['uploadPath'];
		
		
		if ($objDataExchangeConfig->includeHeader)
		{
			$objExportFile->headerFields = $arrFields;
			
		}
		
		if (strlen($objDataExchangeConfig->exportCSVSeparator)>0)
		{
			$objExportFile->seperator = $objDataExchangeConfig->exportCSVSeparator;
			
		}
		
		
		$objExportFile->content = $arrData;
		
		if ($objDataExchangeConfig->exportToFile)
		{		
			$objExportFile->saveToFile(sprintf("%s/%s%s.csv",$strStoreDir,
							$this->replaceInsertTags($objDataExchangeConfig->prependString),
							$objDataExchangeConfig->tableName));
		}
		else
		{
			$objExportFile->saveToBrowser();
				
		}
		
		
		if ($this->Input->get("return"))
		{
			$this->redirect("contao/main.php?do=".$this->Input->get("return"));
		}
		else
		{
			$this->redirect("contao/main.php?do=dataexchange_config");
		}
	}



	
	public function loadDataContainerHook($strName)
	{
		$objDBExport = $this->Database->prepare("SELECT * FROM tl_dataexchange_config WHERE tableName=? AND addExportInDCA='1'")->execute($strName);
		
		while ($objDBExport->next())
		{
			$GLOBALS['TL_DCA'][$objDBExport->tableName]['list']['global_operations']['export_'.$objDBExport->id] = array
			(
				'label'               => $objDBExport->addExportInDCAName,
				'href'                => 'do=dataexchange_config&amp;key=export&amp;id='.$objDBExport->id.'&amp;return='.$this->Input->get("do"),
			);
		}
	}
	
}
