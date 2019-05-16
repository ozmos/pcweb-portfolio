<?php 
$page_title ='';
$page_description = '';
  include 'inc/html_head.php';
?>
<header>
<?php
  include 'inc/nav.php';
?>
</header>

<main>

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
<!-- content -->

</main>

<?php
include 'inc/footer.php';
?>
