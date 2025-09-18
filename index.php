<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Graduate School App</title>
</head>
<body>
    <h2>Graduate School App</h2>
    <form action="courses.php" method="post">
        First Name: <input type="text" name="fname" required><br>
        Last Name: <input type="text" name="lname" required><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>

