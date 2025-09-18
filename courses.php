<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['fname'] = $_POST['fname'];
    $_SESSION['lname'] = $_POST['lname'];
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Graduate School App</title>
</head>
<body>
    <h2>Welcome, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?></h2>
    <form action="accomplishments.php" method="post">
        <h3>Select the courses you have taken:</h3>
        <input type="checkbox" name="courses[]" value="Object-oriented programming"> Object-oriented programming<br>
        <input type="checkbox" name="courses[]" value="Systems analysis & design"> Systems analysis & design<br>
        <input type="checkbox" name="courses[]" value="Advanced programming"> Advanced programming<br>
        <input type="checkbox" name="courses[]" value="Introduction to Networking"> Introduction to Networking<br>
        <input type="checkbox" name="courses[]" value="Introduction to Computer Security"> Introduction to Computer Security<br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>

