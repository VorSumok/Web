<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Board</title>
</head>
<body>
<div id="form">
    <form action="SaveF.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <select name="category" required>
            <?php
            $categories = scandir("categories");
            foreach ($categories as $category){
                if ($category != '.' && $category != '..'){
                    $capital = ucfirst($category);
                    echo "<option value=\"$category\">$capital</option>";
                }
            }
            ?>
        </select>

        <label for="title">Title</label>
        <input type="text" name="title">

        <label for="description">Description</label>
        <textarea rows="3" name="description"></textarea>

        <input type="submit" value="Save">
    </form>
</div>
<div id="table">
    <table>
        <thead>
        <th>Category</th>
        <th>Email</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        foreach($categories as $category){
            if ($category != '.' && $category != '..'){
                $capital1 = ucfirst($category);
                $specific_category = scandir("categories/$capital1");
                foreach ($specific_category as $email){
                    if ($email != '.' && $email != '..'){
                        $specific_email = scandir("categories/$capital1/$email");
                        foreach ($specific_email as $ad){
                            if ($ad != '.' && $ad != '..'){
                                $title = mb_substr($ad, 0, -4);
                                $desc = file_get_contents("categories/{$capital1}/{$email}/{$ad}");
                                echo "<tr><td>$capital1</td><td>$email</td><td>$title</td><td>$desc</td></tr>";
                            }
                        }
                    }
                }
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>

