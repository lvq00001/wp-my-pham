<?php

require 'connection.php';
$sql = 'SELECT * FROM san_pham';
$statement = $conn->query($sql);
$products = $statement->fetchAll();