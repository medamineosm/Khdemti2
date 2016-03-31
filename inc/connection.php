<?php

class Database {
  private $_connection;
  private static $_instance ;  // the single instance
  private $_host = "localhost";
  private $_username="root";
  private $_password="";
  private $_database="harfadb";

  private $server_username="leanlabz";
  private $server_password="leanlabz";
  private $server_database="leanlabz";


  public static function getInstance(){
    if(!self::$_instance){
      self::$_instance = new self();
    }
    return self::$_instance ;
  }

// constructor
public function __construct(){
  if(getenv("SERVER_LEANLABZ")=="SERVER_LEANLABZ"){
    $this->_connection = new mysqli($this->_host,$this->server_username,$this->server_password,$this->server_database);
  }
  else {
    $this->_connection= new mysqli($this->_host,$this->_username,$this->_password,$this->_database);
  }
  //error handling
  if(mysqli_connect_errno()){
    die("Database connection failed :" . mysqli_connect_error() . "(" . mysqli_connect_errno() .")");
  }
}

//Magic method clone is empty to prevent deplication of connection
private function __clone(){}

//Get mysqli connection
  public  function getConnection() {
    return $this->_connection ;
  }

// Method pour inserer une personne
public function insertPerson ($nom,$email,$tel,$age,$ville,$emploi,$prenom){
  $mysqli = $this->getConnection();
  $result="";
  $result=$mysqli->query("SELECT * FROM personne WHERE email= '".$email."' ");
  if(mysqli_num_rows($result)==0){
    $sql = "INSERT INTO personne (nom,email,tel,age,ville,emploi,date_inscription,prenom) VALUES ('".$nom."', '".$email."','".$tel."','".$age."','".$ville."','".$emploi."',NOW(),'".$prenom."')" ;
    if($mysqli->query($sql)== TRUE) { $result ="success";}
    else {
      echo "Error : " .$sql . "<br>" . $mysqli->error ; $result="error" ;
    }

    mysqli_close($mysqli);
    return $result;
  }

  else {
    $result="exists";

    return $result ;
  }
}
public  function getPerson() {
  $mysqli = $this->getConnection();
  $result="" ;
  $result=$mysqli->query("SELECT * FROM personne");
  return $result;
}

 public function getAnalytics() {
   $mysqli = $this->getConnection();
   $result = $mysqli->query("SELECT DATE (date_inscription) as 'Date', count(*) as 'Inscriptions' FROM personne group by DATE (date_inscription)" );
   return $result;
 }
}


?>
