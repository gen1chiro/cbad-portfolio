<?php
include './includes/vars.php';
$page = 'about';
$pageTitle = $pageVars[$page]['title'];
$pageHeader = $pageVars[$page]['header'];

include './includes/header.php';
include './includes/menu.php';
?>

<div class="col-12 col-md-11">
    <main class="about-main">
        <div>
            <h2><?php echo $pageHeader?></h2>
            <p>Hi, I’m Jul, a computer science student passionate about web development and front-end design. I’m currently learning React and TypeScript and building practice projects to sharpen my skills in responsive design and clean UI development.</p>
            <p>I enjoy solving problems, experimenting with new technologies, and creating projects that combine functionality and aesthetics. I enjoy the process of converting static designs to beautiful and functional web pages. My goal is to grow as a full-stack developer while building a strong portfolio of real-world applications.</p>
        </div>
        <div>
            <h2>Tools and Technologies</h2>
            <div class="technologies-container">
                <div class="technologies">
                    <img src="assets/svg/react.svg" alt="react">
                    <p>Library for building user interfaces.</p>
                </div>
                <div class="technologies">
                    <img src="assets/svg/tailwind.svg" alt="tailwind">
                    <p>A utility-first CSS framework.</p>
                </div>
                <div class="technologies">
                    <img src="assets/svg/ts.svg" alt="ts">
                    <p>Strongly typed programming language.</p>
                </div>
                <div class="technologies">
                    <img src="assets/svg/firebase.svg" alt="firebase">
                    <p>Backend tools for apps.</p>
                </div>
                <div class="technologies">
                    <img src="assets/svg/vercel.svg" alt="vercel">
                    <p>Platform for deploying and hosting web apps.</p>
                </div>
                <div class="technologies">
                    <img src="assets/svg/react-router.svg" alt="react-router">
                    <p>Routing library in React apps.</p>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include './includes/footer.php'; ?>

