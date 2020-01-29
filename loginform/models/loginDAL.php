<?php
class logindal{
    public $hostname="localhost";
    public $username="root";
    public $pswd="";
    public $dbname="session_practice";
    public $conn="";

    public function MakeConnection(){
        $this->conn = mysqli_connect($this->hostname,$this->username,$this->pswd,$this->dbname);
        if($this->conn){
            echo "connected";
        }else{
            echo "not connected";
        }
        return $this->conn;
    }
    public function login(){
       $conn = $this->MakeConnection();
       $query="select * from login";
       $res=mysqli_query($conn,$query);
       return $res;

    }

}