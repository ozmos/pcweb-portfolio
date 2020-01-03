
<?php 
 include 'social_media_functions.php';
 
?> 

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php echo $page_title; ?></title>
    <meta name="author" content="Osamu Morozumi" />
    <meta name="description" content="<?php echo $page_description; ?>" />
    <meta name="keywords" content="WordPress, web, web development, designer, web designer, HTML5, html, CSS3, css, javaScript, jQuery, front-end, front end, full stack, css grid, flex-box, React" />
    <!-- facebook open graph mark up -->
    <meta property="og:url"           content="<?php echo currentURL(); ?>" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="<?php echo $page_title; ?>" />
    <meta property="og:description"   content="<?php echo $page_description; ?>" />
    <meta property="og:image"         content="https://portfolio.pcwebsites.com.au/images/profile.jpg" />
    <link rel="stylesheet" href="css/styles.css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat%7CRaleway" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
    <!-- script to enable older browsers to understand html5 elements -->
    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- twitter for websites script, use async defer to allow browser to parse rest of document until script ready to be loaded  https://flaviocopes.com/javascript-async-defer/ -->
    <script async defer src="scripts/twitter.js"></script>
    
</head>

<body>
    <!-- facebook like button script -->
    <!-- <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script> -->
