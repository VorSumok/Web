<?php
session_start();
if(empty($_SESSION)){
    header('Location /');
    exit();
}
?>

<title>FullForm</title>
<ul>
    <?php
    echo "ID:";
    foreach ($_SESSION['id'] as $elem):
        ?>
        <li>
            <?php
            echo $elem, ' ';
            ?>
        </li>
    <?php
    endforeach;
    ?>
</ul>
<form action="index.php" method="get">
    <input type="submit" value="Back">
</form>
