<?php

require_once "Connection.php";
require_once "QueryFunction.php";

class Admin {
    private $name;
    private $mail;
    private $passwd;
    function __construct($name,$mail,$passwd){
        $this->name=$name;
        $this->mail=$mail;
        $this->passwd=$passwd;
    }
    function save(){
        // Call class Connection to file Connection.php and get property $connection
        $connexion=new Connection();
        $connection=$connexion->getConnection();
        // Call class QueryFunction to file QueryFunction.php 
        $queryFunction=new QueryFunction();
        // verification
        $sqlVerification="select admin_mail from admin where admin_mail=? or admin_name=? ;";
        $valverification=[$this->mail,$this->name];
        if ($connection!=""){
            if ($queryFunction->verification($connection,$sqlVerification,$valverification)){
                // echo "Admin allready exists";
                // No save because the admin allready exists
                return "Admin allready exists";
            }else{
                // Saving process
                $sqlVerification1="insert into admin(admin_mail,admin_name,admin_password) values (?,?,?);";
                $valverification1=[$this->mail,$this->name,$this->passwd];
                $queryFunction->addNewInformation($connection,$sqlVerification1,$valverification1);
                return "Saving done well";
            }
        }else{
            // echo "Connection error!";

            return "Connection error!";
        }
    }
}


class AdminAuth{
    private $name;
    private $mail;
    private $passwd;
    function __construct($mail, $passwd){
        $this->mail=$mail;
        $this->passwd=$passwd;
    }
    function auth(){
        // Call class Connection to file Connection.php and get property $connection
        $connexion=new Connection();
        $connection=$connexion->getConnection();
        // Call class QueryFunction to file QueryFunction.php 
        $queryFunction=new QueryFunction();
        // verification
        $sqlVerification="select admin_mail from admin where admin_mail=? and admin_password=?;";
        $valverification=[$this->mail,$this->passwd];
        if ($connection!=""){

            if ($queryFunction->verification($connection,$sqlVerification,$valverification)){
                echo "Admin allready exists";
                return true;
            }else{
                return false;
            };
        }else{
            echo "Connection error!";
            return false;
        }


    }

}

class AdminAction{
    private $name;
    private $mail;
    private $passwd;
    private $queryFunction;
    private $connection;
    function __construct(){
        $this->queryFunction=new QueryFunction();
        $connex=new Connection();
        $this->connection=$connex->getConnection();
    }
    function showAll(){
        $connection=$this->connection;
        $query= "select * from admin";
        $val=[];
        return $this->queryFunction->showInformation($connection,$query,$val);
    }
    function search($searchVal){
        $connection=$this->connection;
        $query= "select * from admin where admin_mail=? or admin_name=? or admin_password=?";
        $val=[$searchVal,$searchVal,$searchVal];
        return $this->queryFunction->showInformation($connection,$query,$val);
    }
    function delete($valMailAdminToDelete){
        $connection=$this->connection;
        $query= "delete from admin where admin_mail=?";
        $val=[$valMailAdminToDelete];
        $this->queryFunction->addNewInformation($connection,$query,$val);
    }
    function modif($mail,$newMail,$name,$password){
        $connection=$this->connection;
        $sqlVerification="select admin_mail from admin where admin_mail=?;";
        $valverification=[$newMail];
        if ($this->queryFunction->verification($connection, $sqlVerification, $valverification)==true && $mail != $newMail){
            // echo "Admin allready exists";
            // No save because the admin allready exists
            return "Admin allready exists";
        }else{
            // Saving process
            $query= "update admin set admin_mail=?, admin_name=?, admin_password=? where admin_mail=?";
            $val=[$newMail,$name,$password,$mail];
            $this->queryFunction->addNewInformation($connection,$query,$val);
        
        }
    }
}


class Page{
    private $name;
   
    function __construct($name){
        $this->name=$name;
    }
    function save(){
        // Call class Connection to file Connection.php and get property $connection
        $connexion=new Connection();
        $connection=$connexion->getConnection();
        // Call class QueryFunction to file QueryFunction.php 
        $queryFunction=new QueryFunction();
        // verification
        $sqlVerification="select * from page where page_name=?;";
        $valverification=[$this->name];
        if ($connection!=""){
            if ($queryFunction->verification($connection,$sqlVerification,$valverification)){
                // No save because the page allready exists
                return "Page allready exists";
            }else{
                // Saving process
                $sqlVerification1="insert into page(page_name) values(?);";
                $valverification1=[$this->name];
                $queryFunction->addNewInformation($connection,$sqlVerification1,$valverification1);
                return "Saving done well";
            }
        }else{
            // echo "Connection error!";

            return "Connection error!";
        }


    }
}
class PageAction{
    private $name;
    private $id;
    private $queryFunction;
    private $connection;

    function __construct(){
        $this->queryFunction=new QueryFunction();
        $connex=new Connection();
        $this->connection=$connex->getConnection();
    }
    function showAll(){
        $connection=$this->connection;
        $query= "select * from Page";
        $val=[];
        return $this->queryFunction->showInformation($connection,$query,$val);
    }
    function search($searchVal){
        $connection=$this->connection;
        $query= "select * from page where page_id=? or page_name=?";
        $val=[$searchVal,$searchVal];
        return $this->queryFunction->showInformation($connection,$query,$val);
    }
    function modif($name,$newName){
        $connection=$this->connection;
        $sqlVerification="select * from page where page_name=?;";
        $valverification=[$newName];
        if ($this->queryFunction->verification($connection, $sqlVerification, $valverification)==true && $name != $newName){
            // echo "Admin allready exists";
            // No save because the admin allready exists
            return "Page allready exists";
        }else{
            // Saving process
            $query= "update page set page_name=? where page_name=?";
            $val=[$newName,$name];
            $this->queryFunction->addNewInformation($connection,$query,$val);
        
        }
    }
    function delete($idPageForDelete){
        $connection=$this->connection;
        $query= "delete from page where page_id=?";
        $val=[$idPageForDelete];
        $this->queryFunction->addNewInformation($connection,$query,$val);
    }
}
class Section {
    private $section_name;
    private $page_id;
   
    function __construct($section_name, $page_id) {
        $this->section_name = $section_name;
        $this->page_id = $page_id;
    }

    function save() {
        $connexion = new Connection();
        $connection = $connexion->getConnection();
        $queryFunction = new QueryFunction();

        $sqlVerification = "SELECT * FROM section WHERE section_name = ?;";
        $valverification = [$this->section_name];

        if ($connection != "") {
            if ($queryFunction->verification($connection, $sqlVerification, $valverification)) {
                return "Section already exists";
            } else {
                $sqlInsertion = "INSERT INTO section (section_name, page_id) VALUES (?, ?);";
                $valInsertion = [$this->section_name, $this->page_id];
                $queryFunction->addNewInformation($connection, $sqlInsertion, $valInsertion);
                return "Saving done well";
            }
        } else {
            return "Connection error!";
        }
    }
}

class SectionAction {
    private $queryFunction;
    private $connection;

    function __construct() {
        $this->queryFunction = new QueryFunction();
        $connex = new Connection();
        $this->connection = $connex->getConnection();
    }

    function showAll() {
        $connection = $this->connection;
        $query = "SELECT * FROM section";
        $val = [];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }

    function search($searchVal) {
        $connection = $this->connection;
        $query = "SELECT * FROM section WHERE section_id like ? OR section_name like ?";
        $val = [$searchVal, $searchVal];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }
    function modif($name,$newName,$pageId){
        $connection=$this->connection;
        $sqlVerification="select * from section where section_name=?;";
        $valverification=[$newName];
        if ($this->queryFunction->verification($connection, $sqlVerification, $valverification)==true && $name != $newName){
            // echo "Admin allready exists";
            // No save because the admin allready exists
            return "Section allready exists";
        }else{
            // Saving process
            $query= "update section set section_name=?, page_id=?  where section_name=?";
            $val=[$newName,$pageId,$name];
            $this->queryFunction->addNewInformation($connection,$query,$val);
        }
    }
    function delete($sectionIdForDelete) {
        $connection = $this->connection;
        $query = "DELETE FROM section WHERE section_id = ?";
        $val = [$sectionIdForDelete];
        $this->queryFunction->addNewInformation($connection, $query, $val);
    }
}
class Photo {
    private $photo_name;
    private $photo_type;
    private $section_id;
   
    function __construct($photo_name, $photo_type, $section_id) {
        $this->photo_name = $photo_name;
        $this->photo_type = $photo_type;
        $this->section_id = $section_id;
    }

    function save() {
        $connexion = new Connection();
        $connection = $connexion->getConnection();
        $queryFunction = new QueryFunction();

        $sqlInsertion = "INSERT INTO photo (photo_name, photo_type, section_id) VALUES (?, ?, ?);";
        $valInsertion = [$this->photo_name, $this->photo_type, $this->section_id];
        $queryFunction->addNewInformation($connection, $sqlInsertion, $valInsertion);
        return "Saving done well";
    }
}

class PhotoAction {
    private $queryFunction;
    private $connection;

    function __construct() {
        $this->queryFunction = new QueryFunction();
        $connex = new Connection();
        $this->connection = $connex->getConnection();
    }

    function showAll() {
        $connection = $this->connection;
        $query = "SELECT * FROM photo";
        $val = [];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }

    function search($searchVal) {
        $connection = $this->connection;
        $query = "SELECT * FROM photo WHERE photo_id LIKE ? OR photo_name LIKE ?";
        $val = [$searchVal, $searchVal];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }
    function modif($photoId,$name,$type,$section){
        $connection=$this->connection;
        // Saving process
        $query= "update photo set photo_name=?, photo_type=?, section_id=?  where photo_id=?";
        $val=[$name,$type,$section,$photoId];
        $this->queryFunction->addNewInformation($connection,$query,$val);
        
    }
    function delete($photoIdForDelete) {
        $connection = $this->connection;
        $query = "DELETE FROM photo WHERE photo_id = ?";
        $val = [$photoIdForDelete];
        $this->queryFunction->addNewInformation($connection, $query, $val);
    }
}
class Historic {
    private $histor_date;
    private $histor_time;
    private $admin_mail;
   
    function __construct($histor_date, $histor_time, $admin_mail) {
        $this->histor_date = $histor_date;
        $this->histor_time = $histor_time;
        $this->admin_mail = $admin_mail;
    }

    function save() {
        $connexion = new Connection();
        $connection = $connexion->getConnection();
        $queryFunction = new QueryFunction();

        $sqlInsertion = "INSERT INTO historic (histor_date, histor_time, admin_mail) VALUES (?, ?, ?);";
        $valInsertion = [$this->histor_date, $this->histor_time, $this->admin_mail];
        $queryFunction->addNewInformation($connection, $sqlInsertion, $valInsertion);
        return "Saving done well";
    }
}

class HistoricAction {
    private $queryFunction;
    private $connection;

    function __construct() {
        $this->queryFunction = new QueryFunction();
        $connex = new Connection();
        $this->connection = $connex->getConnection();
    }

    function showAll() {
        $connection = $this->connection;
        $query = "SELECT * FROM historic";
        $val = [];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }

    function search($searchVal) {
        $connection = $this->connection;
        $query = "SELECT * FROM historic WHERE histor_id LIKE ? OR admin_mail LIKE ?";
        $val = [$searchVal, $searchVal];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }
    function modif($id,$date,$time,$mail){
        $connection=$this->connection;
        // Saving process
        $query= "update historic set histor_date=?, histor_time=? where histor_id=?";
        $val=[$date,$time,$id];
        $this->queryFunction->addNewInformation($connection,$query,$val);
        
    }
    function delete($historIdForDelete) {
        $connection = $this->connection;
        $query = "DELETE FROM historic WHERE histor_id = ?";
        $val = [$historIdForDelete];
        $this->queryFunction->addNewInformation($connection, $query, $val);
    }
}


class Description {
    private $descri_content;
    private $section_id;
    function __construct($descri_content, $section_id) {
        $this->descri_content = $descri_content;
        $this->section_id = $section_id;
    }

    function save() {
        $connexion = new Connection();
        $connection = $connexion->getConnection();
        $queryFunction = new QueryFunction();

        $sqlInsertion = "INSERT INTO description (descri_content, section_id) VALUES (?, ?);";
        $valInsertion = [$this->descri_content, $this->section_id];
        $queryFunction->addNewInformation($connection, $sqlInsertion, $valInsertion);
        return "Saving done well";
    }
}

class DescriptionAction {
    private $queryFunction;
    private $connection;

    function __construct() {
        $this->queryFunction = new QueryFunction();
        $connex = new Connection();
        $this->connection = $connex->getConnection();
    }

    function showAll() {
        $connection = $this->connection;
        $query = "SELECT * FROM description";
        $val = [];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }

    function search($searchVal) {
        $connection = $this->connection;
        $query = "SELECT * FROM description WHERE descri_id LIKE ? OR descri_content LIKE ?";
        $val = [$searchVal, $searchVal];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }
    function modif($descriId,$content,$section){
        $connection=$this->connection;
        // Saving process
        $query= "UPDATE description SET descri_content=?, section_id=? WHERE descri_id=?";
        $val=[$content,$section,$descriId];
        $this->queryFunction->addNewInformation($connection,$query,$val);
        
    }
    function delete($descriIdForDelete) {
        $connection = $this->connection;
        $query = "DELETE FROM description WHERE descri_id = ?";
        $val = [$descriIdForDelete];
        $this->queryFunction->addNewInformation($connection, $query, $val);
    }
}

class Title {
    private $title_content;
    private $section_id;
   
    function __construct($title_content, $section_id) {
        $this->title_content = $title_content;
        $this->section_id = $section_id;
    }

    function save() {
        $connexion = new Connection();
        $connection = $connexion->getConnection();
        $queryFunction = new QueryFunction();

        $sqlInsertion = "INSERT INTO title (title_content, section_id) VALUES (?, ?);";
        $valInsertion = [$this->title_content, $this->section_id];
        $queryFunction->addNewInformation($connection, $sqlInsertion, $valInsertion);
        return "Saving done well";
    }
}

class TitleAction {
    private $queryFunction;
    private $connection;

    function __construct() {
        $this->queryFunction = new QueryFunction();
        $connex = new Connection();
        $this->connection = $connex->getConnection();
    }

    function showAll() {
        $connection = $this->connection;
        $query = "SELECT * FROM title";
        $val = [];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }

    function search($searchVal) {
        $connection = $this->connection;
        $query = "SELECT * FROM title WHERE title_id LIKE ? OR title_content LIKE ?";
        $val = [$searchVal, $searchVal];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }
    function modif($titleId,$content,$section){
        $connection=$this->connection;
        // Saving process
        $query= "UPDATE title SET title_content=?, section_id=? WHERE title_id=?";
        $val=[$content,$section,$titleId];
        $this->queryFunction->addNewInformation($connection,$query,$val);
        
    }
    function delete($titleIdForDelete) {
        $connection = $this->connection;
        $query = "DELETE FROM title WHERE title_id = ?";
        $val = [$titleIdForDelete];
        $this->queryFunction->addNewInformation($connection, $query, $val);
    }
}
class Modification {
    private $modif_date;
    private $modif_time;
    private $admin_mail;
    private $section_id;
   
    function __construct($modif_date, $modif_time, $admin_mail, $section_id) {
        $this->modif_date = $modif_date;
        $this->modif_time = $modif_time;
        $this->admin_mail = $admin_mail;
        $this->section_id = $section_id;
    }

    function save() {
        $connexion = new Connection();
        $connection = $connexion->getConnection();
        $queryFunction = new QueryFunction();

        $sqlInsertion = "INSERT INTO modification (modif_date, modif_time, admin_mail, section_id) VALUES (?, ?, ?, ?);";
        $valInsertion = [$this->modif_date, $this->modif_time, $this->admin_mail, $this->section_id];
        $queryFunction->addNewInformation($connection, $sqlInsertion, $valInsertion);
        return "Saving done well";
    }
}

class ModificationAction {
    private $queryFunction;
    private $connection;

    function __construct() {
        $this->queryFunction = new QueryFunction();
        $connex = new Connection();
        $this->connection = $connex->getConnection();
    }

    function showAll() {
        $connection = $this->connection;
        $query = "SELECT * FROM modification";
        $val = [];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }

    function search($searchVal) {
        $connection = $this->connection;
        $query = "SELECT * FROM modification WHERE modif_id LIKE ? OR admin_mail LIKE ?";
        $val = [$searchVal, $searchVal];
        return $this->queryFunction->showInformation($connection, $query, $val);
    }

    function delete($modifIdForDelete) {
        $connection = $this->connection;
        $query = "DELETE FROM modification WHERE modif_id = ?";
        $val = [$modifIdForDelete];
        $this->queryFunction->addNewInformation($connection, $query, $val);
    }


}
?>