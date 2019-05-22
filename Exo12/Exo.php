<!DOCTYPE html>
<html>

<head>
    <title>Exercice 12</title>
    <meta charset='utf-8'>
</head>

<body>

    <form action="Exo.php" method="post" enctype="multipart/form-data">
        <label>Selectionner une photo a envoyer:</label>
        <input type="file" name="image" accept="image/png, image/jpg"><br /><br />
        <input type="submit">
    </form>

    <?php
    if (!file_exists("./Images"))
    {
    mkdir("./Images");
    }
    if (isset($_FILES['image']))
    {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];

        if (!empty($file_tmp))
        {
            move_uploaded_file($file_tmp, "images/" . $file_name);
            echo '<img src=./Images/' . $file_name . '>';
        }
    }

    ?>

</body>

</html>