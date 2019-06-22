<?php
session_start();
include "model/configure.php";

if (isset($_POST["update"])) {

    $fileName = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {

        $file = fopen($fileName, "r");

        $truncate = "TRUNCATE TABLE card_details";
        $truncate_result = mysqli_query($conn, $truncate);

        $row = 1;
        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            if ($row == 1){
                $row++;
                continue;
            } else {
                $sqlInsert = "INSERT into card_details (customer,po_date,po_no,item,grade,pos,des,note,type,item_name,week,qty) values ('" . $column[1] . "','" . $column[2] . "','" . $column[3] . "','" . $column[4] . "','" . $column[5] . "','" . $column[6] . "','" . $column[7] . "','" . $column[8] . "','" . $column[9] . "','" . $column[10] . "','" . $column[11] . "','" . $column[12] . "')";
                $result = mysqli_query($conn, $sqlInsert);
                header('Location: admin.php');
            }
        }
    }
}
?>
