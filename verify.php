<?php
$access_token = 'O34rK9om2MWb2n30OwR2YV7XtJy0x/eWQTct2yHj7177DYsKTAjAhPyKQaYmdplws9dSb1wRRwoQiCZNuUHdUsU1b/FzSFkfYMHrA2SW14SI5sEvg08sqpPhSgXn3m8txggn6YfDVWY0+c8Rrf1p9wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;