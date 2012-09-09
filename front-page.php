<?php get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo CONTAINER_CLASSES; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="span12" role="main">
        <!-- =======================================
        FLEXSLIDER
        ======================================= -->
        <div class="row">
          <div class="span8">
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <a href="https://chrome.google.com/webstore/detail/fjclcbajejgdcahagfjlocnkffnblghc">
                    <img src="http://zachariahmoreno.com/assets/orionx-960x384.png" />
                    <p class="flex-caption">Orion-X Chrome Extension</p>
                  </a>
                </li>
                <li>
                  <a href="http://zachariahmoreno.com/portfolio/Angular-Slides">
                    <img src="http://zachariahmoreno.com/assets/angular-slides-960x384.png" />
                    <p class="flex-caption">AngularJS &amp; Batarang Slides</p>
                  </a>
                </li>
                <li>
                  <a href="http://zachariahmoreno.com/portfolio/Git-Slides">
                    <img src="http://zachariahmoreno.com/assets/git-slides-960x384.png" />
                    <p class="flex-caption">Git Slides</p>
                  </a>
                </li>
                <li>
                  <a href="http://zachariahmoreno.com/portfolio/spray-paint">
                    <img src="http://zachariahmoreno.com/wp-content/themes/roots/img/spray-paint-960x384.png" />
                    <p class="flex-caption">Spray Paint Concept</p>
                  </a>
                </li>
                <li>
                  <a href="http://zachariahmoreno.com/portfolio/equinox">
                    <img src="http://www.zachariahmoreno.com/wp-content/themes/roots/img/equinox-960x384.png" />
                    <p class="flex-caption">Equinox Photo Sharing</p>
                  </a>
                </li>
                <li>
                  <a href="http://zachariahmoreno.com/portfolio/newera">
                    <img src="http://www.zachariahmoreno.com/wp-content/themes/roots/img/new-era-960x384.png" />
                    <p class="flex-caption">New Era Parallax</p>
                  </a>
                </li>
                <li>
                  <a class="fancybox" href="http://zachariahmoreno.com/includes/calstrs-map.php">
                    <img src="http://www.zachariahmoreno.com/wp-content/themes/roots/img/google-map-960x384.png" />
                    <p class="flex-caption">CalSTRS Google Map</p>
                  </a>
                </li>
              </ul>
            </div>
          </div><!-- /span8 -->

          <div class="span4" id="imahero">
            <h2 class="kern">Building a Better Web<br/><span id="bottomhero">through exceptional<br/>user experience &amp; design.</span></h2>
            <center>
              <button class="btn btn-large btn-info" type="button" src="http://www.zachariahmoreno.com/portfolio/">Learn More</button>
            </center>
          </div><!-- /span4 hero-unit -->
        </div><!-- /row -->

        <div class="row">
          <div class="span4">
            <h2>Design</h2>
            <p>There is a process to design. My process starts with sketching & wireframing the project flow, adding focus. This focus is key to the overall success of any project, without it Development would not be possible.</p>
          </div>
          <div class="span4">
            <!-- <img class="front-page-icon" src="http://zachariahmoreno.com/assets/dev-icon-35x35.png"/> -->
            <h2>Develop</h2>
            <p>Throughout the Development process it is important for me, the developer, to remain flexable to project requests. A combination of this flexablity & best practices will ensure your project's goals are met.</p>
          </div>
          <div class="span4">
            <h2>Deploy</h2>
            <p>Having a plan for deployment will pay off exponentialy the more your project grows. My plan ensures version control for meticulus back-ups, up-to-date security measures, & scalability forcasting for the future of your project.</p>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <h2>Contribute</h2>
            <p>Open Source projects and technology are the most exciting part of being a web professional today. As a student of the Web, I feel an obligation to give back to the platform that has given me so much. It is paramount to utilize tools such as GitHub & Google Code to push your skills as a web professional to the next level.</p>
          </div>
        </div>

        <div class="row">
          <div class="span6">
            <h2>Keep Learning</h2>
            <p>One of the main reasons I love being a student of the web is because it is constantly in flux, forcing developers like myself to stay on top of their game. It is my goal to learn something new daily to always be pushing myself to the next level.</p>
          </div>
          <div class="span6">
            <h2>Stay Relevant</h2>
            <p>Staying relevant within the Web community is key to being a successful web profesional. Constantly learning eventually leads to feeling and obligation to give back to that community, in the form of writting & bloging.</p>
          </div>
        </div>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>