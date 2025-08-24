<?php
include './includes/vars.php';
$page = 'projects';
$pageTitle = $pageVars[$page]['title'];
$pageHeader = $pageVars[$page]['header'];

include './includes/header.php';
include './includes/menu.php';
?>

<div class="col-12 col-md-11">
    <main class="project-main">
        <h2><?php echo $pageHeader?></h2>
        <p>Here are some of the things I've been working on while learning web development.</p>
        <div class="project-container">
            <div class="project-tile">
                <img src="assets/images/tasky.png" alt="tasky"/>
                <div>
                    <a>Tasky (WIP) <i class="bi bi-link-45deg"></i></a>
                    <p>A collaborative real-time kanban web-app with firebase authentication and CRUD features</p>
                    <div class="tech">
                        <p>react</p>
                        <p>react router</p>
                        <p>typescript</p>
                        <p>tailwind</p>
                        <p>firebase</p>
                    </div>
                </div>
            </div>
            <div class="project-tile">
                <img src="assets/images/lumio.png" alt="lumio"/>
                <div>
                    <a href="https://lumio-tmdb.vercel.app/" target="_blank">Lumio <i class="bi bi-link-45deg"></i></a>
                    <p>A movie search app made with The Movies Database</p>
                    <div class="tech">
                        <p>react</p>
                        <p>react router</p>
                        <p>typescript</p>
                        <p>tailwind</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include './includes/footer.php'; ?>

