<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .my_select{
            width: 200px;
            height: 60px;
        }
    </style>
</head>
<body>
<form action="db.php" method="post">
    <label>Ваш email: <input type="email" name="email" required></label>
    <label>Название обьявления: <input type="text" name="title" required></label>
    <label>Текст обьявления: <textarea rows="10" name="description" required></textarea></label>
    <label>Категория <select name="category" required>
            <?php
            $categories = array("alive", "not alive", "others");
            foreach ($categories as $category) {
                echo "<option value=\"$category\">$category</option>";
            }
            ?>
        </select>
    </label>
    <input type="submit" value="Save" class="my_button"><br>
    <br>
</form>
</body>
</html>