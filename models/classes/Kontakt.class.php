<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 14.10.15
 * Time: 15:51
 */
class Kontakt extends Connection
{
    public function getKontaktAll(){
        $db = parent::connect();
        $result = $db->prepare("SELECT * FROM `kontakt`");
        $result->execute(array());
        $kontakt = $result->fetchAll();
        return $kontakt;
    }
}