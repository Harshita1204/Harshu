<h1 style="color:red;">TEST HEADER</h1>
<?php
if (!isset($pageTitle)) {
    $pageTitle = "HappyPaws Puppy Vet Care";
}
if (!isset($currentPage)) {
    $currentPage = "";
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <link rel="stylesheet" href="assets/css/style.css" />
</head>
<body class="page-<?php echo htmlspecialchars($currentPage); ?>">
    <div class="site-bg"></div>
    <header class="site-header">
        <div class="container nav-wrap">
            <a class="brand" href="index.php">
                <span class="brand-mark"></span>
                HappyPaws
            </a>
            <nav class="nav">
                <a class="btn btn-light" href="/auth/login.php">Login</a>
                <a class="<?php echo $currentPage === "home" ? "active" : ""; ?>" href="index.php">Home</a>
                <a class="<?php echo $currentPage === "about" ? "active" : ""; ?>" href="about.php">About</a>
                <a class="<?php echo $currentPage === "care" ? "active" : ""; ?>" href="care.php">Care</a>
                <a class="<?php echo $currentPage === "services" ? "active" : ""; ?>" href="services.php">Services</a>
                <a class="<?php echo $currentPage === "adoption" ? "active" : ""; ?>" href="adoption.php">Adoption</a>
                <a class="<?php echo $currentPage === "contact" ? "active" : ""; ?>" href="contact.php">Contact</a>
                
            </nav>
            <a class="btn btn-primary" href="contact.php">Book a Visit</a>
        </div>
    </header>
    <main>
