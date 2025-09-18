<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['accomplishments'] = $_POST['accomplishments'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Graduate School App</title>
</head>
<body>
    <h2>Confirm Your Application</h2>
    <p>Name: <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></p>
    <p>Courses Taken:</p>
    <ul>
        <?php foreach ($_SESSION['courses'] as $course): ?>
            <li><?php echo $course; ?></li>
        <?php endforeach; ?>
    </ul>
    <p><strong>Accomplishments:</strong></p>
    <p><?php echo $_SESSION['accomplishments']; ?></p>

    <form action="results.php" method="post">
        <input type="submit" value="Confirm and Submit">
    </form>
</body>
</html>

