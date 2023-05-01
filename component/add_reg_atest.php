<?php
require_once('../boot.php');

$user_id = $_SESSION['user_id'];

if(isset($_POST['greeting']) && isset($_POST['exam-subject']) && isset($_POST['exam-time']) && isset($_POST['exam-form']))
{
    $greeting = $_POST['greeting'];
    $exam_subject = $_POST['exam-subject'];
    $exam_time = $_POST['exam-time'];
    $exam_form = $_POST['exam-form'];
    $comment = isset($_POST['comment-thank-you']) ? $_POST['comment-thank-you'] : "";
    $text = "$greeting  $exam_subject  $exam_time  $exam_form.";
    $sql = "INSERT INTO `registr` (`user_id`, `text`, `comment`) VALUES ('$user_id', '$text', '$comment')";
    $stmt = get_mysqli()->query($sql);

   header("Location: ../registration.php");
   exit();
}
?>