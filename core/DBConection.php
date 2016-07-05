<?php


class DBConection {
//    
//    protected $host ="localhost";
//    protected $user ="root";
//    protected $password="";
//    protected $database="dbrestbrowser";
//    protected $port="8081";   
    protected $connection = null;   

     function dbconnect(){
           
        $connection = mysqli_connect("localhost", "root", "", "dbrestbrowser");
        if ($connection->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
}
       
        return $connection;
    }

    function queryDb($query){
        
        $db= new DBConection();
        $conn = $db->dbconnect();
        $queryRes = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($queryRes);
        echo $result;
        return $result;
    }  

    
    
    
    
    
}
