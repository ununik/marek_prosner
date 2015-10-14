<?php
$container = "<div id='header'><h1>Marek Prosner</h1></div>";
$container .= "<table id='home_table'>";
/**
 * radek 1
 */
$container .= "<tr><td>";
    $container .= "<h2 class='h2_left'>Články</h2>";
$container .= "</td><td class='td_content_right'>";
$container .= $clanky;
$container .= "</td></tr>";

/**
 * radek 2
 */
$container .= "<tr><td class='td_content_left'>";
$container .= "<div id='nahravky'>$nahravky</div>";
$container .= "</td><td>";
    $container .= "<h2 class='h2_right'>Nahrávky</h2>";
$container .= "</td></tr>";

/**
 * radek 3
 */
$container .= "<tr><td>";
$container .= "<h2 class='h2_left'><a href='index.php?page=o_mne'>O mně</a></h2>";
$container .= "</td><td class='td_content_right'>";
$container .= "<a href='index.php?page=o_mne'>$test</a>";
$container .= "</td></tr>";

/**
 * radek 4
 */
$container .= "<tr><td class='td_content_left'>";
$container .= $kalendar;
$container .= "</td><td>";
$container .= "<h2 class='h2_right'>Kalendář</h2><div id='kalendarInner'></div>";
$container .= "</td></tr>";

/**
 * radek 5
 */
$container .= "<tr><td>";
$container .= "<h2 class='h2_left'>Kontakt</h2>";
$container .= "</td><td class='td_content_right'>";
$container .= $kontakt;
$container .= "</td></tr>";

$container .= "<tr><td colspan='2' class='content_both'>$footer</td></tr>";

$container .= "</table>";




return $container;