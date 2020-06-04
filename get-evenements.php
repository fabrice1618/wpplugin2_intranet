<?php

$aEvenement = array();

$sJson = file_get_contents("http://wpplugin/wp-json/wp/v2/f1618_evenements");
$aData = json_decode($sJson, true);

foreach ( $aData as $aRow ) {
    array_push($aEvenement, [
        $aRow['id'],
        $aRow['title']['rendered'],
        $aRow['content']['rendered'],
        $aRow['date-evenement'],
        $aRow['reservations-evenement']
    ]);
}

print_r($aEvenement);
