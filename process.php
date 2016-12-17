<?php
 session_start();
 include 'config/config.php';
 include 'lib/Database.php';
  $db = new Database();
//Get Total no of questions
$query1 = "SELECT * FROM `questions`";
$result = $db->select($query1);
$total = $result->num_rows;
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}
if ($_POST) {
    $number = $_POST['number'];
    $selected_choice = $_POST['choice'];
    $next = $number+1;
}
//Get Correct Choice
$query = "SELECT * FROM `choices` WHERE `question_number` = $number AND `is_correct` = 1";
$result = $db->select($query);
$row = $result->fetch_assoc();
$correct_choice = $row['id'];
//Check for correct choice
if($selected_choice == $correct_choice){
    $_SESSION['score']++;
}

//Check for question number
if ($number == $total) {
    header("Location: final.php");
    exit();
} else {
    header("Location: questions.php?n=".$next);
}