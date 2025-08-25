<?php
include './includes/vars.php';
$page = 'index';
$pageTitle = $pageVars[$page]['title'];
$pageHeader = $pageVars[$page]['header'];

include './includes/header.php';
include './includes/menu.php';
?>

<div class="col-12 col-md-11">
    <main class="index-main">
        <div class="index-main-inner fade-in">
            <p>kamusta,</p>
            <h1 class="index-header"><?php echo $pageHeader?><span class="name">*</span></h1>
            <p>I'm an aspiring Full-Stack Software Engineer and 3rd year computer science student at the University of St. La Salle.</p>
            <div class="index-nav">
                <a href="about.php">About me</a>
                <a href="projects.php">Projects</a>
                <a href="contact.php">Contact</a>
            </div>
        </div>
        <img src="assets/images/home.png" alt="home image" class="home-image rounded-circle fade-in"/>
    </main>
</div>

<?php include './includes/footer.php'; ?>

