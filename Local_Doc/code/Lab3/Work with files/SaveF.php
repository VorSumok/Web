<?php
function redirectToHome(): void
{
    header('Location: /Form.php');
    exit();
}

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description'])){
    redirectToHome();
}

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$desc = $_POST['description'];

$filePath = "categories/{$category}/{$email}/{$title}.txt";

if (false === file_put_contents($filePath, $desc)){
    throw new Exception('Something went wrong.');
}
redirectToHome();
