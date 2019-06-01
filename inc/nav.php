<nav id="navbar">
    <div id="navcon" class="nav-container outer">
        <div class="nav-header">
            <a id="home" href="/index.php#home">
            <img src="images/logo.png" alt="Perth Custom Websites Logo" width="80" height="80"/>
            </a>
        </div>
        <div class="nav-list" id="nav-list">
            <div class="link-container">
                <a class="nav-link" href="/index.php#about">
                    About
                </a>
            </div>
            <div class="dropdown-container">
                <a class="nav-link dropbtn" onclick="classToggle('dropdown', 'toggle-reveal')">Projects</a>
                    <div id="dropdown" class="dropdown-content">
                        <a href="/javascript-projects.php">
                            JavaScript Projects
                        </a>
                        <a href="/web-design-projects.php">
                            Web Design Projects
                        </a>
                    </div>
            </div>
            <div class="link-container">
                <a class="nav-link" href="/contact.php">
                    Contact
                </a>
            </div>
            <div class="container">
              
              <a href="https://twitter.com/PerthDev" target="_blank">
                  <img class="socials-icon" src="images/icons/twitter.svg" alt="twitter logo">
              </a>
              <a href="https://forum.freecodecamp.org/u/ozmos/" target="_blank">
                  <img class="socials-icon" src="images/icons/freeCodeCampSquare.jpeg" alt="free code camp">
              </a>
              <a href="https://www.linkedin.com/in/osamu-morozumi-692a27141/" target="_blank">
                  <img class="socials-icon" src="images/icons/linkedin.svg" alt="linkedin">
              </a>
              <!-- social icons from https://www.iconfinder.com/Indygo -->
              <a href="https://github.com/ozmos" target="blank">
                  <img class="socials-icon" src="images/icons/if_Github_1298743.svg" alt="github">
              </a>
              <!-- github icon from https://www.behance.net/Just_UI -->
            </div> 
        </div>
        
        <div id="menu-toggle" onclick="classToggle('nav-list', 'toggle-reveal')">
            <div class="hamburger top">
            </div>
            <div class="hamburger top">
            </div>
            <div class="hamburger">
            </div>
        </div>
    </div>

</nav>