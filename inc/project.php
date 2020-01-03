<?php

function project (array $projects) {
    for ($i = 0; $i < sizeof($projects); $i++) {
        $project = $projects[$i];
?>
<article id="project-<?php echo $i + 1; ?>">
    <div class="content-header">
        <h2 class="content"><?php echo $project['project_title']; ?></h2>
    </div>

    <div class="outer">
        <article class="project <?php echo $i % 2 === 0 ? 'forwards' : 'reverse'; ?>">
            <section class="image slide-in <?php echo $i % 2 === 0 ? 'left-slide' : 'right-slide'; ?>">
                <img src="images/projects/<?php echo $project['img_url']?>" alt="<?php echo $project['img_alt'];?>" />
            </section>
            <section class="text slide-in <?php echo $i % 2 !== 0 ? 'left-slide' : 'right-slide'; ?>">
                <p>
                <?php echo $project['project_descrip']; ?>     
                </p>
                <h3>
                    <a href="<?php echo $project['project_url'];?>" target="_blank">Visit the project</a>
                </h3>
                <h3>
                    <a href="<?php echo $project['code_url'];?>" target="_blank">See the code</a>
                </h3>
                <h3 class="social-sharing-buttons">
                    <!-- tweet current project button -->
                    <a class="twitter-share-button" href="<?php echo tweet_url($project); ?>">Tweet</a>
                   
                    <!-- linkedin share button -->
                    <script src="https://platform.linkedin.com/in.js" type="text/javascript">lang: en_US</script>
                    <script type="IN/Share" data-url="<?php echo $project['project_url'];?>">Tweet</script>
                </h3>
           

            </section>
            </article>
    
    </div>
</article>
<?php
    }
    return false;
}

?>

