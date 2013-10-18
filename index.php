<?php get_header(); ?>

  <main role="main">

  <!-- 'inspiring the next 1000 companies...' --><!-- CURRENTLY ENABLED -->
  <section class="landing frame" id="landing">
    <!-- LANDING -->
    <div class="panel boxy header" id="landing-header" style="min-height: 200px;">
      <div class="row">
        <div class="col-sm-6 striped">
          <div class="row">
            <div class="col-sm-10 col-sm-push-1 left">
              <div class="v-centered">
                <h1>
                  Inspiring the next <span class="secondary">1,000</span> companies...
                </h1>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="row">
            <div class="col-sm-10 col-sm-push-1 right">
              <div class="v-centered">
                <h1>
                  ...that will have a massive economic &amp; environmental impact
                </h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- spacer? -->
    <div class="container">
      <!-- subtext panel for landing frame -->
      <div class="row">
        <div class="col-sm-10 col-sm-push-1">
          <div class="panel panel-default boxy center" id="landing-subtext">
            <div class="panel-body">
              <div class="v-centered">
                <h2>
                  There is a tremendous opportunity for companies to create meaning, improve lives, and do well in the process
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- /LANDING> -->

  <!-- subnav bar (starts under landing, scrolls up then fixes at top) -->
  <!-- Affix.js call for the subnav bar -->
  <!-- Make subnav bar collapse clean -->
  <script type="text/javascript" charset="utf-8">
    //<![CDATA[
    $(window).load(function(){
      $(function() {
        $('#subnav-wrapper').height($("#subnav").height());  // Holds place of subnav on collapse if needed for layout
        $('#subnav').affix({
        offset: { top: $('#subnav').offset().top - 100 }     // offset value here should be height of main nav
        });
      });
    });//]]> 
  </script>

  <!-- what do we do? how do we do it? who's part of it? where are we? who's talking about it? who's supporting it? -->
  <section id="subnav-wrapper">
    <!-- SUBNAV --><!-- wrapper so that when we magicly JS this from inline to fixed we don't lose layout -->
    <nav class="navbar navbar-default navbar-inverse boxy" role="navigation" id="subnav">
      <!-- let screenreaders ditch this toy -->
      <div class="collapse navbar-collapse navbar-secondary-collapse">
        <div class="container" style="margin: 0 auto;">
          <ul class="nav nav-justified">
            <li class="active"><a href="#what" title="what">What do we do?</a></li>
            <li><a href="#how" title="how">How do we do it?</a></li>
            <!-- <li><a href="#who" title="who">Who's part of it?</a></li> -->
            <li><a href="#where" title="where">Where are we?</a></li>
            <li><a href="#social" title="social">Who's talking about it?</a></li>
            <li><a href="#sponsors" title="sponsors">Who's supporting it?</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </section><!-- /SUBNAV -->

  <!-- Helping budding entrepreneurs, etc. (what slide/'whiteboard') --><!-- CURRENTLY ENABLED -->
  <section class="what frame" id="what">
    <!-- WHAT FRAME -->
    <!-- Helping Budding Entrepreneurs... -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal">
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>At the<br />
                  <span style="font-weight: bold;">Cleanweb Initiative</span><br />
                   we are...</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container" id="whiteboard">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whiteboard.png" alt="Whiteboard with mindmap on it" />
      <div class="col-sm-10 col-sm-offset-1">
        <h1 class="secondary">Helping <em>entrepreneurs</em> take their idea from a whiteboard sketch to a funded company</h1>
      </div>
    </div><!-- /container -->

    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->
  </section><!-- /WHAT FRAME -->

  <!-- We help entrepreneurs in all kinds of ways w/ rollover behaviour --><!-- CURRENTLY ENABLED -->
  <section class="how frame" id="how">
    <!-- HOW FRAME -->
    <!-- We help entrepreneurs in all kinds of ways... -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal">
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>
                  We help entrepreneurs in<br />
                  all kinds of ways
                </h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="background"><!-- sets up triangle background overlay -->
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-push-1 knobs-container">

            <!-- leftmost knob column -->
            <div class="col-sm-4 knob-column">
              <div class="knob">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-down.png" alt="" id="knob-left" class="knob">
                <div class="knob-overlay">
                  <h3>Facilitating Connections</h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-overlay-left.png" id="knob-overlay-left" alt="Connections icon" />
                </div><!--/knob-OVERLAY -->
              </div><!-- /knob itself -->
              <div class="knob-copy">
                <p>Hosting challenges &amp; hackathons that get innovators and developers working together on big issues</p>
                <p>Hosting investor hangouts and meetings to educate and discuss the opportunity landscape</p>
                <p>Helping companies find the talent they need to grow and succeed</p>
                <p>Helping companies find customers, partners, acquisition targets / acquirers</p>
              </div><!-- /knob-copy -->
            </div><!-- /leftmost knob column -->

            <!-- middle knob -->
            <div class="col-sm-4 knob-column">
              <div class="knob">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-down.png" alt="" id="knob-center" class="knob">
                <div class="knob-overlay">
                  <h3>Creating Opportunities</h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-overlay-center.png" id="knob-overlay-center" alt="Expansion Icon" />
                </div><!--/knob-OVERLAY -->
              </div><!-- /knob itself -->
              <div class="knob-copy">
                <p>Hosting challenges &amp; hackathons that get innovators and developers working together on big issues</p>
                <p>Hosting investor hangouts and meetings to educate and discuss the opportunity landscape</p>
                <p>Helping companies find the talent they need to grow and succeed</p>
                <p>Helping companies find customers, partners, acquisition targets / acquirers</p>
              </div><!-- /knob-copy -->
            </div><!-- /center knob column -->

            <div class="col-sm-4 knob-column">
              <div class="knob">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-down.png" alt="" id="knob-right" class="knob">
                <div class="knob-overlay">
                  <h3>Providing Resources</h3>
                  <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/knob-overlay-right.png" id="knob-overlay-right" alt="Tools Icon" />
                </div><!--/knob-OVERLAY -->
              </div><!-- /knob -->
              <div class="knob-copy">
                <p>Hosting challenges &amp; hackathons that get innovators and developers working together on big issues</p>
                <p>Hosting investor hangouts and meetings to educate and discuss the opportunity landscape</p>
                <p>Helping companies find the talent they need to grow and succeed</p>
                <p>Helping companies find customers, partners, acquisition targets / acquirers</p>
              </div><!-- /knob-copy -->
            </div><!-- /right knob column -->

          </div><!-- /knob-container -->

        </div><!-- /row -->
      </div><!-- /container -->
    </div><!-- background -->

    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->
  </section><!-- /HOW FRAME -->

  <!-- red-based grid frame with fancy mouseover/click behavior --><!-- CURRENTLY DISABLED -->
  <section class="who frame" id="who">
    <!-- WHO FRAME -->
    <!-- Who's in on this? -->
    <!--     <div class="row frame-head frame-head--background">
    <!--       <div class="row frame-head frame-head--internal">
    <!--         <div class="container">
    <!--           <div class="col-sm-10 col-sm-push-1">
    <!--             <div class="panel boxy">
    <!--               <div class="v-centered">
    <!--                 <h2>The <span style="font-weight: bold">Cleanweb Initiative</span> is
    <!--                   already hard at work,
    <!--                   helping amazing individuals and great companies
    <!--                   get to the next level</h2>
    <!--               </div>
    <!--             </div>
    <!--           </div>
    <!--         </div>
    <!--       </div>
    <!--     </div><!-- /FRAME-HEAD -->
  
    <!-- AMAZING INDIVIDUALS AND GREAT COMPANIES: 
    <!== the "WHO" GRID
    <!======================================
    <!== How does this thing work?
    <!== In order to get seamless coverage of each rect's image, even
    <!== if the copy text causes it to scale out of square proportion,
    <!== we set the image as a background to the div and use 
    <!== background-size: cover;. Nifty! But that means that all the
    <!== images are set in CSS. Here they're named by class to correspond
    <!== with the company/individual, but the filename itself is 
    <!== invoked in _who-frame.scss (you ARE still using Sass, right?)
    <!== and so future adjustments must be made there.
    <!== 
    <!== Does this break the convention of content in HTML, styling in
    <!== CSS, and never the twain shall meet? You betcha! But it works.
    <!==
    <!== Kinda. -->

    <!-- <div class="row" style="margin: 0; overflow-x: hidden; overflow-y: hidden;">
    <!--   <div class="" style="padding: 0; overflow-x: hidden; overflow-y: hidden;">
    <!--     <ul class="who-matrix">
    <!--       <li class="who-matrix-item">
    <!--         <span class="who-logo who-logo--smartercities"></span>
    <!--       </li>
    <!--       <li class="who-matrix-item">
    <!--         <span class="who-logo who-logo--nest" style=""></span>
    <!--       </li>
    <!--       <li class="who-matrix-item">
    <!--         <span class="who-logo who-logo--sungevity" style=""></span>
    <!--       </li>
    <!--       <li class="who-matrix-item">
    <!--         <span class="who-logo who-logo--sidecar" style=""></span>
    <!--       </li>
    <!--       <li class="who-matrix-item">
    <!--         <span class="who-logo who-logo--smartercities" style=""></span>
    <!--       </li>
    <!--       <li class="who-matrix-item">
    <!--         <span class="who-logo who-logo--nest" style=""></span>
    <!--       </li>
    <!--     </ul>
    <!--   </div>
    <!-- </div> -->
  </section><!-- /WHO FRAME -->

  <!-- where/map frame --><!-- CURRENTLY ENABLED -->
  <section class="where frame" id="where">
    <!-- WHERE FRAME -->
    <!-- Where's the action? -->
    <!-- map frame -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal">
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>The <span style="font-weight: bold;">Cleanweb Initiative</span> 
                  has events and communities<br />
                  around the world - find one near you</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- MAP CONTENT --><!-- n.b. map tiles are specified in /js/communities-map.js -->
    <div class="row">
      <div style="position: relative; height: 600px;">

        <div id="map"></div>
        <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/communities-map.js" type="text/javascript" charset="utf-8" async defer></script>

        <div class="container map-overlay-container">
          <div class="row">
            <div class="col-lg-3 col-lg-offset-8 col-sm-4 col-sm-offset-7 col-xs-12">
              <div class="panel map-more-info">
                <form action="https://drive.google.com/folderview" method="get" target="_new">
                  <input type="hidden" name="id" value="0B3cX2jK4-Emuc0NiQTFuajJBNkU"><!-- resource locator -->
                  <input type="hidden" name="usp" value="sharing">
                  <h3>Want to start a Cleanweb community near you?</h3>
                  <button type="submit" class="btn btn-primary btn--more-info">More Info</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div><!-- /row -->

        <!-- FRAME FOOTER / "Join Now" -->
    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->

  </section><!-- /WHERE FRAME -->

  <!-- featured event frame --><!-- CURRENTLY DISABLED -->
  <section class="events frame" id="events">
    <!-- EVENT FRAME -->
    <!-- upcoming/featured events -->
    <!--
    <!==  <div class="row frame-head frame-head--background">
    <!==    <div class="row frame-head frame-head--internal">
    <!==      <div class="container">
    <!==        <div class="col-sm-10 col-sm-push-1">
    <!==          <div class="panel boxy">
    <!==            <div class="v-centered">
    <!==              <h2>Let's get together
    <!==               and make a difference</h2>
    <!==            </div>
    <!==          </div>
    <!==        </div>
    <!==      </div>
    <!==    </div>
    <!==  </div>
    <!==
    <!==  <!== FILLER CONTENT -->
    <!--  <div class="container">
    <!==    <h1 class="secondary">Featured Event</h1>
    <!==    <h1 class="secondary">NYC May Hackathon</h1>
    <!==    <p class="secondary">Here is a bunch of smaller Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    <!==    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    <!==    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    <!==    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    <!==    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    <!==    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <!==  </div><!== /container -->
  </section><!-- /EVENT FRAME -->

  <!-- social media/twitter plugin frame --><!-- CURRENTLY ENABLED -->
  <section class="social frame" id="social">
    <!-- SOCIAL FRAME -->
    <!-- big twitter splat -->
  
   <div class="row frame-head frame-head--background">
     <div class="row frame-head frame-head--internal">
       <div class="container">
         <div class="col-sm-10 col-sm-push-1">
           <div class="panel boxy">
             <div class="v-centered">
               <h2>Join the #Cleanweb</br>
                 conversation on
                 Twitter and Facebook</h2>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
  
    <!-- TINTUP CONTENT -->
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <script src="http://d36hc0p18k1aoc.cloudfront.net/public/js/modules/tintembed.js"></script>
          <div class="tintup" data-id="cleanwebone"></div>
        </div>
      </div>
    </div><!-- /TINTUP -->

    <!-- FRAME FOOTER / "Join Now" -->
    <div class="frame-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4 col-sm-push-4">
            <!-- JOIN NOW! - currently in a generic GET form with no info; revise this when spec recv'd -->
            <form class="form-inline" role="form" action="/join">
              <button type="submit" class="btn btn-default btn-block join">Join Now</button>
            </form>
          </div>
        </div>
      </div>
    </div><!-- /frame-footer -->
  </section><!-- /SOCIAL FRAME -->

  <!-- sponsor frame --><!--CURRENTLY ENABLED-->
  <section class="sponsors frame" id="sponsors">
    <!-- SPONSOR FRAME -->
    <!-- with a great big thanks to... -->
    <div class="row frame-head frame-head--background">
      <div class="row frame-head frame-head--internal"><!-- FRAME HEADER -->
        <div class="container">
          <div class="col-sm-10 col-sm-push-1">
            <div class="panel boxy">
              <div class="v-centered">
                <h2>The <span style="font-weight: bold;">Cleanweb Initiative</span> is supported by some of the<br />
                 most innovative companies in the world.</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /FRAME HEADER -->

    <div class="container">
      <!-- Sponsor grid -->
      <div class="row sponsor-grid">

        <div class="col-supporters col-supporters--leadership col-xs-6 col-sm-6 col-md-5 col-md-offset-1 col-lg-5 col-lg-offset-1">
        <!-- LEADERSHIP level -->
          <div class="row">
            <div class="container">
              <h3>Leadership</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <a href="http://www.facebook.com" title="Facebook" target="_new" class="bwWrapper">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-Facebook.png" alt="Facebook" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://www.rockportcap.com" title="RockPort Capital" target="_new" class="bwWrapper" width="168px" height="46px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-RockportCapital.gif" alt="Rockport Capital" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6">
              <a href="http://www.terravp.com" title="TERRA Venture Partners" target="_new" class="bwWrapper" width="168px" height="62px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-TerraVenturePartners.jpg" alt="TERRA Venture Partners" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://www.blackcoralcapital.com" title="Black Coral Capital" target="_new" class="bwWrapper" width="121px" height="109px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-BlackCoralCapital.png" alt="Black Coral Capital" />
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-4">
              <a href="http://www.cleanskies.org" title="American Clean Skies" target="_new" class="bwWrapper" width="104px" height="103px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-AmericanCleanSkiesFoundation.png" alt="American Clean Skies" />
              </a>
            </div>
            <div class="col-sm-4">
              <a href="http://www.greenstart.com" title="Greenstart" target="_new" class="bwWrapper" width="94px" height="103px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-Greenstart.png" alt="Greenstart" />
              </a>
            </div>
            <div class="col-sm-4">
              <a href="https://www.yerdle.com/" title="Yerdle" target="_new" class="bwWrapper" width="87" height="65">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-yerdle.jpg" alt="yerdle" />
              </a>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <a href="http://www.mdv.com" title="Mohr Davidow" target="_new" class="bwWrapper" width="129px" height="75px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-MohrDavidow.png" alt="Mohr Davidow" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://www.sungevity.com/" title="Sungevity" target="_new" class="bwWrapper" width="168px" height="42px">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-Sungevity.gif" alt="Sungevity" width="168px" height="42px" />
              </a>
            </div>
          </div>
        </div><!-- /LEADERSHIP level -->

        <div class="col-supporters col-supporters--partnership col-xs-4 col-sm-5 col-sm-offset-1 col-md-4 col-md-offset-1">
        <!-- PARTNERSHIP level -->
          <div class="row">
            <div class="container">
              <h3>Partnership</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-sm-6">
              <a href="http://energy.gov" title="US Department of Energy" target="_new" class="bwWrapper" width="90" height="90">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-DoE.jpg" alt="US Department of Energy" />
              </a>
            </div>
            <div class="col-sm-6">
              <a href="http://sxsweco.com" title="SXSW Eco" target="_new" class="bwWrapper" width="140" height="87">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-SXSW-Eco.jpg" alt="SXSW Eco" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <a href="http://theclimategroup.org" title="The Climate Group" target="_new" class="bwWrapper" width="215" height="24">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-ClimateGroup.gif" alt="The Climate Group" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-push-1">
              <a href="http://c40cities.org" title="C40 Cities" target="_new" class="bwWrapper" width="73" height="57">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-C40.gif" alt="C40 Cities" />
              </a>
            </div>
            <div class="col-sm-4 col-sm-push-2">
              <a href="http://www.whitehouse.gov/administration/eop/ostp" title="Office of Science and Technology Policy" target="_new" class="bwWrapper" width="85" height="85">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-POTUS.gif" alt="Office of Scienc and Technology Policy" />
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-push-1">
              <a href="http://nyc.gov" title="NYC.gov" target="_new" class="bwWrapper" width="76" height="65">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-NYCgov.gif" alt="NYC.gov">
              </a>
            </div>
            <div class="col-sm-4 col-sm-push-2">
              <a href="http://subsite.kk.dk/sitecore/content/Subsites/CityOfCopenhagen/SubsiteFrontpage.aspx?element=header" title="City of Copenhagen" target="_new" class="bwWrapper" width="67" height="86">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/supporters/Supporter-CityOfCopenhagen.png" alt="City of Copenhagen" />
              </a>
            </div>
          </div>
        </div><!-- /PARTNERSHIP level -->

      </div>
    </div><!--/CONTAINER for Sponsor Grid-->
  </section><!--/SPONSOR FRAME -->

  </main>

  <footer>
    <div class="container">
      <div class="row logo">
        <img class="logo center" src="<?php echo get_stylesheet_directory_uri() ?>/img/cleanweb-logo-outline.png" alt="Cleanweb Initiative logo">
      </div>

      <div class="row">
        <div class="col-sm-3" id="mission-statement">
          <p>A lovely place for a mission statement, don't you think?</p>
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
            <li><a href="https://docs.google.com/a/cleanweb.co/spreadsheet/viewform?formkey=dFFrZGZDUTFQdEVDeVdxNTY1a2NVWkE6MQ"  title="Become a Facilitator" target="_new">Become a Facilitator</a></li>
            <li><a href="http://cleanweb.grouptie.com" title="Membership Platform" target="_new">Membership Platform</a></li>
            <li><a href="/live" title="Hangouts">Hangouts</a></li>
          </ul>
        </div>

        <div class="col-sm-3 sitemap sitemap--resources">
          <h3>Resources</h3>
          <ul>
            <li><a href="https://drive.google.com/folderview?id=0B3cX2jK4-Emuc0NiQTFuajJBNkU&usp=sharing" title="Facilitator's Overview" target="_new">Facilitator's Overview</a></li>
            <li><a href="https://drive.google.com/folderview?id=0B3cX2jK4-EmuN0VONUFwa09xRG8&usp=sharing" title="Starting Your Community" target="_new">Starting Your Community</a></li>
            <li><a href="https://drive.google.com/folderview?id=0B3cX2jK4-Emua1V5RjhOUFF2YlE&usp=sharing" title="Organizing and Running a Hackathon" target="_new">Organizing and Running a Hackathon</a></li>
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
          <a href="#" alt="Contact Us">Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="#" alt="Privacy Policy">Privacy Policy</a>&nbsp;&nbsp;|&nbsp;&nbsp;All Rights Reserved by The Cleanweb Initiative&nbsp;&nbsp;|&nbsp;&nbsp;Cleanweb 2013
        </p>
      </div>
    </div>
  </footer>

</body>
</html>