<!-- API for products -->

<?php

include 'connect.php';

function getAllProducts() {
    $query = "SELECT * FROM product";
    $cn = ConnectDB(); // COnnect DB
    $result = $cn -> query($query); // Executing query

    $data = [];
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }

    return $data;
}