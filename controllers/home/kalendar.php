<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 13.10.15
 * Time: 9:31
 */
$nyni = time();

$nazevDne = ['Po', 'Út', 'St', 'Čt', 'Pá', 'So', 'Ne'];
$nazevMesice = ['leden', 'únor', 'březen', 'duben', 'květen', 'červen', 'červenec', 'srpen', 'zaří', 'říjen', 'listopad', 'prosinec'];
$nazevMesiceGenitiv = ['ledna', 'února', 'března', 'dubna', 'května', 'června', 'července', 'srpna', 'zaří', 'října', 'listopadu', 'prosinece'];
$rok = date('Y', $nyni);
$cisloMesice = date('m', $nyni);
$den = date('j', $nyni);

$firstDay = strtotime(date('Y-m-01', $nyni));
$firstday_num = date('w', $firstDay)-1;
$pocetDniVMesici = cal_days_in_month(CAL_GREGORIAN,date('m', $nyni),date('Y'));
for($i=1;$i<32; $i++){
    $kalendar[$i]['title'] = 'titulek - '.$i;
}
return include_once('views/home/kalendar.php');