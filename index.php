<?php
if(!isset($_GET['page']) || $_GET['page']==""){
    $getPage = 'home';
}else{
    $getPage = $_GET['page'];
}
$title = "Marek Prosner";
$navigation = include_once('views/navigation.php');

$content = include_once("controllers/$getPage.php");
print include_once('views/page.php');