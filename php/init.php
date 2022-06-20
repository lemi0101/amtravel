<?php      
     $serverName = 'localhost';
     $userName   = 'root';
     $password   = '';
     $dbName     = 'amtravel';

    // $serverName = 'sql109.epizy.com';
    // $userName   = 'epiz_31416714';
    // $password   = 'f42IMGgoHPL6l';
    // $dbName     = 'epiz_31416714_coursemanagement';

    try {
       $db = new PDO("mysql:host=$serverName;port=3306;dbname=$dbName", $userName,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    }
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    
?>