<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"/>
    <title>upload</title>
</head>
<body>
<?php
echo <<<_END
    <form method='post' action='upload.php' enctype='multipart/form-data'>
        <label>Select file⏏️: 
            <input type='file' name='filename' size='10'>
        </label>
        <label>Caption:
            <input type='text' name='caption'>
        </label >
        <input type='submit' value='Upload▶️'>
    </form>
_END;
if ($_FILES) {
    $name = $_FILES['filename']['name'];
    //Safely grab input with filter_input
    $alt =(string) filter_input(INPUT_POST, 'caption', FILTER_SANITIZE_STRING);
    //Process with htmlspecialchars, prevent XSS attacks
    $sanitizedAlt = htmlspecialchars($alt, ENT_QUOTES);
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Uploaded image '$name'<br><img src='$name' alt='$sanitizedAlt'>";
    
    
}

?>    
</body>
</html>


