<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $sessionConf = $_SESSION['confirmation'];
    $postConf = $_POST['confirmation'];

    if ($sessionConf === $postConf) {
        echo "CSRF token verified!";
    } else {
        echo "CSRF token mismatch!";
    }
}
?>
