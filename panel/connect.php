<?php
class db{   

    public $conn;

    function __construct() {
        $conn = new mysqli("localhost","root","","thrift_fashion");
            if ($conn -> connect_errno) {
                echo "Failed to connect to MySQL: " . $conn -> connect_error;
                exit();
            }
        $this->conn = $conn;
    }

    public function add($query){
        $result = $this->conn->query($query);
        return $query;
    
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