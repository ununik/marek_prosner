<?php

/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 14.10.15
 * Time: 16:25
 */
class O_nas extends Connection
{
    public function getONas(){
        $db = parent::connect();
        $result = $db->prepare("SELECT * FROM `o_mne` limit 1");
        $result->execute(array());
        $o_mne = $result->fetch();
        return $o_mne;
    }
}