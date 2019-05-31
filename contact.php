<!-- https://code.tutsplus.com/tutorials/create-a-contact-form-in-php--cms-32314 -->
<?php 
$page_title ='Contact';
$page_description = 'Contact page for freelance web developer Osamu Morozumi';


  include 'inc/html_head.php';
?>

<?php
  
  include 'inc/header.php';
?>


<main class="contact">

   <!-- contact section -->

    <div class="content-header">
        <p>Please use the contact form to get in touch and I will get back to you as soon as possible</p>
    </div>
    <div class="outer flex-row contact-outer">
           
        <section class="contact-section">
            <form action="process.php" method="post" id="contact-form">
                <div class="elem-group">
                <label for="name">*Your Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" pattern="[A-Z\sa-z]{3,20}" title="Name should only contain letters and spaces" required>
                </div>
                <div class="elem-group">
                <label for="email">*Your Email</label>
                <input type="email" id="m66" name="m66" placeholder="Your Valid Email*" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255"/>
                <input type="email" id="m77" name="m77" placeholder="john.doe@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" minlength="8" maxlength="255" title="Please provide a valid email address" required>
                </div>
                <div class="elem-group">
                <label for="contact-reason">*Reason for contacting me:</label>
                <select id="contact-reason" name="contact-reason" required>
                    <option value="business">I would like a website built for my business/organisation</option>
                    <option value="agency">My design agency requires a freelance developer for contract work</option>
                    <option value="employer">I would like to recruit you for employment</option>
                    <option value="general">General enquiry</option>
                </select>
                </div>
                
                <div class="elem-group">
                <label for="message">*Your message</label>
                <textarea id="message" name="message" placeholder="Letters, numbers, spaces and punctuation only please" rows="10" minlength="10" maxlength="500" required></textarea>
                </div>
                <input id="submit" type="submit" value="submit" />
            </form>
        </section>
        <!-- map -->
        <section class="contact-section">
            <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Sunnyside%20way%20Aveley+(Perth%20Custom%20Websites)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a>
            </iframe><br />
        </section>
           
    </div>

    <div class="sub-footer">

    </div>

</main>

<?php
/* $footerScripts = '<script src="scripts/contact.js"></script>'; */
include 'inc/footer.php';
?>
