<?php
    include './includes/db_connection.php';
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $playerName = $_POST["name"];
        $nationalityID = $_POST["nationality"];

        echo($nationalityID);
    }         
    
     else 
    echo ('error ...')
?>