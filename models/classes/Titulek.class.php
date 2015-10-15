<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 15.10.15
 * Time: 11:54
 */
class Titulek extends Connection
{
    public function getTitulek(){
        $db = parent::connect();
        $result = $db->prepare("SELECT * FROM `titulek` limit 1");
        $result->execute(array());
        $titulek = $result->fetch();
        return $titulek;
    }
}