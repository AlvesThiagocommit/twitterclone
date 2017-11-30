<?php
class Follow Extends User {
    protected $pdo;

    function __construct($pdo){
        $this->pdo = $pdo;
    }
}
?>