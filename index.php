<?php

$link = mysqli_connect('localhost', 'root', 'root', 'maga2');

$query = 'SELECT * FROM countries';

$result = mysqli_query($link,$query);

$res = mysql_fetch($result);

echo '<pre>';

var_dump($link);

echo '</pre>';
