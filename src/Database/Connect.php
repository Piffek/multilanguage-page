<?php
namespace Src\database;
class Connect{
    private $config;
    
    public function __construct($config){
        try {
            $this->dbh = new \PDO("mysql:
                host=".$config['database']['db_host'].";
                dbname=".$config['database']['db_name']."", 
                $config['database']['user'], 
                $config['database']['pass']);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public function nav(){
      $stmt = $this->dbh->prepare('SELECT `nav` FROM pl');
      $stmt->execute();
      
      return $stmt->fetchAll();
    }
}
?>