<?php

include("db.php");

if (isset($_POST['save_task'])){
$name = $_POST['name'];
$type = $_POST['type'];

$query= "INSERT INTO task(name, type) VALUES ('$name', '$type')";
$result = mysqli_query($conn, $query);
if (!$result){
    die("Query fallo");
}

$_SESSION['message'] = 'Datos guardados con exito';
$_SESSION['message_type'] = 'success';
header("Location: index.php ");
}

?>