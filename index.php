
<?php 
$page_title = "Portfolio - Osamu Morozumi, Web Developer";
$page_description = "Portfolio website for web developer Osamu Morozumi.  Osamu is a freelance web developer and designer living in Perth Australia.  He builds web projects in WordPress, PHP, HTML5, CSS3 and javaScript";
include 'inc/html_head.php' ?>
    <a id="home"></a>

    <!-- Header section, full screen  -->

    <header id="welcome-section">
    <?php include 'inc/nav.php'; ?>
        <div class="outer hero-content">
            <!-- Navbar -->
           
            <div class="headings-section row center">
                <h1 class="hero-item">
                    Perth Custom Webs<span class="luminous">i</span>tes</h1>
                <h2 class="welcome-subheading hero-item">Beautiful Websites for Perth Businesses</h2>
            </div>
            
            <div class="row center hero-item">
                <a class="button secondary" href="/web-design-projects.php">Web design</a>

                    <a class="welcome-link button highlight" href="/javascript-projects.php">
                        Javascript
                    </a>
            </div>
        </div>
    </header>
    <main>

        <!-- About section -->
        <div class="content-header" id="about">
            <h2>About me</h2>
        </div>
        <div class="outer">
            <article class="about-container">
                <section class="about-section about-picture">
                        <img class="profile-picture" src="images/profile.jpg" alt="black and white profile picture">
                        <h3>“My passion is building things for the web”</h3>

                </section>
                <section class="about-section">
                
                    <p class="about-description">
                    Hi there, I’m Osamu. I’m a freelance web developer living in the Swan Valley,Western Australia. My passion is building things for the web.  <br />                     
                    This passion started in March 2018 after a devastating shoulder injury which left me unable to do my regular work as a landscaper. I decided to learn web development as a way to pass the time and challenge myself. <br /> 
                    I thoroughly enjoyed the challenge and creative power that comes with web development and decided to start building websites professionally on a part time basis. <br />
                    I love coding in <em>PHP</em>, <em>JavaScript</em> and <em>CSS</em>. I also enjoy <em>WordPress</em> development and <em>Web Design</em>.
                        
                    </p>
                </section>
            </article>
        </div>
    </main>
    <!-- footer section -->
    
    <?php include 'inc/footer.php' ?>
