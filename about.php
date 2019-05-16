<?php 
$page_title ='About';
$page_description = 'Portfolio website for web developer Osamu Morozumi.  Osamu is a freelance web developer and designer living in Perth Australia.  He builds web projects in WordPress, PHP, HTML5, CSS3 and javaScript';
  include 'inc/html_head.php';
  include 'inc/header.php';
?>

<main>
  <div>
        <div class="content-header">
            <h2 class="content">About me</h2>
        </div>
        <div class="outer container">
            <section class="about-section about-picture">
                    <img class="profile-picture" src="images/profile-greyscale-reduced.jpg" alt="black and white profile picture">

            </section>
            <section class="about-section">

                <p class="about-description">
                    I started coding in March 2018 in response to extended time off work due to injury. Web development has quickly become my passion and I love building web apps and designing web pages. I have experience using: <em class="tech">HTML5</em>,
                    <em class="tech">WordPress</em>,
                    <em class="tech">CSS3</em>, <em class="tech">javaScript</em>, <em class="tech">jQuery</em> and <em class="tech">git</em>. I am always improving my development skills and knowledge.
                </p>
            </section>
        </div>
  </div>
</main>

<?php
include 'inc/footer.php';
?>