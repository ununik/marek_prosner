<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 14.10.15
 * Time: 16:01
 */
class Clanek extends Connection
{
    public function get3Clanek(){
        $db = parent::connect();
        $result = $db->prepare("SELECT * FROM `clanek` ORDER BY `id` DESC limit 3");
        $result->execute(array());
        $clanek = $result->fetchAll();
        return $clanek;
    }
}