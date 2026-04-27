<?php
$pageTitle = "Add Dog | HappyPaws";
$currentPage = "adoption";
require __DIR__ . "/includes/header.php";
require "includes/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

$name = $_POST["name"];
$age = $_POST["age"];
$about = $_POST["about"];
$contact = $_POST["contact"];

$image = $_FILES["image"]["name"];
$tmp = $_FILES["image"]["tmp_name"];

$path = "assets/images/" . $image;
move_uploaded_file($tmp, $path);

$query = "INSERT INTO dogs (name, age, about, image, contact)
VALUES ('$name', '$age', '$about', '$path', '$contact')";

mysqli_query($conn, $query);

echo "<p style='color:green;'>Dog added successfully!</p>";
}
?>

<section class="section">
<div class="container">

<div class="section-header">
    <div>
        <p class="eyebrow">Adoption</p>
        <h2>Add a dog for adoption 🐶</h2>
    </div>
</div>

<div class="card" style="max-width:600px; margin:auto;">

<form method="POST" enctype="multipart/form-data">

<input type="text" name="name" placeholder="Dog Name" required><br><br>

<input type="text" name="age" placeholder="Dog Age" required><br><br>

<textarea name="about" placeholder="About Dog"></textarea><br><br>

<input type="text" name="contact" placeholder="Contact Number" required><br><br>

<input type="file" name="image" required><br><br>

<button class="btn btn-primary" type="submit">Add Dog</button>

</form>

</div>

</div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>