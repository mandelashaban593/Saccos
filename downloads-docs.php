<?php
include('include/db.php');
$username = "root";
$password = "root";
$database = "saccos_south";
$mysqli = new mysqli("localhost", $username, $password, $database);
?>

<?php

// Downloads cv  files
if (isset($_GET['cur_vit_id'])) {
    $id = $_GET['cur_vit_id'];
    // fetch file to download from database
    $sql = "SELECT * FROM documents WHERE id='".$id."'";
    $runquery5= mysqli_query($db,$sql);
    $file=mysqli_fetch_array($result);

    $filepath = 'admin/php/uploads/'.$file['projectpic'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('admin/php/uploads/' . $file['projectpic']));
        readfile('uploads/' . $file['projectpic']);

        // Now update downloads count
       

        exit;
    }

}





?>
