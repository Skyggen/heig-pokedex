<?php
/**
 * Created by PhpStorm.
 * User: Adrien
 * Date: 29.05.2018
 * Time: 14:00
 */

class db{

    private $hostname;
    private $username;
    private $password;
    private $database;
    private $driver;
    public $pdo;

    public function __construct($tbConf)
    {
       // $this->hostname = $tbConf['hostname'];
        $this->username = $tbConf['username'];
        $this->password = $tbConf['password'];
        $this->database = $tbConf['database'];
      //  $this->driver = $tbConf['driver'];
        try {
            $this->pdo = new PDO('mysql:host=localhost;dbname=' . $this->database, $this->username, $this->password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch (Exception $exception){var_dump($exception);}
    }
    public function selectQuery ($SQL, array $param){
        $stmt = $this->pdo->prepare($SQL);
        if ($stmt->execute($param)) {
            $tabQuery = array();
            while ($row = $stmt->fetch()) {
                $tabQuery[]= $row;
            }
            return $tabQuery;
        } return null;

    }
    public function insertQuery ($SQL){
        try{
            $this->pdo->exec($SQL);
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        return $this->pdo->lastInsertId();
    }

}