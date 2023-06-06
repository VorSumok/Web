<form action="" method="GET">
    <label for="text">Your text</label>
    <textarea name = "text" placeholder="Enter text"></textarea>
    <input type = "submit" value = "Count">
</form>

<?php

if (isset($_GET['text']))
{
    $text = $_GET['text'];
    echo "Word count: ", str_word_count($text), " Char count: ", strlen($text);
}
?>

<form action="index.php" method="get">
    <input type="submit" value="Back">
</form>
