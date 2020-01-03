<footer>
        <span class="copyright-info col-4 center">
            &copy; 
            <span id="copyright">
                <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
            </span>
        <a href="https://github.com/ozmos" target="blank">
					Osamu Morozumi</a>
        </span>
        <div class="footer-branding col-4 center">
            <a href="https://pcwebsites.com.au" target="blank">Perth Custom Websites</a>
            <div class="container follow">
                <!-- twitter follow -->
                <a class="twitter-follow-button" href="https://twitter.com/PerthDev" data-show-count="false">Follow</a>
            </div>
        </div>
         <!-- sitemap -->
        <div id="sitemap" class="col-4">
           
            <div class="footer-nav-links">
            
                <ul class="footer-link-container">
                <li>
                    <a class="footer-nav-link" href="index.php#home">
                                Home
                            </a>
                </li>
                    <li>
                        <a class="footer-nav-link" href="index.php#about">
                                About
                            </a>
                    </li>
                </ul>
                <ul class="footer-link-container">
                    <li>
                        <a class="footer-nav-link" href="javascript-projects.php">
                                Javascript Projects
                        </a>
                    </li>
                    <li>
                        <a class="footer-nav-link" href="web-design-projects.php">
                            Web Design Projects
                        </a>
                    </li>
                </ul>
                <ul class="footer-link-container">
                    <li>
                        <a class="footer-nav-link" href="contact.php">
                                Contact
                            </a>
                    </li>
                </ul>
            
            </div>
            
        </div>
        
    </footer>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/babel-polyfill/6.26.0/polyfill.min.js"></script>
    <script src="scripts/nav.js"></script>
    
    <?php echo $footerScripts; ?>


</body>

</html>
