<?php
namespace Src;
class Connect{
    public $dbh, $config;
    
    public function __construct(){
		ob_start();
		$this->config = include 'config.php';
		ob_get_clean();

		
        try {
			$dsn = 'mysql:dbname='.$this->config['database']['db_name'].';host='.$this->config['database']['db_host'].'';
			$user = $this->config['database']['user'];
			$password = $this->config['database']['pass'];
            $this->dbh = new \PDO($dsn, $user, $password);
			throw new \PDOException('Bad data to database');
        } catch (\PDOException $e) {
             echo $e->getMessage();
        }
    }
    
    public function get(string $what) : array{
		
        $stmt = $this->dbh->prepare('SELECT '.$what.' FROM co_uk');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }

}
