<?php
namespace Src;
class Connect{
    public $dbh, $config;
    
    public function __construct(){
		$this->config = include 'config.php';
		
        try {
			$dsn = 'mysql:dbname='.$this->config['database']['db_name'].';host='.$this->config['database']['db_host'].'';
			$user = $this->config['database']['user'];
			$password = $this->config['database']['pass'];
            $this->dbh = new \PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    
    public function get(string $what) : array{
        $stmt = $this->dbh->prepare('SELECT '.$what.' FROM co_uk');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
}
?>