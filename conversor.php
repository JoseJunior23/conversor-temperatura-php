<?php

$temp = $_POST['temperatura'];
$newTemp = round(($temp - 32) * (5 / 9), 2);

echo 'A Temperatura ' . $temp . ' Fahrenheit, é equivaletente  a : ' . $newTemp . ' Celcius';
