<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === "host" && $password === "pass") {
        $message = "Login success!";
    } else {
        $message = "Login failed!";
    }
    echo "<div id='splash'>$message</div>";
}
?>
<form method="POST">
    Username: <input name="username"><br>
    Password: <input name="password" type="password"><br>
    <button type="submit">Login</button>
</form>
