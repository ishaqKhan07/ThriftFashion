<?php
class db{   

    public $conn;

    function __construct() {
        $conn = new mysqli("localhost","root","","thrift-fashion");
            if ($conn -> connect_errno) {
                echo "Failed to connect to MySQL: " . $conn -> connect_error;
                exit();
            }
        $this->conn = $conn;
    }

    public function select($query){
        $result = $this->conn->query($query);
        return $result;
    }    

    public function update($query){
        $result = $this->conn->query($query);        
        return $result;                                                      
    } 
}   


?>