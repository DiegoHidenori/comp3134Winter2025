<?php
session_start();
$_SESSION['confirmation'] = bin2hex(random_bytes(16));
$token = $_SESSION['confirmation'];
?>
<form action="csfr_action.php" method="POST">
    <input type="hidden" name="confirmation" value="<?= $token ?>">
    <button type="submit">Submit with Token</button>
</form>
