<?php 
$page_title ='JavaScript Projects';
$page_description = 'Selection of front end web applications written in JavaScript including React, jQuery and vanilla JavaScript';
include 'inc/html_head.php';
include 'inc/header.php';

?>

<main>
    <?php 
    include 'inc/js-projects-data.php';
    include 'inc/project.php';
    echo project($project_data);
    ?>
   


<div class="sub-footer">
    <a href="web-design-projects.php"><h3>See web design projects</h3></a>
</div>
    
</main>
<?php
  $footerScripts = '<script src="scripts/slideIn.js"></script>';
  include 'inc/footer.php';
?>
