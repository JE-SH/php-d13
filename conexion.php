<<<<<<< HEAD
<?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $db="php-d13";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
    }
=======
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db="php-d13";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: ".$e->getMessage();
    }
>>>>>>> af3ad0572599bfc5cdd8268e94fde3547ff96746
?>