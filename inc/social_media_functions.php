<?php
// Program to display URL of current page. @link https://www.geeksforgeeks.org/get-the-full-url-in-php/
function currentURL() {
  if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
      $link = "https"; 
  else
      $link = "http"; 
  
  // Here append the common URL characters. 
  $link .= "://"; 
  
  // Append the host(domain name, ip) to the URL. 
  $link .= $_SERVER['HTTP_HOST']; 
  
  // Append the requested resource location to the URL 
  $link .= $_SERVER['REQUEST_URI']; 
      
  // Print the link 
  return $link;
}

  //function to build tweet url based on my own javascript function from https://ozmos.github.io/random-quote-generator/
function tweet_url($proj) {
  $intent_url = 'https://twitter.com/intent/tweet?text=';
  $text = 'Check out this ' . $proj['project_title'] . ' at ' . $proj['project_url'] . '&';
  $hashtags = 'hashtags=webdev,javaScript,css,php,html,frontend,fullstack&';
  $via = 'via=PerthDev&';
  $url = 'url=' . currentURL();
  $parameters = array($intent_url, $text, $hashtags, $via, $url);
  //replace spaces with html code for space
  return str_replace(' ', '%20' ,join($parameters)); 
}