<?php 
$page_title ='Projects';
$page_description = 'Portfolio website for web developer Osamu Morozumi.  Osamu is a freelance web developer and designer living in Perth Australia.  He builds web projects in WordPress, PHP, HTML5, CSS3 and javaScript';
  include 'inc/html_head.php';
?>
<header>
<h1><?php echo $page_title; ?></h1>
<?php
  include 'inc/nav.php';
?>
</header>

<main>
  <!-- Projects -->

        <article id="projects">
            <a class="nav-anchor" id="project-link"></a>
            <h2 class="article-heading" id="projects-heading">Projects</h2>
            <div class="container" id="projects-container">
               
                <?php 
                include 'inc/project.php'; 
                include 'inc/projects.php';
                    echo projects($project);
                ?> 
            </div>

            <section id="profile-links">


                <a id="profile-link" href="https://github.com/ozmos/">
                    <h3 id="links-heading">See more of my work</h3>
                </a>


            </section>
        </article>
</main>
<?php
  include 'inc/footer.php';
?>
