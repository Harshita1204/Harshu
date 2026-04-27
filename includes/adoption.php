<?php
$pageTitle = "Adoption | HappyPaws";
$currentPage = "adoption";
require __DIR__ . "/includes/header.php";
require "includes/db.php";

$query = "SELECT * FROM dogs";
$result = mysqli_query($conn, $query);
?>

<section class="section">
<div class="container">

<div class="section-header">
    <div>
        <p class="eyebrow">Adoption</p>
        <h2>Find your new best friend 🐾</h2>
    </div>
    <a class="btn btn-primary" href="add_dog.php">Add Dog</a>
</div>

<div class="grid-3">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div class="card">

<img src="<?php echo $row["image"]; ?>" style="width:100%; border-radius:10px;">

<h3><?php echo $row["name"]; ?></h3>

<p class="muted">Age: <?php echo $row["age"]; ?></p>

<p class="muted"><?php echo $row["about"]; ?></p>

<p><b>Contact:</b> <?php echo $row["contact"]; ?></p>

</div>

<?php } ?>

</div>

</div>
</section>

<?php require __DIR__ . "/includes/footer.php"; ?>