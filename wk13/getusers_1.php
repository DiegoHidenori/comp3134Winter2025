
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$conn = new mysqli("localhost", "phpuser", "phpsecurepass", "comp3134lab9");

$search = $_GET['search'] ?? '';
echo '<form method="GET">
    <input name="search" placeholder="Enter first name">
    <button type="submit">Search</button>
</form>';

if ($search) {
    $sql = "SELECT * FROM users WHERE firstname = \"$search\" AND active = 1";
    echo "<p>DEBUG SQL: $sql</p>";
    $result = $conn->query($sql);

    echo "<table border='1'><tr><th>ID</th><th>Username</th><th>Email</th><th>First Name</th><th>Last Name</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['username']}</td>
            <td>{$row['email']}</td>
            <td>{$row['firstname']}</td>
            <td>{$row['lastname']}</td>
        </tr>";
    }
    echo "</table>";
}
?>
