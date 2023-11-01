<?php
    // including the database connection file
    include_once("../dbConnection/msqlconfig_connection.php");
    if(isset($POST['update'])) {
        $id = $_POST['id'];
        $code=$_POST['code'];
        $name=$_POST['name'];
        // checking empty fields
        if(empty($code) || empty($name)) {
            if(empty($code)) {
                echo "<font color='red'>Subject Code field is empty.</font><br/>";
            }
            if(empty($name)) {
                echo "<font color='red'>Subject Name field is empty.</font><br/>";
            }
        }
        else {
            //updating the table
            mysqli_query($dbc, "UPDATE tblsubject SET subject_code='$code', subject_name='$name' WHERE subject_id='$id'");
            //redirecting to the display page. In our case, it is index.php
            header("Location: ../index.php");
        }
    }
?>