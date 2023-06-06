<?php
session_start();
if (!empty($_GET)){
    $_SESSION['surname'] = $_GET['surname'];
    $_SESSION['name'] = $_GET['name'];
    $_SESSION['age'] = $_GET['age'];
    header('Location: /2.2.php');
    exit();
}
?>

<title>Form</title>
<form action="" method="get">
    <label for="surname">Фамилия</label>
    <input type="text" name="surname" required>

    <label for="name">Имя</label>
    <input type="text" name="name" required>

    <label for="age">Возраст</label>
    <input type="number" name="age" min="0" max="150" required>

    <input type="submit" value="Принять">
</form>

<form action="index.php" method="get">
    <input type="submit" value="Назад">
</form>
