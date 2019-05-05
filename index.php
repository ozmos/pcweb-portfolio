
<?php 
$page_title = "Portfolio - Osamu Morozumi, Web Developer";
$page_description = "Portfolio website for web developer Osamu Morozumi.  Osamu is a freelance web developer and designer living in Perth Australia.  He builds web projects in WordPress, PHP, HTML5, CSS3 and javaScript";
include 'inc/html_head.php' ?>
    <a id="home"></a>

    <!-- Header section, full screen  -->

    <header id="welcome-section">
        <div class="headings-section">
            <h1>
                H<span class="luminous">i</span>, I'm Osamu,</h1>
            <h2 class="welcome-subheading">I build web pages and applications</h2>
        </div>
        <a class="welcome-link" href="#projects">
            <h3>See my work</h3>
        </a>
    <!-- Navbar -->
        <?php include 'inc/nav.php'; ?>
       
    </header>

    


    <main>

        <!-- About section -->

        <article id="about">
            <a class="nav-anchor" id="about-link"></a>
            <div class="article-header" id="about-header">
                <h2 class="article-heading" id="about-heading">About</h2>
            </div>
            <div class="container" id="about-container">
                <section class="about-section about-picture">
                    <img class="profile-picture" src="images/profile-greyscale-reduced.jpg" alt="black and white profile picture">

                </section>
                <section class="about-section">

                    <p class="about-description">
                        I started coding in March 2018 in response to extended time off work due to injury. Web development has quickly become my passion and I love building web apps and designing web pages. I have experience using: <em class="tech">HTML5</em>,
                        <em class="tech">WordPress</em>,
                        <em class="tech">CSS3</em>, <em class="tech">javaScript</em>, <em class="tech">jQuery</em> and <em class="tech">git</em>. I am always improving my development skills and knowledge.
                    </p>
        </article>

        
        <!-- contact section -->
        <article id="contact-form">
            <a class="nav-anchor" id="contact-link"></a>
            <h2 class="article-heading" id="contact-heading">Get in touch</h2>
            <div class="contact-section">
                <div class="message">
                    <form name="contact" id="contact" class="ucf" novalidate>
                        <input class="form-control" type="text" name="name" id="name" maxlength="40" placeholder="your name" required>
                        <input class="form-control" type="email" name="email" id="email" maxlength="40" placeholder="your email@mail.com" required>
                        <textarea class="form-control" name="message" id="message" maxlength="140" placeholder="Please visit pcwebsites.com.au to contact me directly" required></textarea>
                        <div class="form-group" style="left: -9999px; position: absolute;">
                            <label for="honey" class="col-sm-2 control-label">
                            Please leave this field empty - we're using it to stop robots submitting the form<br>
                        </label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="honey" id="honey">
                            </div>
                        </div>
                        <div class="progress-container"></div>

                        <a href="https://pcwebsites.com.au/#contact-1" target="_blank"><input id="submit" value="Submit"></a>
                    </form>
                </div>
                <!-- social media -->
                <div class="container" id="socials-container">
                    <h3 id="socials-heading">Catch me hanging out here</h3>
                    <a href="https://twitter.com/PerthDev" target="_blank">
                        <img class="socials-icon" src="images/icons/3225183 - app logo media popular social twitter.svg" alt="twitter logo">
                    </a>
                    <a href="https://forum.freecodecamp.org/u/ozmos/" target="_blank">
                        <img class="socials-icon" src="images/icons/freeCodeCampSquare.jpeg" alt="free code camp">
                    </a>
                    <a href="https://www.linkedin.com/in/osamu-morozumi-692a27141/" target="_blank">
                        <img class="socials-icon" src="images/icons/3225190 - app linkedin logo media popular social.svg" alt="linkedin">
                    </a>
                    <!-- social icons from https://www.iconfinder.com/Indygo-->
                    <a href="https://github.com/ozmos" target="blank">
                        <img class="socials-icon" src="images/icons/if_Github_1298743.svg" alt="github">
                    </a>
                    <!-- github icon from https://www.behance.net/Just_UI -->
                </div>
            </div>
        </article>
    </main>
    <!-- footer section -->
    
    <?php include 'inc/footer.php' ?>
