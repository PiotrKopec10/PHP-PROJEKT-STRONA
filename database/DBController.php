<?php

class DBController
{
//Database Connection

protected $host='localhost';
protected $user='root';
protected $password='';
protected $database="kopshoes";

//Conection
public $con=null;


//Konstruktor

public function __construct()
{
    $this->con=mysqli_connect($this->host,$this->user,$this->password,$this->database);
    if($this->con->connect_error){
        echo "Fail" .$this->con->connect_error;
    }
}

public function __destruct()
{
    $this->closeConnection();
}

//for mysqli Close Connections
protected function closeConnection(){
    if($this->con!=null){
        $this->con->close();
        $this->con=null;
    }
}
}

