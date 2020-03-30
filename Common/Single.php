<?php
namespace Common;
class Db{


    private static $instance;
    private $link;
    private function __construct($hostname,$username,$pwd,$db){
        $this->link=mysqli_connect($hostname,$username,$pwd);
        mysqli_select_db($db,$this->link);
        if(!$this->link){
            die('Could not connect: ' . mysql_error());
        }
    }
    private function __clone(){}  //防止被克隆

    public static function  getInstance($hostname,$username,$pwd,$db){
        if(!(self::$instance instanceof self)){
            self::$instance=new self($hostname,$username,$pwd,$db);
        }
        return self::$instance;
    }

    public function query ($query){
        $this->query=mysqli_query($query,$this->link);
        return $this->query;
    }
    public function num_rows($query)

    {
        $or=$this->query($query);
        return $this->result = mysqli_num_rows($or);

    }

}