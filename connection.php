
<?php error_reporting (E_ALL ^ E_NOTICE);
        $server = "localhost";
        $username = "root";
        $password = "magento242";
        $db_name = "trip";
        $conn = mysqli_connect($server, $username, $password, $db_name);

        if (!$conn){
            die("connection to this database failed due to ".mysqli_connect_error()); 
        }
        echo "Sucsess connecting to the database";

?>
        