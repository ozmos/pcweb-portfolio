<?php 
$page_title ='Web Design Projects';
$page_description = 'Selection of web design projects written in HTML5, CSS3 and JavaScript. Using modern technologies such as CSS Flexbox and CSS Grid';
include 'inc/html_head.php';
include 'inc/header.php';

?>

<main>
    <?php 
    include 'inc/web-design-projects-data.php';
    include 'inc/project.php';
    echo project($project_data);
    ?>
   


<div class="sub-footer">
    <a href="javascript-projects.php"><h3>See JavaScript projects</h3></a>
</div>
    
</main>
<?php
  include 'inc/footer.php';
?>