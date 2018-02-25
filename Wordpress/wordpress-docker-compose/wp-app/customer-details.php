<?php
// Get data
$customer_name = $_POST["customer_name"];
$customer_email = $_POST["customer_email"];
$customer_sex = $_POST["customer_sex"];
$customer_age = $_POST["customer_age"];

// Database connection
$conn = mysqli_connect("db","root","password","wordpress");
if(!$conn) {
    die("Problem in database connection: " . mysql_error());
}

// Data insertion into database
$query = "INSERT INTO 'wordpress'.'customer_details' ( 'customer_name', 'customer_email', 'customer_sex', 'customer_age' ) VALUES ( $customer_name, $customer_email, $customer_sex, $customer_age )";
mysqli_query($conn, $query);

// Redirection to the success page
header("Location: http://192.168.99.100:5555/success-page/");
?>