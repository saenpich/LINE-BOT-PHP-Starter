<?php
$access_token = 'doRNJQES1qNV2DhN7eqEkcl6J0zag8oU/nVDtFgNDl/d5/dOdiiPm5573cf6qSDNd1slaep9hl2laWzN8U4kQO0R7yUGra/8NM1vZXYlRH5IThktKrt13gYYlE5Q6y5FrgvxJnrUG2/eEYdii+bkIQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
