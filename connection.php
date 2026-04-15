<?php
$host = "sql200.infinityfree.com"; 
$user = "if0_41670861";            
$pass = "Batubara10";          
$db   = "if0_41670861_PINLIT_LIBRARY";    

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
