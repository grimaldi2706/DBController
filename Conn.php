<?php
class DBController{
    private $conn;
    
    function __construct() {
        $this->conn = $this->connectDB();
    }
    function connectDB(){
        $serverName = '172.19.0.15';
        $connectionInfo = array("Database"=>"Novasoft_8", "UID"=>"ggomez", "PWD"=>"Cuaical-93", "CharacterSet"=>"UTF-8");
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        return $conn;
        if(!$conn)
        die('No se puede establecer conexion con el servidor');
    }
    function runQuery($query) {
        $result = sqlsrv_query($this->conn, $query);
        $row = sqlsrv_fetch_array($result);
        return $row; 
    }
    function runQueryTables($query){
        $result = sqlsrv_query($this->conn, $query);
        return $result;
    }
}

?>
