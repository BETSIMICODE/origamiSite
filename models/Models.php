<?php

require_once "Connection.php";
require_once "QueryFunction.php";

class Admin {
    public $name;
    public $mail;
    public $passwd;
    function __construct($name, $mail, $passwd){
        $this->name=$name;
        $this->mail=$mail;
        $this->passwd=$passwd;
    }
    function save(){
        // Call class Connection to file Connection.php and get property $connection
        $connexion=new Connection();
        $connection=$connexion->getConnection();
        // Call class QueryFunction to file QueryFunction.php 
        $test=new QueryFunction();
        // verification
        $sqlVerification="select admin_mail from admin where admin_mail=?;";
        $valverification=[$this->mail];
        if ($connection!=""){

            if ($test->verification($connection,$sqlVerification,$valverification)){
                echo "Admin allready exists";
            }else{
                $sqlAdd="insert into admin (admin_mail,admin_name,admin_password) values (?,?,?);";
                $valAdd=[$this->mail,$this->name,$this->passwd];
                $test->addNewInformation($connection,$sqlAdd,$valAdd);
                echo "Add admin successfull";
            };
        }else{
            echo "Connection error!";
        }


    }


}
$admin=new Admin("Ralahy","princyrlahy@gmail.com","azerty");
$admin->save();



?>