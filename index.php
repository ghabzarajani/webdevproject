<?php
    include_once("dbConnection/msqlconfig_connection.php");
    include_once("function/fetch.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Sample CRUD</title>
    </head>
    <body>
        <h1>My Subjects</h1>
        <a href="forms/addform.php">Add Subject</a><br/><br/>
        <table width='100%' border= 1>
            <tr bgcolor='#CCCCCC'>
                <td>ID</td>
                <td>Subject code</td>
                <td>Subject Name</td>
                <td>syllabus_id</td>
                <td>syllabus_code</td>
                <td>syllabus_author</td>
                <td>Action</td>
            </tr>
            <?php
                while($res = mysql_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['subject_id']."</td>";
                    echo "<td>".$res['subject_code']."</td>";
                    echo "<td>".$res['subject_name']."</td>";
                    echo "<td>".$res['syllabus_id']."</td>";
                    echo "<td>".$res['syllabus_code']."</td>";
                    echo "<td>".$res['syllabus_author']."</td>";
                    echo "<td><a href=\"forms/editform.php?id=$res[subject_id\">Edit</a> | 
                            <a href=\"functions/delete.php?id=$res[subject_id]\"
                            onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
            ?>  
        </table>
    </body>
</html>