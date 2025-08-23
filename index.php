<?php
include './includes/vars.php';
$page = 'index';
$pageTitle = $pageVars[$page]['title'];
$pageHeader = $pageVars[$page]['header'];

include './includes/header.php';
include './includes/menu.php';
?>

<div class="col-12 col-md-11">
    <main>
        <h1><?php echo $pageHeader?></h1>
    </main>
</div>

<?php include './includes/footer.php'; ?>

