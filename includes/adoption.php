<?php
require "includes/db.php";

$query = "SELECT * FROM dogs";
$result = mysqli_query($conn, $query);
?>

<h2>Dogs for Adoption 🐶</h2>

<a href="add_dog.php">Add Dog</a>

<div style="display:flex; gap:20px; flex-wrap:wrap;">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div style="border:1px solid #ccc; padding:15px; width:250px;">

<img src="<?php echo $row["image"]; ?>" width="100%">

<h3><?php echo $row["name"]; ?></h3>

<p>Age: <?php echo $row["age"]; ?></p>

<p><?php echo $row["about"]; ?></p>

<p><b>Contact:</b> <?php echo $row["contact"]; ?></p>

</div>

<?php } ?>

</div>