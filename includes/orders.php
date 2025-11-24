<!-- API for Orders -->

<?php

include 'connect.php';

function getAllOrders() {
    $query = "SELECT invoice.cus_code, customer.cus_fname, customer.cus_initial ,customer.cus_lname, invoice.inv_date, invoice.inv_subtotal, invoice.inv_tax, invoice.inv_total FROM invoice INNER JOIN customer ON invoice.cus_code = customer.cus_code;";
    $cn = ConnectDB(); // COnnect DB
    $result = $cn -> query($query); // Executing query

    $data = [];
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }

    return $data;
}