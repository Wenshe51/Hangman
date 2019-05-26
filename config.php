<?php
class Config{

    protected function connexion(){
        return $dbh = new PDO('mysql:dbname=rexdetesmorts;host=localhost;charset=UTF8','root','');
    }

    public function error($message){
        return ['message' => $message, 'color' => 'danger'];
    }

    public function success($message){
        return ['message' => $message, 'color' => 'success'];
    }