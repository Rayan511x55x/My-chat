<?php
// This is a simple example; in a real application, you'd use a database.
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $message = $_POST['message'];

    // You may want to sanitize and validate the message before storing it.

    // Store the message in a session variable for simplicity.
    $_SESSION['chat_messages'][] = ['sender' => 'You', 'message' => $message];
}
?>
