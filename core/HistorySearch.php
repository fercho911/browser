<?php

include './DBConection.php';

class HistorySearchs {
    
    
    
    function SaveHistory($data){
        
        
        $query= "INSERT INTO `searchhistory` (`IdSearch`, `SearchDesc`) VALUES (NULL,"."'".$data."'"." );";
        
        $con = new DBConection();
        $con->queryDb($query);
         
        
    } 
    
    
    function GetHistorySearchs(){
         
        $query="SELECT SearchDesc FROM`searchhistory`;";
    
    $con = new DBConection();
    
    $Result= $con->queryDb($query);
    
    echo $Result;
    
    
}
}