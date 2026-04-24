<?php
require "includes/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST["name"];
$age = $_POST["age"];
$about = $_POST["about"];
$contact = $_POST["contact"];

// image upload
$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

$path = "assets/images/" . $image;
move_uploaded_file($tmp, $path);

// insert into database
$query = "INSERT INTO dogs (name, age, about, image, contact)
VALUES ('$name', '$age', '$about', '$path', '$contact')";

mysqli_query($conn, $query);

echo "Dog added successfully!";
}
?>

<form method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Dog Name" required>

<input type="text" name="age" placeholder="Dog Age" required>

<textarea name="about" placeholder="About Dog"></textarea>

<input type="text" name="contact" placeholder="Contact Number" required>

<input type="file" name="image" required>

<button type="submit">Add Dog</button>

</form>