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
        <img src="assets/images/contact.png" alt="contact" class="contact-image rounded-circle"/>
        <div>
            <h1><?php echo $pageHeader?></h1>
            <h5>Get in touch, let's talk.</h5>
        </div>
        <div class="icons">
            <i class="bi bi-github"></i>
            <i class="bi bi-linkedin"></i>
            <i class="bi bi-envelope-fill"></i>
            <i class="bi bi-facebook"></i>
        </div>
    </main>
</div>

<?php include './includes/footer.php'; ?>

