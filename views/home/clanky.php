<?php
$container = "";
for($i = 0; $i < 3; $i++){
    $container .= "<div id='clanek_$i'>";
    $container .= "<h2>{$clanek[$i]['nadpis']}</h2>";
    $container .= "<div>{$clanek[$i]['text']}</div>";
    $container .= '</div>';
}
$container .= "<script>clanek(0)</script>";
$container .= "<div id='clanek_prepinac'>
                <div class='clanek_tecka' onclick='clanek(0)'>.</div>
                <div class='clanek_tecka' onclick='clanek(1)'>.</div>
                <div class='clanek_tecka' onclick='clanek(2)'>.</div>
                </div>
                ";

return $container;