<?php
    //fetching data
    $query = "SELECT * FROM tblsubjects LEFT JOIN tblsyllabus ON tblsyllabus.subject_id = tblsubjects.subjectid;";
    $result = msqli_query($dbc, $query); //using mysqli_query
?>