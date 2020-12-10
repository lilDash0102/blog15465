<?php

$server = 'localhost';
$user = 'aviloria';
$password = '12345678';
$databaseName = 'blog';

$db = mysqli_connect($server,$user,$password,$databaseName);

mysqli_query($db,"SET NAMES 'utf8'");

