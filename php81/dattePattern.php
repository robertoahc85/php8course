<?php
$skeleton = "YYYYMMdd";
 
$today = \DateTimeImmutable::createFromFormat('Y-m-d', '2021-04-24');
 
$dtpg = new \IntlDatePatternGenerator("de_DE");
$pattern = $dtpg->getBestPattern($skeleton);
echo "de: ", \IntlDateFormatter::formatObject($today, $pattern, "de_DE"), "\n";
 
$dtpg = new \IntlDatePatternGenerator("en_US");
$pattern = $dtpg->getBestPattern($skeleton);
echo "en: ", \IntlDateFormatter::formatObject($today, $pattern, "en_US"), "\n";

/*
de: 24.04.2021
en: 04/24/2021
*/
?>