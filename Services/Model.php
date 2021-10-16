<?php
namespace Services;

use Db\DB_PDO;

class Model {

    public $table;
    private $query_string;

    public function __construct() {
        DB_PDO::connection();
    }

    public function select($str) {
        $this->query_string = "SELECT ". $str ." FROM ". $this->table;
        return $this;
    }

    public function delete() {
        
    }

    public function create($list_items) {

        $fields = '(';
        $questions = '(';

        foreach($list_items as $key => $val) {
            $fields .= $key.",";
            $questions .= ':'.$key.",";
        }
        
        $fields = substr($fields,0,-1).")";
        $questions = substr($questions,0,-1).")";

        $this->query_string = "INSERT INTO ". $this->table ." ". $fields ." VALUES ". $questions ."";
        return DB_PDO::$pdo->prepare($this->query_string)->execute($list_items);
    }

    public function update() {

    }

    public function where($str) {
        $this->query_string .= " WHERE ". $str;
        return $this;
    }

    public function get() {
        $data = DB_PDO::$pdo->query($this->query_string);
        return $data;
    }

}