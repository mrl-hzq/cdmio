<?php
session_start();

if (!isset($_SESSION['stu_matric_id']) || (trim($_SESSION['stu_matric_id']) == '')) 
{
    header("location: student_information_form.php");
    exit();
}
$session_id = $_SESSION['stu_matric_id'];
?>