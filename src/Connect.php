<?php
namespace Src;
class Connect{
    private $config;
    
    public function __construct(){
		$config = include 'config.php';
		
		try {
		    $dsn = 'mysql:dbname='.$config['database']['db_name'].';host='.$config['database']['db_host'].'';
		    $user = $config['database']['user'];
		    $password = $config['database']['pass'];
		    $this->dbh = new \PDO($dsn, $user, $password);
<<<<<<< HEAD
		} catch (\PDOException $e) {
=======
		} catch (PDOException $e) {
>>>>>>> bd596c7e437565cad616af684bf878418797767d
		    print "Error!: " . $e->getMessage() . "<br/>";
		    die();
		}
    }
    
    public function get(string $what) : array{
        $stmt = $this->dbh->prepare('SELECT '.$what.' FROM pl');
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    
}
?>