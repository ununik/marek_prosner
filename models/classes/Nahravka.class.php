<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 14.10.15
 * Time: 16:17
 */
class Nahravka extends Connection
{
    public function getNahravkaAll(){
        $db = parent::connect();
        $result = $db->prepare("SELECT * FROM `nahravka` ORDER BY `id` DESC");
        $result->execute(array());
        $nahravka = $result->fetchAll();
        return $nahravka;
    }
}