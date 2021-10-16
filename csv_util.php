<?php
	// ASE 230 Great Quotes Project
	// Noah Gestiehr
	function readContent($file) {
			$csvFile = fopen($file,"r") or die("File does not exist.");
			while(!feof($csvFile)) {
				$contentArray[] = fgetcsv($csvFile);
			}
			fclose($csvFile);
			return $contentArray;
	}
	
	function readContentIndex($file, $index) {
			$csvFile = fopen($file,"r") or die("File does not exist.");
			while(!feof($file)) {
				$contentArray[] = fgetcsv($csvFile);
			}
			fclose($file);
			return $contentArray[$index];
	}
	
	function addContent($userFile, $author,$newContent) {
			$newFile = fopen($userFile,"a") or die("That CSV file does not exist.");
			fputcsv($newFile,$author,$newContent);
			fclose($newFile);
	}
	
	function modifyLine($userFile,$line, $change) {
			
			$modify = fopen($userFile,'w') or die("That csv file does not exist.");
			while(!feof($modify)) {
				$contentArray[] = fgetcsv($modify);
			}
			$contentArray[$line] = $change;
			fwrite($modify, $contentArray);
			fclose($modify);
	}
	
	function emptyContent($userFile,$line) {
			modifyLine($userFile, $line, '');
	}
	
	function deleteContent($userFile,$line) {
			$modify = fopen($userFile,'w') or die("That csv file does not exist.");
			while(!feof($userFile)) {
				$contentArray[] = fgetcsv($modify);
			}
			unset($contentArray[$line]);
			fwrite($modify, $contentArray);
			fclose($modify);
	}
	
	function readContentHeader($file){
		//echo $file;
		$csv = array_map('str_getcsv', file($file));
		//print_r($csv);
		if (count($csv) < 1) { return [];}
		$headers = $csv[0];
		unset($csv[0]);
		$rowsWithKeys = [];
		foreach ($csv as $row) {
			$newRow = [];
			foreach ($headers as $k => $key) {
				$newRow[$key] = $row[$k];
			}
			$rowsWithKeys[] = $newRow;
		}
		
		return $rowsWithKeys;
	}
	// Function Calls
	//writeMsg(); // call the function
	
?>