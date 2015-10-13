<?php
/**
 * Created by PhpStorm.
 * User: ununik
 * Date: 13.10.15
 * Time: 9:32
 */
$container = "<table id='kalendar'>";
for($i=0; $i<7; $i++){
    $container .= "<th>{$nazevDne[$i]}</th>";
}
$container .= "<tr>";
for($i=0; $i<$firstday_num; $i++){
    $container .= "<td></td>";
}
$konec_radku = $firstday_num+1;
for($i = 1; $i <= $pocetDniVMesici; $i++){
    if($konec_radku != 7){
        $container .= "<td title='{$kalendar[$i]['title']}' onclick='kalendarTtile(this)'>$i</td>";
    }else{
        $container .= "<td  title='{$kalendar[$i]['title']}' onclick='kalendarTtile(this)'>$i</td></tr><tr>";
        $konec_radku = 0;
    }
    $konec_radku++;
}
for($konec_radku; $konec_radku <= 7; $konec_radku++){
    $container .= "<td></td>";
    if($konec_radku == 7){
        $container .= "</tr><tr>";
    }
}
$container .= "<td colspan='7'>dnes je $den. {$nazevMesiceGenitiv[$cisloMesice-1]} $rok</td>";
$container .= "</table>";
return $container;