<?php
$container = "";
foreach($nahravka as $nahravka){
    $container .= "<a href='{$nahravka['link']}' target='_blank' class='nahravka'>";
    $container .= "<h2>{$nahravka['title']} ({$nahravka['size']})</h2>";
    $container .= '</a>';
}


return $container;