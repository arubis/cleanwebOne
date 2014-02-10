<?php // if(get_meta_option('display_footer')!='off'): ?>

  <footer>
    <div class="container">
      <div class="row logo">
        <img class="logo center" src="<?php echo get_stylesheet_directory_uri() ?>/img/cleanweb-logo-outline.png" alt="Cleanweb Initiative logo">
      </div>

      <div class="row">
        <div class="col-sm-3" id="mission-statement">
          <p>We're creating a global movement of entrepreneurs focused on massive environmental impact.</p>
        </div>

        <div class="col-sm-3 sitemap sitemap--main">
          <h3>The Cleanweb Initiative</h3>
          <ul>
            <li><a href="/" title="Home">Home</a></li>
            <!-- <li>Team</li> -->
            <!-- <li>Locations</li> -->
            <li><a href="/blog" title="Blog">Blog</a></li>
            <li><a href="/sponsor" title="Sponsorship Opportunities">Sponsorship Opportunities</a></li>
            <!-- <li>Media Kit</li> -->
          </ul>
        </div>

        <div class="col-sm-3 sitemap sitemap--community">
          <h3>Community</h3>
          <ul>
            <li><a href="/join" title="Join the Cleanweb Initiative">Join the Cleanweb Initiative</a></li>
            <li><a href="/start-a-community" title="Community Building 101">Community Building 101</a></li>
            <li><a href="https://docs.google.com/a/cleanweb.co/spreadsheet/viewform?formkey=dFFrZGZDUTFQdEVDeVdxNTY1a2NVWkE6MQ"  title="Become a Facilitator" target="_blank">Become a Facilitator</a></li>
            <li><a href="http://cleanweb.grouptie.com" title="Membership Platform" target="_blank">Membership Platform</a></li>
            <li><a href="/live" title="Hangouts">Hangouts</a></li>
            <li><a href="http://collabfinder.com/groups/the-cleanweb-initiative" title="CollabFinder">CollabFinder</a></li>
          </ul>
        </div>

        <div class="col-sm-3 sitemap sitemap--resources">
          <h3>Resources</h3>
          <ul>
            <li><a href="https://drive.google.com/folderview?id=0B3cX2jK4-Emuc0NiQTFuajJBNkU&amp;usp=sharing" title="Facilitator's Overview" target="_blank">Facilitator's Overview</a></li>
            <li><a href="https://drive.google.com/folderview?id=0B3cX2jK4-EmuN0VONUFwa09xRG8&amp;usp=sharing" title="Starting Your Community" target="_blank">Starting Your Community</a></li>
            <li><a href="https://drive.google.com/folderview?id=0B3cX2jK4-Emua1V5RjhOUFF2YlE&amp;usp=sharing" title="Organizing and Running a Hackathon" target="_blank">Organizing and Running a Hackathon</a></li>
            <li><a href="/resources" title="Technical Resources">Technical Resources</a></li>
            <li><a href="/apis" title="APIs">APIs</a></li>
            <li><a href="/datasets" title="Datasets">Datasets</a></li>
          </ul>
        </div>
      </div>

      <!-- icons from veodesign.com -->
      <div class="row footer--social">
        <ul>
          <li>
            <a href="https://www.facebook.com/CleanWeb" title="Cleanweb on Facebook" target="_blank" class="bwWrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/facebook500.png" alt="Cleanweb on Facebook" />
            </a>
          </li>
          <li>
            <a href="https://www.twitter.com/Cleanweb" title="Follow us on Twitter" target="_blank" class="bwWrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/twitter.png" alt="Follow us on Twitter" />
            </a>
          </li>
          <li>
            <a target="_blank" href="https://plus.google.com/u/0/communities/101628485288313132891" title="googleplus" class="bwWrapper">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/social/googleplus-revised.png" alt="Google+" />
            </a>
          </li>
        </ul>
      </div>

      <div class="row center closing-line">
        <p style="padding-bottom: 35px;">
          <a href="mailto:info@cleanweb.co" title="Contact Us">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="/privacy-policy" title="Privacy Policy">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved by The Cleanweb Initiative&nbsp;&nbsp;|&nbsp;&nbsp;Cleanweb 2014
        </p>
      </div>
    </div>
  </footer>

<?php // endif; ?>
<?php wp_footer(); ?>

</body>
</html>