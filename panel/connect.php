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

    public function add($query){
        $result = $this->conn->query($query);
        return $result;
    }

    public function select($query){
        $result = $this->conn->query($query);        
        $data = mysqli_fetch_assoc($result);
        return $data;                                                      
    }    

    public function update($query){
        $result = $this->conn->query($query);        
        return $result;                                                      
    }


}   


?>