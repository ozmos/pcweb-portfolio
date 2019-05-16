<?php



function projects (array $projects) {
    for ($i = 0; $i < sizeof($projects); $i++) {
?>
<section class="project-section project-tile">
  <img src="images/portfolio-thumbs/<?php echo $projects[$i]['img_url'];?>" alt="<?php echo $projects['img_alt'];?>">
  <section class="project-section project-description-section">
      <div class="project-description-text">
          <h3 class="project-title"><?php echo $projects[$i]['project_title'];?></h3>
          <p>
              <?php echo $projects[$i]['project_descrip']; ?>
          </p>
          <a href="<?php echo $projects[$i]['project_url']; ?>" target="_blank">Project</a>
          <br>
          <a href="<?php echo $projects[$i]['code_url']; ?>" target="_blank">Code</a>
      </div>
  </section>
</section>
<?php
    }
}

?>