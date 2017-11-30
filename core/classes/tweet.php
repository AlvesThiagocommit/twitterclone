<?php
class Tweet Extends User {
    protected $pdo;

    function __construct($pdo){
        $this->pdo = $pdo;
    }
}
?>