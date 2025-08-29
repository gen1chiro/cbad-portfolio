<?php
include './includes/vars.php';
$page = 'contact';
$pageTitle = $pageVars[$page]['title'];
$pageHeader = $pageVars[$page]['header'];

include './includes/header.php';
include './includes/menu.php';
?>

<div class="col-12 col-md-11">
    <main class="contact-main">
        <img src="assets/images/contact.png" alt="contact" class="contact-image rounded-circle fade-in"/>
        <div class="fade-in">
            <h1><?php echo $pageHeader?></h1>
            <h5>Get in touch, let's talk.</h5>
        </div>
        <div class="icons fade-in">
            <a href="https://github.com/gen1chiro" target="_blank">
                <i class="bi bi-github"></i>
            </a>
            <a href="https://linkedin.com/in/jul-leo-javellana-b03832344" target="_blank">
                <i class="bi bi-linkedin"></i>
            </a>
            <a href="mailto:juljavellana1218@gmail.com" target="_blank">
                <i class="bi bi-envelope-fill"></i>
            </a>
            <i class="bi bi-facebook"></i>
        </div>
    </main>
</div>

<?php include './includes/footer.php'; ?>

