<?php 


	/* 
	<img src="
	https://image-charts.com/chart?
	cht=pc
	&chs=999x999
	&chd=a:1234589.41,465453,5456421.11,564648|46465,5445,5314
	&chl=DRAUGHT|SPIRITS|SOFTDRINKS|WINE|PUB|HOTEL|RESTAURANT">
		
	$Criteria = array();
	$Criteria['PieType'] = "pd";
	$Criteria['PieSize'] = "500x500";
	$Criteria['PieLabelsAndData'] = array(
										array("SPIRITS"=>21,
											"SOFTDRINKS"=>41,
											"WINE"=>32,
											"PUB"=>5 ),
										array("PUB"=>21,
											"HOTEL"=>41,
											"WINE"=>32,
											"RESTAURANT"=>5 )); //if you wish to use the concentric pie chart (inner split) type = pc or pd
	$Criteria['PieLabelsAndData'] = array(
										array("SPIRITS"=>21,
											"SOFTDRINKS"=>41,
											"WINE"=>32,
											"PUB"=>5 )); // standard pie chart. type = p
	$Criteria['DisplayLabels'] = true;
	$Criteria['DisplayLegends'] = false;
	$Criteria['DoughnutCenterValue'] = 1000;
	$Criteria['ChartTitle'] = "Test Chart";
	$Chart = OutputPieChart($Criteria);
	
	*/
	
	function OutputPieChart($Criteria){
		
		foreach($Criteria as $Key => $Value){
			switch($Key){
				case 'PieType':
					$Type = $Value;
					break;
				case 'PieSize':
					$Size = $Value;
					break;
				case 'PieLabelsAndData':
					$LabelsString = "";
					$DataString = "";
					$LegendsString = "";
					foreach($Value as $Series){
						$DataString .= (($DataString != "" ) ? "|" : "");
						foreach($Series as $Label => $Val){
							$LabelsString .= ((strlen($LabelsString) > 0) ? "|" : "").((isset($Criteria['DisplayLabels'][$Label])) ? $Criteria['DisplayLabels'][$Label] : $Label) ;
							$LegendsString .= (!empty($LegendsString) ? "|" : "").((isset($Criteria['DisplayLegends'][$Label])) ? $Criteria['DisplayLegends'][$Label] : $Label);
							// $DataString .= (((!empty($DataString)) && (substr($DataString, -1) != "|")) ? "," : "").$Val;
							// a value of 0 is read as empty so needs to be based on string length to account for thisw 
							$DataString .= (((strlen($DataString) > 0) && (substr($DataString, -1) != "|")) ? "," : "").$Val;
						}
					}
					break;
				case 'DisplayLegends':
					if($Value){
						$DisplayLegends = true;
					}else{
						$DisplayLegends = false;
					}
					break;
				case 'DisplayLabels':
					if($Value){
						$DisplayLabels = true;
					}else{
						$DisplayLabels = false;
					}
					break;
				case 'ChartTitle':
					$Title = $Value;
					break;
				case 'DoughnutCenterValue':
					$DoughValue = $Value;
					break;
				default:
					
			}
		}
		
		$ChartString = "				
						<img src='https://image-charts.com/chart?"
						.(isset($Type) ? "cht=".$Type : '')
						.(isset($Size) ? "&chs=".$Size : '')
						.(isset($LabelsString) && $DisplayLabels == true  ? "&chl=".$LabelsString : '')
						.(isset($LegendsString) && $DisplayLegends == true ? "&chdl=".$LegendsString : '')
						.(isset($DataString) ? "&chd=a:".$DataString : '')
						.(isset($Title) ? "&chtt=".$Title : '')
						.(isset($DoughValue) && $Type == "pd" ? "&chli=".$DoughValue : ''); //pie chart type ahs to be doughnut for $Doughvalue to display
		
		$ChartString .= "'>";

		// echo $ChartString; exit;
		return $ChartString;
		
	}