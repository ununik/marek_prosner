<?php

$clanek = new Clanek();
$clanek = $clanek->get3Clanek();
$clanky = include_once('views/home/clanky.php');


$nahravka = new Nahravka();
$nahravka = $nahravka->getNahravkaAll();
$nahravky = include_once('views/home/nahravky.php');

$kontakt_db = new Kontakt();
$kontakt_db = $kontakt_db->getKontaktAll();
$kontakt = include_once('views/home/kontakt.php');

$kalendar = include_once('controllers/home/kalendar.php');

$footer = include_once('views/home/footer.php');
$o_mne = new O_mne();
$o_mne = $o_mne->getOMne();
$test = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, nibh non gravida venenatis, risus dui dignissim ex, nec bibendum turpis arcu id ligula. Nulla tincidunt placerat sem id luctus. Quisque id nibh non neque mollis sagittis. Suspendisse luctus placerat mi ac maximus. In est neque, placerat ut lacus eget, feugiat luctus massa. Duis pretium leo id quam egestas blandit. Duis quis maximus ante, et laoreet arcu. Integer posuere non purus ac suscipit. Suspendisse feugiat fermentum massa quis tincidunt. Suspendisse consectetur neque vitae tincidunt ullamcorper. Curabitur vehicula malesuada lacus eu pellentesque. In vulputate semper leo quis eleifend. Duis vel augue arcu. Nunc vulputate lorem nec nibh placerat, sed laoreet diam auctor. Nulla ac lacus est.

Aliquam erat volutpat. Cras elit neque, condimentum ut dapibus quis, feugiat vitae risus. Sed euismod elit lorem, sit amet scelerisque sapien consectetur non. Donec luctus sit amet lectus non rutrum. Sed dictum lobortis nibh at.";

return include_once('views/home/home-html.php');
