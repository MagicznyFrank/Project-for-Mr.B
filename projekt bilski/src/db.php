<?php

namespace src;
use \PDO;

class db
{
    private $host = 'localhost';
    private $user = 'root';
    private $pwd = '';
    private $dbName = 'zgloszenia';
    private $pdo;

    public function __construct($roomnr,$resnr,$description,$category){
        $this -> roomnr = $roomnr;
        $this -> resnr = $resnr;
        $this -> description = $description;
        $this -> category = $category;

    }


    public function connect_db()
    {


        try {
            $this->pdo = new PDO("mysql:host=$this->host; dbname=$this->dbName",$this->user,$this->pwd);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Połaczenie z bazą się powiodło';


        } catch (PDOException $e) {
            echo "Łączenie nie powiodło się : " . $e->getMessage();
        }
    }
    public function add_record_to_db(){


               $insert = 'Insert into '.$this->dbName.' values("",'.$this->roomnr.','.$this->resnr.',"'.$this->description.'",'.$this->category.')';
               $this->pdo->exec($insert);




    }


}