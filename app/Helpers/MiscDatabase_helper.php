<?php 

/* --------------------------------

$Columns = array(
        'FishTankUpdateId' => 'REQUIRED',
        'Comment' => '',
        'Photo' => null,
        'Date' => date('Y-m-d H:i:s' ,strtotime("now")),
        'UpdateTypeId' => 1
        );

$Config = array(
    'TableName' => 'fishtankupdates',
    'Data' => $_POST, 
    'Columns' => $Columns
);
PrepareMergeStatements($Config);
-------------------------------*/
function PrepareMergeStatements($Config)
{


    $Return = array(
                    'Insert' => '', // Insert Columns
                    'Values' => '', // Insert Values
                    'Update' => '', // Update Statement
                    'Query' => '',
                ); 

       foreach($Config['Columns'] as $Column => $Value){
           if(($Value == "REQUIRED") && (!isset($Config['Data'][$Column]))){ 
               echo $Column." must be defined"; exit;
           }
           $Return['Insert'] .= ((trim($Return['Insert']) == '') ? '' : ' ,')."`".$Column."`";

           $Return['Values'] .= ((trim($Return['Values']) == '') ? '' : ' ,').   "'".(isset($Config['Data'][$Column]) ? $Config['Data'][$Column] : $Value)."'";

           $Return['Update'] .= ((trim($Return['Update']) == '') ? '' : ' ,')."`".$Column."` = '".(isset($Config['Data'][$Column]) ? $Config['Data'][$Column] : $Value)."'"; 
       }         

       $Return['Query'] = "INSERT INTO ".$Config['TableName']." (". $Return['Insert'].") VALUES (".$Return['Values'] .")
       ON DUPLICATE KEY UPDATE ".$Return['Update'];


    return $Return;
}

?>