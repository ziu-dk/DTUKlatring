<?php

echo base64_encode('testæøå');

echo '<br>';

echo base64_encode('t');

echo '<br>';

$str = "testæ";
echo str_replace('æ', 'ae', $str);



?>