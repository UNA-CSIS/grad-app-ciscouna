<?php
session_start();

function evalApp($accomplishments, $total, $courses) {
    $threshold = 0.5; // 50%

    $courseRatio = ($courses / $total);

    return $courseRatio >= $threshold;
}

$total = 5;
$courses = count($_SESSION['courses']);
$accomplishments = $_SESSION['accomplishments'];

$accepted = evalApp($accomplishments, $total, $courses);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Graduate School App</title>
</head>
<body>
    <h2>Application Results</h2>
    <?php if ($accepted): ?>
        <p>Congratulations <?php echo $_SESSION['fname']; ?>! You are accepted for a phone interview.</p>
    <?php else: ?>
        <p>Sorry <?php echo $_SESSION['fname']; ?>, your application was rejected.</p>
    <?php endif; ?>
</body>
</html>

