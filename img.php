<?php
if (isset($_FILES["image"])){
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $file_name = $_FILES["image"]["name"];
    $file_size = $_FILES["image"]["size"];
    $file_tem = $_FILES["image"]["tmp_name"];
    $file_type = $_FILES["image"]["type"];

    // include ('conn.php');
    // $sql = "INSERT INTO `image`(`image`) VALUES ($file_name)";
    // $result = mysqli_query($conn, $sql);
    
   move_uploaded_file($file_tem, "uploads/" . $file_name);

};
// header("location: "img.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image"> <br><br>
        <input type="submit" value="Upload Image">
    </form>
</body>
</html>