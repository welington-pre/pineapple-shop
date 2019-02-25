<?php

define("host","localhost");
define("user","root");
define("pass",null);
define("database","pineapple");

$connect = mysqli_connect(host, user, pass, database) or die('Falha na conexão: '.mysqli_connect_error());