<?php
$container = "";
foreach($nahravka as $nahravka){
    $container .= "<a href='{$nahravka['odkaz']}' target='_blank' class='nahravka'>";
    $container .= "<h2>{$nahravka['nadpis']}";
    if($nahravka['nadpis'] != ""){
        $container .= " ({$nahravka['velikost']})";
    }
    $container .= "</h2>";
    $container .= '</a>';
}


return $container;