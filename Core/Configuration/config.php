<?php
//Server Connectie
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_NAME', 'Chewie');
 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 

if($link === false){
    die("ERROR: Kan niet verbinden met het database: " . mysqli_connect_error());
} else {

    echo '';
}

//Website Settings (Soon)

$SSL_Encryption = 'http';

$URL_Redirect = 'localhost';

$Domain_Type = '';  //Leave blank if using on 127.0.0.1 (localhost)

//File & Folder Tree Settings

$Core_Folder = 'Core';

$HTML_Folder = 'HTML';

$IMP_Folder = 'Internal';

$Scale_Folder = 'Console';

$Back_Slash = '/';

//Amount Of Points Each Refresh

$amount = 1;

$str_score = 1;
