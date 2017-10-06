<?php
namespace Src;
class Connect{
    private $config;
    
    public function __construct(){
		$config = include 'config.php';
		
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
    
    public function get($what){
        $stmt = $this->dbh->prepare('SELECT '.$what.' FROM pl');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    
}
?>