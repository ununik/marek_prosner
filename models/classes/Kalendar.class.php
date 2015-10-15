<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 15.10.15
 * Time: 12:01
 */
class Kalendar extends Connection
{
    /**
     * @param $first_day_of_Month - timestamp
     * @return array
     */
    public function getOneMonth($first_day_of_Month){
        $db = parent::connect();
        $first_day_of_NextMonth = strtotime('next month', $first_day_of_Month);
        $result = $db->prepare("SELECT * FROM `kalendar` WHERE(`timestamp`>=? && `timestamp`<?) ORDER BY `timestamp` DESC");
        $result->execute(array($first_day_of_Month, $first_day_of_NextMonth));
        $nahravka = $result->fetchAll();
        return $nahravka;
    }
}