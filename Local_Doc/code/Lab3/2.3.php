<?php
session_start();
if (!empty($_GET)){
    $_SESSION['id'] = [$_GET['name'], $_GET['age'], $_GET['salary'], $_GET['status']];
    header('Location: /2.3.php');
    exit();
}
?>

<title>FullForm</title>
<form action="" method="get">
    <label for="name">Name</label>
    <input type="text" name="name" required>

    <label for="age">Age</label>
    <input type="number" name="age" min="0" max="150" required>

    <label for="salary">Salary($)</label>
    <input type="number" name="salary" min="0" max="100000" required>

    <label for="status">Status</label>
    <input type="text" name="status" required>

    <input type="submit" value="Accept">
</form>
