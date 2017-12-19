<?php>
$stationID = '129';
$co_id = '737';
$stan = file_get_contents('http://api.gios.gov.pl/pjp-api/rest/aqindex/getIndex/'.$stationID);
$co_read = file_get_contents('http://api.gios.gov.pl/pjp-api/rest/data/getData/'.$co_id);
$obj = json_decode($stan);
// $obj2 = json_decode($co_read, true);
$stan = ($obj->stIndexLevel->indexLevelName);
// $co2 = ($obj2->key->values[2]);
if ($stan == 'Bardzo dobry') {
$ikona_lcd = 'i14976';
$stan_lcd = 'Bardzo dobry';
} elseif ($stan == 'Dobry') {
$ikona_lcd = 'i14977';
$stan_lcd = 'Dobry';
} elseif ($stan == 'Umiarkowany') {
$ikona_lcd = 'i14978';
$stan_lcd = 'Umiarkowany';
} elseif ($stan == 'Dostateczny') {
$ikona_lcd = 'i14979';
$stan_lcd = 'Dostateczny';
} elseif ($stan == 'Zły') {
$ikona_lcd = 'i14980';
$stan_lcd = 'Zły';
} elseif ($stan == 'Zły') {
$ikona_lcd = 'i14973';
$stan_lcd = 'Zły';
} elseif ($stan == 'Bardzo zły') {
$ikona_lcd = 'i14981';
$stan_lcd = 'Bardzo zły';
} else {
$ikona_lcd = 'i14973';
$stan_lcd = 'Brak';
}
echo '{
    "frames": [
        {
            "index": 0,
            "text": "'. $stan_lcd .'",
            "icon": "'. $ikona_lcd .'"
        }
    ]
}'
?>
