<?php
try {
    include '../sql/connection.php';
    include '../sql/dbfunction.php';
    
    $questions = list_user_question($pdo, $_POST['id']);
    
    $title = 'Question list';

    ob_start();
    include 'list_user_question.html.php';
    $output = ob_get_clean();
} catch (PDOException $e) {
    $title = 'An error has occured';
    $output = 'Database error: ' . $e->getMessage();
}
include 'layout.html.php';
