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
    <div>
        <div class="content-header">
            <p>Please use the contact form to get in touch and I will get back to you as soon as possible</p>
        </div>
        <div class="outer flex-row contact-outer">
           
                <?php
                    include 'easycontactform/index.php';
                ?>

                <section class="contact-section">
                    <iframe src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=Sunnyside%20way%20Aveley+(Perth%20Custom%20Websites)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/map-my-route/">Draw map route</a>
                    </iframe><br />
                </section>
           
        </div>
    </div>
    <div class="sub-footer">

    </div>

</main>

<?php
include 'inc/footer.php';
?>
