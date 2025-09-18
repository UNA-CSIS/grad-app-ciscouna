<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['courses'] = $_POST['courses'] ?? [];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Graduate School Application</title>
</head>
<body>
    <h2>Personal Accomplishments</h2>
    <form action="confirm.php" method="post">
        <textarea name="accomplishments" rows="8" cols="60" placeholder="Describe your accomplishments here..." required></textarea><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
