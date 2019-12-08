<?php
class cnx{
    public $cnx;
    function __construct(){
        $servername="localhost";
        $dbname="php";
        $username="root";
        $password="";
        $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $this->cnx=$conn;
    }
}

?>