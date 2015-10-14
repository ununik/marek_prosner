<?php
$container = "<table id='kontakt'>";
foreach($kontakt_db as $kontakt_db){
    $container .= "<tr><td class='kontakt_left'>{$kontakt_db['nadpis']}:</td><td>{$kontakt_db['hodnota']}</td></tr>";
}
$container .= "</table>";

return $container;