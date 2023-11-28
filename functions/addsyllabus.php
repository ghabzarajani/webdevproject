<!DOCTYPE html>
<html>
    <head>
        <title>Add syllabus</title>
    </head>
    <body>
        <?php
            //including the syllabusbase connection file
            include_once("../dbConnection/mysqlconfig_connection.php");

            if(isset($_POST['Submit'])) {
                $code = $_POST['code'];
                $author = $_POST['author']
                $subject = $_POST['subject']
                //checking empty fields
                if(empty($code) || empty($author)) {
                    if(empty($code)) {
                        echo "<font color='red'>Subject code field is empty.</font><br/>";
                    }
                    if(empty($author)) {
                        echo "<font color='red'>Subject author field is empty.</font><br/>";
                    }
                    //link to the previous page
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";      
                }
                else {
                    //if all the fields are filled (not empty)
                    //insert syllabus to syllabusbase
                    $result = mysqli_query($dbc, "INSERT INTO tblsyllabus(subject_code, subject_name, subject_author) VALUES('$code',''$name' '$author')" );
                    echo "<font color='green'>syllabus added succesfully.";
                    echo "<br/><a href='../index.php'>View Result</a>";
                }
            }
        ?>    
    </body>
</html>