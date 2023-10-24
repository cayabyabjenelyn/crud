<?php
 
 require_once('action.php');

 $record = getRecords();

 if(!empty($record)){
    foreach($record as $key){
        echo $key["id"];
    }
 }else{
    echo "No Records Found!";
 }



?>