<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file Upload</title>
</head>
<body>

<pre>
    <?php
    print_r($_FILES);
    // move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/abc.jpg'); //specific name
    move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/' . $_FILES['photo']['name']); //original name
    ?>
</pre>

<form method="post" enctype="multipart/form-data" >
    <input type="file" name="photo">
    <input type="submit" name="submit" value="Submit">

</form>
    
</body>
</html>